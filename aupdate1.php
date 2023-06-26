<?php
$insert = false;
include('connect1.php');
if (isset($_POST['EventName'])){
    $EventName = $_POST['EventName'];
    $StartDate = $_POST['StartDate'];
    $EndDate = $_POST['EndDate'];
    $NoofParticipants = $_POST['NoofParticipants'];
    $Winner = $_POST['Winner'];
$sql = "UPDATE veve SET EventName='$EventName',StartDate='$StartDate',EndDate='$EndDate',NoofParticipants='$NoofParticipants',Winner='$Winner'where EventName='$EventName';";
if($dbs->query($sql) == TRUE){
    header("location:veve.php");
    $insert = true;
}
else{
    header('location:veve.php?msg=insertion failed...');
}
}
?>