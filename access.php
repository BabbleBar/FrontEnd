<?php
session_start();
header("Content-Type: text/plain");
if($_POST["user"] === "babble" && $_POST["pass"] === "bar"){
	$_SESSION["login"] = true;
	echo "ok";	
	exit(0);
}
echo "fail";
?>
