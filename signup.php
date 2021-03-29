<?php

 session_start();
   include("connection.php");
   include("function.php");
    
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
       $user_name=$_POST['user_name'];
       $phone=$_POST['phone'];
       $password=$_POST['password'];
       
       if(!empty($user_name)  && !empty($phone) && !empty($password) && !is_numeric($user_name))
       {
           $query ="insert into login(user_name,phone,password) values('$user_name','$phone','$password')";

           mysqli_query($con,$query);

           header("Location:login.php");
           die;
       }
       else echo"Enter valid info";
    
       
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body style="background: burlywood;">

    <style type="text/css">
        #box{
            margin: auto;
            width: 300px;
            background-color: lightgray;

        }
        .in{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 71%;
        }
        #button{
            margin: auto;
            width: 100px;
            padding: 10px;
            color: rgb(10, 14, 231);
            background-color: lightblue;
            border: solid thin black
            
        }
        
    </style>
    <div style="margin-left:550px ; color: black;">
        <h1>Signup<h1>
    </div>

    <div id="box">
        <form method="POST">
            <label for="user_name">USER_NAME</label><br>
            <input class="in" type="text" name="user_name" ><br><br>
            <label for="phone">PHONE</label><br>
            <input class="in" type="text" name="phone" ><br><br>
            <label for="password">PASSWORD</label><br>
            <input class="in" type="password" name="password" ><br><br>
            <input id="button" type="submit"value="Singup">
           
        </form>
        <a href="login.php">Clicl for login</a>
    </div>


    
</body>
</html>