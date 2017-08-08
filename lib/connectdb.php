<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","essilor");

$mysqli = new mysqli(HOSTNAME,USERNAME,PASSWOR,DATABASE) or die("UNABLE to connect to DB.");
?>