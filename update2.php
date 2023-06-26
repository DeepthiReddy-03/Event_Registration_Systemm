<?php
$name=$_GET['name'];
$dob = $_GET['dob'];
$roll=$_GET['roll'];
$gen = $_GET['gen'];
$email = $_GET['email'];
$dept = $_GET['dept'];
// $eid = $_GET['eid'];
?>
<html>
    <head>
        <title>form</title>
        <link href="style1.css" rel="stylesheet">
        <style>
           
            </style>
    </head>
    <body>
    <div class="header">
        <h1 >Event Registration System</h1>

    </div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="form.php"  class="active">Register</a></li>
        <li><a href="view.php">View</a></li>
    </ul>
        <form  class="form" action="update1.php" method="post">
                <legend style="text-align:center;font-size:30px;font-weight:bold;" >Student Updation Form</legend>
                <br><br>
                <label >Student Name:</label>
                <input type="text" name="name" id="add"size="50px" value="<?php echo $name ?>" placeholder="Enter your name" required="true">
                <br><br>
                <label>Date Of Birth:</label> 
                <input type="date" id="add" name="dob" size="100px" autofucu="true" value="<?php echo $dob ?>"  placeholder="Enter your date of birth" required="true">
                <br><br>
                <label>Roll number:</label>
                <input type="text" id="add" name="roll" size="100px" autofucu="true" value="<?php echo $roll?>" placeholder="Enter your rollnumber" required="true">
                <br><br>
                <label  id = "As">Gender:</label>
                <input type="radio"  id = "As" name="gen" value="female"
                <?php
                    if($gen=='female'){
                        echo "selected";
                    }
                ?>
                ><a>Female</a>
                <input type="radio" id = "As" name="gen" value="male"
                <?php
                    if($gen=='male'){
                        echo "selected";
                    }
                ?>
                ><a>Male</a>
                <br><br>
                <label>Email:</label>
                <input type="email" id="add" name="email" size="100px" autofucu="true" value="<?php echo "$email" ?>" placeholder="Enter your email" required="true">
                <br><br>
               <label>Department:</label>
                <input type="text"  list="list2" name="dept" id="add" value="<?php echo $dept ?>" placeholder="select" >
                <datalist id="list2">
                    <option value="<?php echo "$dept" ?>" label="">
                    <option value="<?php echo "$dept" ?>" label="">
                    <option value="<?php echo "$dept" ?>" label="">
                    <option value="<?php echo "$dept" ?>" label="">
                    <option value="<?php echo "$dept" ?>" label="">
                    <option value="<?php echo "$dept" ?>" label="">
                    <option value="<?php echo "$dept" ?>" label="">  
               </datalist>
               <br><br>
                <label>Event:</label>
                <input type="text"  list="list1" name="eid" id="add" placeholder="Select">
                <datalist id="list1">
                    <option value="<?php echo "$eid" ?>" label="Coding Contest">
                    <option value="<?php echo "$eid" ?>" label="AI Workshop">
                    <option value="<?php echo "$eid" ?>"  label="Robotic Workshop">
                    <option value="<?php echo "$eid" ?>"  label="Best out Of Waste">
                    <option value="<?php echo "$eid" ?>"  label="Treasure Hunt">
                    <option value="<?php echo "$eid" ?>"  label="TalentShow">
               </datalist>
               <br><br>
             <input type="submit" name="Register">
             <input type="reset" name="reset">
        </form>
    </body>
</html>