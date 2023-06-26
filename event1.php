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
                   include('connect1.php');
                   if(isset($_GET['EventName'])){
                   $EventName = $_GET['EventName'];
                   }
                   $sql = "SELECT * FROM veve where EventName = "$EventName";";
                   $result = $dbs->query($sql);
                //    $sq2 = "SELECT courseName from cr1 where cid.re1 = cid.ce1";
                //    $re = $connection->query($sq2);
                //    if(!$result){
                //     die("Invalid Query: ".$conn->error);
                //    }
                   while($row = $result->fetch_assoc()){
                    echo"
                        <tr>
                            <td>$row[EventName]</td>
                            <td>$row[StartDate]</td>
                            <td>$row[EndDate]</td>
                            <td>$row[NoofParticipants]</td>
                            <td>$row[Winner]</td>
                           
                            <td>
                            <a class='btn btn-primary btn-sm' href='/aevent/edit1.php?Event Name=$row[EventName]&Start Date=$row[StartDate]&End Date=$row[EndDate]&Number of Participants=$row[NoofParticipants]&Winner=$row[Winner]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/aevent/delete.php?Event Name=$row[EventName]'>Delete</a>
                            
                            </td>
                        </tr>
                    ";
                   }
                ?>