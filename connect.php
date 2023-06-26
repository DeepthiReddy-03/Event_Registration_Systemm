<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "newst";
$db = new mysqli($servername, $username, $password, $db_name);
if($db->connect_error){
    die("connection failed:" . $db->connect_error);
}
?>