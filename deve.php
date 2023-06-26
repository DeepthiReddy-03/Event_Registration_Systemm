<form>
    <input type="button" value="delete" formaction="deve.php"> 
</form>
<?php
    include('connect1.php');
    if(isset($_GET['evname'])){
        $evname = $_GET['evname'];
        $delete = "delete from addeve where evname='$evname'";
        $run = $dbs->query($delete);
    }
    $select="select evname,stdate,des from addeve";
    
    $run=$db->query($select);
    ?>