<?php
    $servername = "localhost";
    $username = "root";
    $passoword = "";
    $database = "aevent";
    // Create connection
    $connection = new mysqli($servername,$username,$passoword,$database);
    if(isset($_GET['EventName'])){
    $EventName = $_GET['EventName'];
    $sql = "DELETE FROM veve WHERE EventName=$EventName;";
    $data = mysqli_query($connection,$sql);
    }

    if($data){
        echo "Record Deleted from Database";
    }
    else{
        echo "Failed to delete record from databse";
    }
   
   header("location: /aevent/veve.php");
   exit;
?>
