<?php
  session_start();
  include("connection.php");
  include("function.php");
   
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $user_name=$_POST['user_name'];
     
      $password=$_POST['password'];
      
      if(!empty($user_name)  &&  !empty($password) && !is_numeric($user_name))
      {
          $query="select * from login where user_name='$user_name' limit 1";
          
          $result = mysqli_query($con,$query);

          if($result)
          {
              if($result && mysqli_num_rows($result)>0)
              {
                  $user_data= mysqli_fetch_assoc($result);

                  if($user_data['password'] === $password)
                  {
                      $_SESSION['user_name'] = $user_data['user_name'];
                      header("location: index.php");
                      die;
                  }
              }
          }
      }
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            margin-left: 10px;
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
        <h1>Login<h1>
    </div>

    <div id="box">
        
        <form method="POST">
            <label for="user_name">USER_NAME</label><br>
            <input class="in" type="text" name="user_name" ><br><br>
           
            <label for="password">PASSWORD</label><br>
            <input class="in" type="password" name="password" ><br><br>
            <input id="button" type="submit" value="Login">
        </form>
        <a href="signup.php">Clicl for signup</a>
    </div>


    
</body>
</html>