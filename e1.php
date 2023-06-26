<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="report.css">
</head>
<body>
    <div class="container my-5">
        <h2>LIST</h2>
        <br>
        <a class="btn btn-danger" class="hbtn" href="/aevent/home.html" role="button">Home</a>
        <!-- <a class="btn btn-primary" class="hbtn" href="/Student/register.html" role="button">New Registration</a> -->
        <!-- <a class="btn btn-secondary" class="hbtn" href="/Student/details.php" role="button">All courses</a> -->
        <a class="btn btn-secondary" class="hbtn" href="/aevent/e1.php" role="button">e1</a>
        <a class="btn btn-secondary" class="hbtn" href="/aevent/e2.php" role="button">e2</a>
        <a class="btn btn-secondary" class="hbtn" href="/aevent/e3.php" role="button">e3</a>
        <a class="btn btn-secondary" class="hbtn" href="/aevent/e4.php" role="button">e4</a>
        <!-- <a class="btn btn-secondary" class="hbtn" href="/Student/marks.php" role="button">Rankings</a> -->
        <br>
        <br>
        

        <h6>e1 Registrations</h6>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Number of Participants</th>
                    <th>Winner</th>
                    <!-- <th>CGPA</th>
                    <th>Course ID</th> -->
                    <th>Delete/Update</th>
                <tr>
            </thead>
            <tbody>
                <?php
                //    $servername = "localhost";
                //    $username = "root";
                //    $password = "";
                //    $database = "studentre";
                //    // Create connection
                //    $connection = new mysqli($servername,$username,$password,$database);
                //    $conn = new mysqli('localhost','root','','studentre');
                   // check connection
                   $connection = new mysqli('localhost','root','','events');
                   if($connection->connect_error){
                    die("Conenction failed: ".$connection->connect_error);
                   }
                   $sql = "SELECT * FROM report where EventName= 'e1' ";
                   $result = $connection->query($sql);
                //    $sq2 = "SELECT courseName from cr1 where cid.re1 = cid.ce1";
                //    $re = $connection->query($sq2);
                   if(!$result){
                    die("Invalid Query: ".$conn->error);
                   }
                   while($row = $result->fetch_assoc()){
                    echo"
                        <tr>
                            <td>$row[EventName]</td>
                            <td>$row[StartDate]</td>
                            <td>$row[EndDate]</td>
                            <td>$row[NoofParticipants]</td>
                            <td>$row[Winner]</td>
                            // <td>$row[cgpa]</td>
                            // <td>$row[cid]</td>
                           
                            <td>
                            <a class='btn btn-primary btn-sm' href='/events/edit1.php?Event Name=$row[EventName]&Start Date=$row[StartDate]&End Date=$row[EndDate]&Number of Participants=$row[NoofParticipants]&Winner=$row[Winner]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/events/delete.php?Event Name=$row[EventName]'>Delete</a>
                            
                            
                            </td>
                        </tr>
                    ";
                   }
                ?>
                <!-- <a class='btn btn-primary btn-sm' href='/Student/edit.php?id=$row[id]'>Edit</a> -->
            </tbody>
        </table>
    </div>
</body>
</html>