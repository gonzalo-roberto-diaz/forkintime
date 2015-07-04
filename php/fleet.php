<?php

require_once "db_config.php";

header("Content-Type: application/json; charset=UTF-8;");


$db = new mysqli($host, $username, $password, $db_name);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
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
  if ($environment=="development_mac"){
    $row= array_map("utf8_encode", $row);
  }
  $res[] = $row;
}

echo json_encode($res);


?>
