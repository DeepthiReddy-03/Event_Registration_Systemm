<?php
$insert = false;
include('connect1.php');
if (isset($_POST['evname'])){
$evname = $_POST['evname'];
$stdate = $_POST['stdate'];
$des = $_POST['des'];
$sql ="INSERT INTO `addeve`(`evname`, `stdate`, `des`) VALUES ('$evname','$stdate','$des');";
if($dbs->query($sql) == TRUE){
    header('location:aeve.php?msg=Successfully inserted...');
    $insert = true;
}
else{
    header('location:aeve.php?msg=insertion failed...');
}
}

?>