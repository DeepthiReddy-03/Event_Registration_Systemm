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
$sql = "UPDATE details SET name='$name',dob='$dob',roll='$roll',gen='$gen',email='$email',dept='$dept',eid='$eid' where roll='$roll';";
if($db->query($sql) == TRUE){
    header("location:success.html");
    $insert = true;
}
else{
    header('location:form.php?msg=insertion failed...');
}
}
?>