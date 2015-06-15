<?php

require_once "db_config.php";

header("Content-Type: text/plain; charset=utf-8");

$db = new mysqli($host, $username, $password, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



$sql = "SELECT * FROM forklifts";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

$res = array();
while($row = mysqli_fetch_assoc($result)){

  $fila = array_map("utf8_encode", $row);
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
  $res[] = $fila;
}
$db->close();

echo json_encode($res);


?>
