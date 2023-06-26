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
        <form  class="form" action="insert.php" method="post">
                <legend style="text-align:center;font-size:30px;font-weight:bold;" >Student Registration Form</legend>
                <br><br>
                <label >Student Name:</label>
                <input type="text" name="name" id="add"size="50px" autofucu="true" placeholder="Enter your name" required="true">
                <br><br>
                <label>Date Of Birth:</label>
                <input type="date" id="add" name="dob" size="100px" autofucu="true" placeholder="Enter your date of birth" required="true">
                <br><br>
                <label>Roll number:</label>
                <input type="text" id="add" name="roll" size="100px" autofucu="true" placeholder="Enter your rollnumber" required="true">
                <br><br>
                <label  id = "As">Gender:</label>
                <input type="radio"  id = "As" name="gen" value="female"><a>Female</a>
                <input type="radio" id = "As" name="gen" value="male"><a>Male</a>
                <br><br>
                <label>Email:</label>
                <input type="email" id="add" name="email" size="100px" autofucu="true" placeholder="Enter your email" required="true">
                <br><br>
               <label>Department:</label>
                <input type="text"  list="list2" name="dept" id="add" placeholder="select" >
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
                <input type="text"  list="list1" name="eid" id="add" placeholder="Select">
                <datalist id="list1">
                    <option value="E101" label="Coding Contest">
                    <option value="E102" label="AI Workshop">
                    <option value="E103" label="Robotic Workshop">
                    <option value="E104" label="Best out Of Waste">
                    <option value="E105" label="Treasure Hunt">
                    <option value="E106" label="TalentShow">
               </datalist>
               <br><br>
             <input type="submit" name="Register">
             <input type="reset" name="reset">
        </form>
    </body>
</html>