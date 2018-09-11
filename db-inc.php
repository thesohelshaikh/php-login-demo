<?php

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db-users";

$conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);
if ($conn){
    echo "success";
}
if(!$conn){
    echo "connection unsucessfull";
}
