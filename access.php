<?php
session_start();
header("Content-Type: text/plain");
echo getenv("USER")."\n";
echo getenv("PASS");

if($_POST["user"] === getenv("USER") && $_POST["pass"] === getenv("PASS")){
	$_SESSION["login"] = true;
	echo "ok";	
	exit(0);
}
echo "fail";
?>
