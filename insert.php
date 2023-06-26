<?php
$insert = false;
include('connect.php');
if (isset($_POST['roll'])){
$name = $_POST['name'];
$dob = $_POST['dob'];
$roll = $_POST['roll'];
$gen = $_POST['gen'];
$email = $_POST['email'];
$dept = $_POST['dept'];
$eid = $_POST['eid'];
$sql = "INSERT INTO `details`(`name`, `dob`, `roll`, `gen`, `email`, `dept`, `eid`,`dt`) VALUES ('$name','$dob','$roll','$gen','$email','$dept','$eid',current_timestamp());";
if($db->query($sql) == TRUE){
    header('location:form.php?msg=Successfully inserted...');
    $insert = true;
}
else{
    header('location:form.php?msg=insertion failed...');
}
}
?>
