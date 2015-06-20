<?php

require_once "db_config.php";

header("Content-Type: application/json; charset=UTF-8;");

$language =$_GET['proposed-language'];

$db = new mysqli($host, $username, $password, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql ="select  \n";
$sql .="  fkl.make,  \n";
$sql .="  fkl.model, \n";
$sql .="  fkl.max_load_kg,  \n";
$sql .="  fkl.max_height_m,  \n";
$sql .="  fkl.description_trk,  \n";
$sql .="  fkl.wheel_type_trk,  \n";
$sql .="  fkl.engine_type_trk,  \n";
$sql .="  fkl.wheels,  \n";
$sql .="  fkl.picture  \n";
$sql .="from forklifts fkl   \n";


if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

$res = array();
while($row = mysqli_fetch_assoc($result)){
  if ($environment=="production"){
    $row= array_map("utf8_encode", $row);
  }
  $res[] = $row;
}

echo json_encode($res);


?>
