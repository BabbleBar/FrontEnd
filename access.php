<?php
session_start();
header("Content-Type: text/plain");

if($_POST["user"] === getenv("BUSER") && $_POST["pass"] === getenv("PASS")){
	$_SESSION["login"] = true;
	echo "ok";	
	exit(0);
}
echo "fail";
?>
