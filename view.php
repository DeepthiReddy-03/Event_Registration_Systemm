<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" rel="stylesheet">
    <title>Student Registration</title>
</head>
<body>
<div class="header">
        <h1>Event Registration System</h1>

    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="form.php">Register</a></li>
        <li><a href="view.php"  class="active">View</a></li>
    </ul>
    <?php
    include('connect.php');
    if(isset($_GET['roll'])){
        $roll = $_GET['roll'];
        $delete = "delete from details where roll='$roll'";
        $run = $db->query($delete);
    }
    $select="select name,dob,roll,gen,email,dept,eid,dt from details";
    
    $run=$db->query($select);
    ?>

<table border="3px" width="100%">
    <tr background-color="grey">
        <caption>Student Records</caption>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Roll number</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Department</th>
        <th>Event Name</th>
        <th>Dt</th>
        <th>Delete</th>
        <th>Edit</th>
            <?php
             while($row=$run->fetch_assoc()){
                echo "
            <tr>
            <td> $row[name]</td>
            <td> $row[dob]</td>
            <td> $row[roll]</td>
            <td> $row[gen]</td>
            <td> $row[email]</td>
            <td> $row[dept]</td>
            <td> $row[eid]</td>
            <td> $row[dt]</td>
            <td><a href='view.php?roll=$row[roll]'><button>Delete</button></a></td>
            <td><a href='/Register/update2.php?roll=$row[roll]&dob=$row[dob]&name=$row[name]&gen=$row[gen]
            &email=$row[email]&dept=$row[dept]&eid = $row[eid]'><button>Edit</button></a></td>
            </tr>
                ";
             }
            ?>
            </table>
        </body>
</html>