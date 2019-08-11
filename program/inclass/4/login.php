<html>
   <head>
      <title>Login</title>
      <link href="/sandvig/mis314/assignments/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
     <?php
 $user = $_POST['user'];
 $pass = $_POST['pass'];

 if($pass == "guest")
 {
         include("protected.php");
 }
 else
 {
     if(isset($_POST))
     {?>

             <form method="POST" action="secure.php">
             User <input type="text" name="user"></input><br/>
             Pass <input type="password" name="pass"></input><br/>
             <input type="submit" name="submit" value="Go"></input>
             </form>
     <?}
 }
 ?>
   </body>
</html>
