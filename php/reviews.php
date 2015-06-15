<?php

require_once "db_config.php";

header("Content-Type: text/plain; charset=utf-8");

$db = new mysqli($host, $username, $password, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "SELECT * FROM reviews ORDER BY id";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

$res = array();
while($row = mysqli_fetch_assoc($result)){

  $fila = array_map("utf8_encode", $row);
/*
  $fila["customer_name"] = $row["customer_name"];
  $fila["location"] = $row["location"];
  $fila["review_text"] = utf8_encode($row["review_text"]);
*/
  $res[] = $fila;
}


echo json_encode($res);
$db->close();

?>
