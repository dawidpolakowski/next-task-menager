<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root","","essilor");

$result = $conn->query("SELECT * FROM  task");

$outp = "";

while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"title":"'   . $rs["title"]        . '",';
    $outp .= '"description":"'   . $rs["description"]        . '",';
     $outp .= '"created":"'   . $rs["created"]        . '",';
    $outp .= '"priority":"'. $rs["priority"]     . '"}';
}
$outp ='{"task":['.$outp.']}';
$conn->close();

echo($outp);
?>

