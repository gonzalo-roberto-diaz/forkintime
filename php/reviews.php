<?php

require_once "db_config.php";

header("Content-Type: application/json;; charset=utf-8");

$db = new mysqli($host, $username, $password, $db_name);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

$sql = "SELECT * FROM reviews ORDER BY id";



if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}



$res = array();
while($row = mysqli_fetch_assoc($result)){
  if ($environment!="development_mac"){
    $row= array_map("utf8_encode", $row);
  }
  $res[] = $row;
}


$db->close();
echo json_encode($res);


?>
