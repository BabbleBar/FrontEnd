var station_data = null;

$(document).ready(function(){
	$('select').material_select();
	$('#stations').change(function(){
		$("#save").removeClass("disabled");
		$.each(station_data, function(key, val){
			if(val.id == $("#stations").val()){
			$("#station_id").val(val.id);
			$("#station_name").val(val.name);
			$("#station_lat").val(val.lat);
			$("#station_long").val(val.long);
			}
			});
		//console.log($("#stations").val());
		});

	update_list();

	$("#save").click(function(){
		$.post("./update-data.php",
			{
			"id" :  $("#stations").val(),
			"name" :  $("#station_name").val(),
			"lat" : $("#station_lat").val(),
			"long" : $("#station_long").val(),
			"new_id" : $("#station_id").val()
			}
		      ).done(function(resp){
			  update_list();
			  });
		});
});

function update_list(){
    $.getJSON("./query-data.php", function(data){
	    station_data = data;
	    $("#stations").find("option:gt(0)").remove();

	    $.each(station_data, function(key, val){
		    $("#stations").append($("<option></option>")
			    .attr("value", val.id)
			    .text(val.id + " " + val.name));
		    });
	    $('select').material_select();
	    });
}

