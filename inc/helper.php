<?php

function list_stations(){
    $stations = file_get_contents("./data/stations.txt");

    if($stations === false){
	err("stations file unreadable or does not exist", 1201);
    }

    if(!trim($stations)){
	err("stations file is empty", 1202);
    }

    $stations = explode("\n", trim($stations));
    $ret = array();

    foreach($stations as $s){
	$ret[] = get_station($s);
    }

    return $ret;
}


function update_station($id, $name,  $lat, $long){
    $str = json_encode(array("name" => $name, "lat" => $lat, "long" => $long, "name" => $name));
    file_put_contents("./data/".$id.".json", $str);
}

function persist_stations($stations){
    $str = "";
    foreach($stations as $s){
	$str.= "$s\n";
    }
    file_put_contents("./data/stations.txt", $str);
}

function get_station($id){

    $data = json_decode(file_get_contents("./data/".$id.".json"), true);

    $lat = $data["lat"];
    $long = $data["long"];
    $name = $data["name"];

    return array(
	    "id" => $id,
	    "lat" => $lat,
	    "long" => $long,
	    "name" => $name
	    );
}

function err($message, $code){
    echo json_encode(array(
		"status" => "error",
		"message" => $message,
		"code" => $code
		));
    echo "\n";
    exit(1);
}

function fetch_data(){

    $url = "http://blogger.scapp.io/type/lum/avg/minutes/30";

    // use key 'http' even if you send the request to https://...
    $options = array(
	    'http' => array(
		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		'method'  => 'GET',
		),
	    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    echo $result;

}

?>
