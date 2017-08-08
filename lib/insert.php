<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));

$btnName=$dbhandle->real_escape_string($data->btnName);
if($btnName=='Insert'){

$id=$dbhandle->real_escape_string($data->id);
$name=$dbhandle->real_escape_string($data->title);

$query="INSERT INTO student VALUES($id,'".$title."')";

$dbhandle->query($query);
	}

	else {

		$id=$dbhandle->real_escape_string($data->id);
       $name=$dbhandle->real_escape_string($data->title);
       	$query="UPDATE student SET studname = '".$title."' WHERE studid=$id ";
       	$dbhandle->query($query);
	}
?>