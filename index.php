<?php

 session_start();
 include("function.php");
 include("connection.php");
 

 $user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>websire</title>
</head>
<body style="background-color: burlywood;">
    <h1>WElcome to our page</h1>
    Hello,<?php echo $user_data['user_name'];?><br>

    <a href="logout.php">logout</a>
    
</body>
</html>