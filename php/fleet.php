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
$sql .="  fkl.trans_key,  \n";
$sql .="  fkl.wheel_type_trans_key,  \n";
$sql .="  fkl.engine_type_trans_key,  \n";
$sql .="  fkl.wheels,  \n";
$sql .="  fkl.picture  \n";
$sql .="from forklifts fkl   \n";


if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

$res = array();
while($row = mysqli_fetch_assoc($result)){

  //$fila = array_map("utf8_encode", $row);


/*
  $fila = array();
  $fila["make"] = $row["make"];
  $fila["model"] = $row["model"];
  $fila["description"] = utf8_encode($row["description"]);
  $fila["picture"] = $row["picture"];
  $fila["max_load_kg"] = $row["max_load_kg"];
  $fila["max_height_m"] = $row["max_height_m"];
  $fila["engine"] = $row["engine"];
  $fila["wheel_type"] = $row["wheel_type"];
*/
  $res[] = $row;
}
$db->close();

echo json_encode($res);


?>
