<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Deal Or No Deal</title>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_POST["accepted_amount"])){
                echo "<div class='navbar'>You accepted the offer! You win $".$_POST['accepted_amount']."!</div>";
            }
            else if(isset($_SESSION["won_selected"])){
                echo "<div class='navbar'>You held onto your original case! You win $".number_format($_SESSION['won_selected'], 2, '.', ',')."!</div>";
            }
            else{
                echo "<div class='navbar'>How the hell did you get here?</div>";
            }
        ?>
    </body>

</html>