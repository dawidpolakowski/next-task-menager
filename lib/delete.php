<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

   $mysqli = new mysqli("localhost", "root","","essilor"); 

    if(isset($_GET['id'])){
        $taskID = $_GET['id'];

        $query="delete from task where id='$taskID'";
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $result = $mysqli->affected_rows;

            echo $json_response = json_encode($result);
}
?> 