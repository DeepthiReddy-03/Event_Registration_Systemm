
<?php
include('connect.php');
$update = false;
// if(isset($_GET['roll'])){
//     $roll = $_GET['roll'];
//     $select = mysqli_query($db, "select * from details where roll='$roll'");
//     $data = mysqli_fetch_array($select);
    
//     }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset( $_POST['roll'])){
          // Update the record
            $roll = $_POST["roll"];
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $roll = $_POST['roll'];
            $email = $_POST['email'];
            $dept = $_POST['dept'];
            $eid = $_POST['eid'];
        
          // Sql query to be executed
          $sql = "UPDATE `details` SET `name`='$name',`dob`='$dob',`roll`='$roll',`email`='$email',`dept`='$dept',`eid`='$eid' WHERE `roll`='$roll';";
          $result = mysqli_query($db, $sql);
          if($result){
            $update = true;
        }
    else{
        echo "We could not update the record successfully";
    }
    }
}

      
?>
<!--
<html>
    <head>
        <title>form</title>
        <link href="style.css" rel="stylesheet">
        <style>
           
            </style>
    </head>
    <body>
    <div class="header">
        <h1 >Student Registration System</h1>

    </div>

    <ul>
        <li><a href="student.php">Home</a></li>
        <li><a href="form.php"  class="active">Register</a></li>
        <li><a href="view.php">View</a></li>
    </ul>
        <form  class="form" action="update.php" method="post">
                <legend style="text-align:center;font-size:30px;font-weight:bold;" >Update Registration Form</legend>
                <br><br>
                <label >Student Name:</label>
                <input type="text"  id="add" name="name" size="50px" autofucu="true" value="" placeholder="Enter your name" required="true">
                <br><br>
                <label>Date Of Birth:</label>
                <input type="date" id="add" name="dob" size="100px" autofucu="true" value="" placeholder="Enter your date of birth" required="true"> 
                <br><br>
                <label>Roll number:</label>
                <input type="text" id="add" name="roll" size="100px" autofucu="true" value=""  placeholder="Enter your rollnumber" required="true">
                <br><br>
                <label  id = "As">Gender:</label>
                <input type="radio"  id = "As" name="gen" value="">Female
                <input type="radio" id = "As" name="gen" value="">Male
                <br><br>
                <label>Email:</label>
                <input type="email" id="add" name="email" size="100px" autofucu="true" value=""  placeholder="Enter your email" required="true">
                <br><br>
               <label>Department:</label>
                <input type="text"  list="list2" name="dept" id="add" value=""  placeholder="select" >
                <datalist id="list2">
                    <option value="CSE" label="">
                    <option value="ECE" label="">
                    <option value="IT" label="">
                    <option value="MECH" label="">
                    <option value="CIVIL" label="">
                    <option value="CSM" label="">
                    <option value="AIDS" label="">
               </datalist>
               <br><br>
                <label>Event:</label>
                <input type="text"  list="list1" name="eid" id="add" value="" placeholder="Select">
                <datalist id="list1">
                <option value="E101" label="Coding Contest">
                    <option value="E102" label="AI Workshop">
                    <option value="E103" label="Robotic Workshop">
                    <option value="E104" label="Best out Of Waste">
                    <option value="E105" label="Treasure Hunt">
                    <option value="E106" label="TalentShow">
               </datalist>
               <br><br>
             <input type="submit" name="update">
            
        </form>
    </body>
</html>
-->