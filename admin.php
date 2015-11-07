<?php
include_once("./inc/helper.php");

session_start();

if(!isset($_SESSION["login"])){
	header("Location: ./login.php");
	exit(0);
}
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
<h1>Babble Bar Admin</h1>
<br>
<br>
<br>
<br>

<div class="row">
  <div class="input-field col s12">
    <select id="stations">
      <option value="" disabled selected>Choose Device</option>
    </select>
    <label>Select Station</label>
  </div>
</div>
<div class="row">
	<div class="col s12 m6 input-field">
	<input placeholder="0011223344556677" id="station_id" type="text" class="validate" />
	<label for="station_id">Device ID</label>
	</div>
	<div class="col s12 m6 input-field">
	<input placeholder="Babble Bar" id="station_name" type="text" class="validate" />
	<label for="station_name">Station Name</label>
	</div>
</div>
<div class="row">
	<div class="col s12 m6 input-field">
	<input placeholder="47.29292" id="station_lat" type="text" class="validate" />
	<label for="station_lat">Latitude</label>
	</div>
	<div class="col s12 m6 input-field">
	<input placeholder="8.8825" id="station_long" type="text" class="validate" />
	<label for="station_lat">Longitude</label>
	</div>
</div>

<div class="row center">
	<a id="save" class="waves-effect waves-light btn disabled"><i class="material-icons right">cloud</i>Save</a>
</div>

</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script type="text/javascript" src="js/admin.js"></script>

</body>
</html>

