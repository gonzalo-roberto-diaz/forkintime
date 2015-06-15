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

$sql = "SELECT * FROM reviews ORDER BY id";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

$res = array();
while($row = mysqli_fetch_assoc($result)){

  $fila = array();
  $fila["customer_name"] = $row["customer_name"];
  $fila["location"] = $row["location"];
  $fila["review_text"] = $row["review_text"];

  $res[] = $fila;
}
$db->close();

echo json_encode($res);


?>
