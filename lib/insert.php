<?php 

  header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

   $mysqli = new mysqli("localhost", "root","","essilor"); 

$taskTitle = '';
$taskDescription = '';

if(isset($_GET['taskTitle'])){

$taskTitle = $_GET['taskTitle'];
$taskDescription = $_GET['taskDescription'];

$created = date("Y/m/d");
$priority = "4";


$query="INSERT INTO task(title,description,created,priority)  VALUES ('$taskTitle', '$taskDescription', '$created', '$priority')";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

echo $json_response = json_encode($result);
}
?>