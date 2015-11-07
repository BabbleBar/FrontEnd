<?php
include_once("./inc/helper.php");
header("Content-Type: text/plain");

echo json_encode(list_stations(), JSON_PRETTY_PRINT);
exit(0);

?>
