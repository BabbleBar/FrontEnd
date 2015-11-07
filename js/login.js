$(document).ready(function(){
	$("#login").click(function(){
		$.post("./access.php", {
			"user" : $("#user").val(),
			"pass" : $("#pass").val()
			}).done(function(res){
				if(res == "ok"){
					window.location = "./admin.php";
				}else{
					$("#info").text("error logging in");
				}
			    });
		});
	});
