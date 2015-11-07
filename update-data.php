<?php

include_once("./inc/helper.php");

header("Content-Type: text/plain");

$stations = file_get_contents("./data/stations.txt");

if($stations === false){
	err("stations file unreadable or does not exist", 1201);
}

if(empty(trim($stations))){
	err("stations file is empty", 1202);
}

$stations = explode("\n", trim($stations));

$input_data = array(
		"id" => $_POST["id"],
		"name" => $_POST["name"],
		"lat" => $_POST["lat"],
		"long" => $_POST["long"],
		"new_id" => $_POST["new_id"]
		);


// check formal validity of data

if(preg_match("/^[0-9a-fA-F]{16}$/", $input_data["id"]) == 0){
	err("device ".$input_data["id"]." invalid", 1401);
}

if(preg_match("/^[0-9\.]{1,50}$/", $input_data["lat"]) == 0){
	err("cannot parse lat ".$input_data["lat"],1402);
}

if(preg_match("/^[\-0-9\.]{1,50}$/", $input_data["long"]) == 0){
	err("cannot parse long ".$input_data["long"],1403);
}

if(isset($input_data["new_id"]) && preg_match("/^[0-9a-fA-F]{16}$/", $input_data["new_id"]) == 0){
	err("new_id ".$input_data["id"]." invalid", 1404);
}


// check contextual validity of data

if(!in_array($input_data["id"], $stations)){
	$stations[] = $input_data["id"];
	persist_stations($stations);
}

if(isset($input_data["new_id"]) && $input_data["new_id"] != $input_data["id"]){
	$new_stations = array();
	foreach($stations as $s){
		if($s != $input_data["id"]){
		    $new_stations[] = $s;
		}
	}
	$new_stations[] = $input_data["new_id"];
	$stations = $new_stations;
	
	persist_stations($stations);
	update_station($input_data["new_id"], $input_data["name"], $input_data["lat"],$input_data["long"]);
}else{
	update_station($input_data["id"], $input_data["name"], $input_data["lat"],$input_data["long"]);
}



echo json_encode(array(
			"status" => "ok",
		      ));

echo "\n";
exit(0);

