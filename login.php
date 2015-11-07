<?php
include_once("./inc/helper.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

<!--Import materialize.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--Import jQuery before materialize.js-->

<div class="container">
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="col s12 m6 input-field offset-m3">
	<input id="user" type="text" class="validate" >
	<label>Username</label>
    </div>
</div>
<div class="row">
    <div class="col s12 m6 input-field offset-m3">
	<input id="pass" type="password" class="validate" >
	<label>Password</label>
    </div>
</div>
<div class="row">
    <div class="center">
	<a class="waves-effect waves-light btn" id="login"><i class="material-icons right">input</i>login</a>
    </div>
</div>
<div class="row">
    <div class="center">
	<p id="info" class="red-text"/>
    </div>
</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>

</body>
</html>

