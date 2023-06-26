<?php
$insert = false;
include('connect1.php');
if (isset($_POST['EventName'])){
$EventName = $_POST['EventName'];
$StartDate = $_POST['StartDate'];
$EndDate = $_POST['EndDate'];
$NoofParticipants = $_POST['NoofParticipants'];
$Winner = $_POST['Winner'];
$sql = "INSERT INTO `veve`(EventName,StartDate,EndDate,NoofParticipants,Winner) VALUES ('$EventName','$StartDate','$EndDate','$NoofParticipants','$Winner');";
if($dbs->query($sql) == TRUE){
    header('location:veve.php?msg=Successfully inserted...');
    $insert = true;
}
else{
    header('location:veve.php?msg=insertion failed...');
}
}

?>