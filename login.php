<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body  style="background-image: url('bg.jpg');background-repeat: no-repeat; background-size: cover;">
<table border="3" bgcolor="#FFFF99" align="center">
    <caption><h2>Enter your name and password</h2></caption>
    <form action="view.php" method="post">
        <tr>
        <td>Name:</td>
        <td>
            <input type="text" name="name" size="50" pattern="[A-Za-z]{10}"/>
            </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password" size="50" pattern="?=.*[A-Z](?=.*[a-z].(12)"/>
</td>
</tr>
<tr>
    <td>Login:</td>
    <td><input type="submit" name="login" value="login" align="middle"/>
</td>
</tr>
</table>
    
</body>
</html>