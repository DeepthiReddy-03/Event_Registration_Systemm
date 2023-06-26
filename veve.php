<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT</title>
    
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="report.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of people Registered for Events</h2>
        <br>
        <a class="btn btn-danger" class="hbtn" href="/register/a.php" role="button">Home</a>
        <!-- <a class="btn btn-primary" class="hbtn" href="/Events/register.html" role="button">Add Event</a> -->
        <!-- <a class="btn btn-secondary" class="hbtn" href="/Events/report.php" role="button"></a>  -->
        <form align="center" action="e">
            <label for="events"></label>
            <select name="events" id="events">
                <option >select event</option>
                <option value="dsgdbhh" name="EventName">dsgdbhh</option>
                <option value="mrudula" name="EventName">mrudula</option>
                <option value="e3" name="EventName">e3</option>
                <option value="e4" name="EventName">e4</option>
            </select>
            <input type="submit" formaction="event1.php"> 
        </form>
        <!-- <a class="btn btn-secondary" class="hbtn" href="/events/e1.php" role="button">e1</a>
        <a class="btn btn-secondary" class="hbtn" href="/event/e2.php" role="button">e2</a>
        <a class="btn btn-secondary" class="hbtn" href="/event/e3.php" role="button">e3</a>
        <a class="btn btn-secondary" class="hbtn" href="/event/e4.php" role="button">e4</a>
        <a class="btn btn-secondary" class="hbtn" href="/Student/marks.php" role="button">Rankings</a> -->

        <br>
        <br>
        <!-- <h6>Webdevelopment - 1</h6> -->
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
                
                   $connection = new mysqli('localhost','root','','aevent');
                   if($connection->connect_error){
                    die("Conenction failed: ".$connection->connect_error);
                   }
                   if(isset($_GET['EventName'])){
                    $EventName = $_GET['EventName'];
                    $delete = "DELETE from veve where EventName='$EventName';";
                    $run = $connection->query($delete);
                }
                   $sql = "SELECT * FROM veve";
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
                           
                            <td>
                            <a class='btn btn-primary btn-sm' href='/register/aupdate.php?EventName=$row[EventName]&StartDate=$row[StartDate]&EndDate=$row[EndDate]&NoofParticipants=$row[NoofParticipants]&Winner=$row[Winner]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/register/veve.php?EventName=$row[EventName]'>Delete</a>
                            
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
