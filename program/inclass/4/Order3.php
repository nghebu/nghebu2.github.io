<html>
   <head>
      <title>Order Confirmation</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">



<p></p>
         <h2>Order Confirmation</h2>

            <h3> Congratulations <?php $_POST['fname'] ?> you
            have ordered a red Subaru!</h3>
<?php         echo          '<img style="margin:30px 0'; src=''images/'' . $_POST['model'] . '' . $_POST['name']. ">' ?>
            <br>
            <a href="Order01.php">Place another order</a>

      </div>
   </body>
</html>
