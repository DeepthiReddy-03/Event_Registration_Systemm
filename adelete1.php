<?php
    include('connect1.php');
    if(isset($_GET['EventName'])){
        $EventName = $_GET['EventName'];
        $delete = "DELETE from veve where EventName='$EventName';";
        $run = $dbs->query($delete);
    }
    $select="SELECT * from veve";
    
    $run=$dbs->query($select);
    ?>