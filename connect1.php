<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_n = "aevent";
$dbs = new mysqli($servername, $username, $password, $db_n);
if($dbs->connect_error){
    die("connection failed:" . $dbs->connect_error);
}
?>