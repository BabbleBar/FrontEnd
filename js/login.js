$(document).ready(function(){
    $("#login").click(function(){
	login();
    });

    $("#login, #user, #pass").keypress(function(e){
	    if(e.which == 13) login();
    });
});

function login(){
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
}

