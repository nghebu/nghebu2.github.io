<!DOCTYPE html>
<html lang="en">
    <?php
         session_start();
         $_SESSION['total_won'] = 0;
         $closed_chests = array(.01, 1, 5, 10, 25, 50, 75, 100, 200, 300, 400, 500, 750, 1000, 5000, 10000, 25000, 50000, 75000, 100000, 200000, 300000, 400000, 500000, 750000, 1000000);
         shuffle($closed_chests);
         $_SESSION["current_chests"] = $closed_chests;
         $_SESSION["original_chests"] = $closed_chests;
         $_SESSION["n_selected"] = -1;
         $_SESSION["next_offer_index"] = 0;
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Deal Or No Deal</title>
    </head>
    <body>
        <?php
            echo "<div class='top-logo'></div>";
            echo "<h1 class='select-chest-header'>Please select your chest</h1>";
            echo "<div class='case-container'>";
            echo "<form action='game.php' method='post'>";
            for($i = 0; $i < sizeof($closed_chests); $i++){
                $num = $i + 1;
                echo "<span class='chest'><input type='submit' name='selected-chest' value='".$num." ' class='closed-chest'></span>"";
            }
            echo "</form>";
            echo "</div>";
        ?>
    </body>
</html>
