<?php

header("Content-Type: text/plain; charset=utf-8");


$host="localhost";
$username ="root";
$password="broadleaf";
$db_name="clarkatiempo";


$db = new mysqli($host, $username, $password, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$db->set_charset("utf8")) {
     printf("Error loading character set utf8: %s\n", $mysqli->error);
 }

$sql = "SELECT * FROM forklifts";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

$res = array();
while($row = mysqli_fetch_assoc($result)){

  $fila = array();
  $fila["make"] = $row["make"];
  $fila["model"] = $row["model"];
  $var = $row["description"];
  //$fila["description"] = utf8_encode($var);
  $fila["description"] = $var;
  $fila["picture"] = $row["picture"];
  $fila["max_load_kg"] = $row["max_load_kg"];
  $fila["max_height_m"] = $row["max_height_m"];
  $fila["engine"] = $row["engine"];
  $fila["wheel_type"] = $row["wheel_type"];
  $res[] = $fila;
}
$db->close();

echo json_encode($res);


?>
