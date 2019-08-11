<?php
    session_start();
    require_once('handleLogin.php');
    
   
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
         $login = new login();
          $mask = " \t";
            $userName = trim(strtolower(filter_var($_POST["username"], FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)),$mask);
            $password  = trim(strtolower(filter_var($_POST["password"], FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)),$mask);        
         
         if ($login->validateUser($userName,$password))
         {
             header("location:play.php");
         }
         
    } 
?>



<!DOCTYPE html>
<html>
<head>
<meta   content="text/html; charset=utf-8">

<title>Deal - No Deal</title>

<link rel="stylesheet" type="text/css" href="dnd.css" />
</head>
<body>

<form id="login" method="post" action="login.php">
<div class="entry">
<label for="username"  id="label">User Name:</label>
 <input type="text" id="username" name="username"><br>
 
<label for="password" id="label" >Password:</label>
<input type="password" id="password" name="password" ><br>


<button type="submit" class="btn" id="bmov">Login</button>


</div> 

</form>
   
 
</body>
</html>
