<?php

require_once "db_config.php";

header("Content-Type: application/json;; charset=utf-8");

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
  if ($environment=="production"){
    $row= array_map("utf8_encode", $row);
  }
  $res[] = $row;
}


$db->close();
echo json_encode($res);


?>
