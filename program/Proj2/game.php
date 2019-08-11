<!DOCTYPE html>
<html lang="en">
    <?php
        if (isset($_POST["chosen"])){
            $unset_from_array = $_POST["chosen"] - 1;
        }
        $selected_chest = $_POST["selected-chest"] - 1;
        session_start();
        $_SESSION["total_won"] = $_SESSION["total_won"] + $_SESSION["original_chests"][$remove_from_array];
        $_SESSION["current_chests"][$unset_from_array] = -1;
        $_SESSION["current_chests"][$selected_chest] = -2;
        $_SESSION["n_selected"] = $_SESSION["n_selected"] + 1;
        $_SESSION["deal_time"] = array(5,10,15,18,21,24);
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Deal Or No Deal</title>
    </head>
    <body>
        <?php
            if($_SESSION["n_selected"] < 25){
                $until_deal = $_SESSION["deal_time"][$_SESSION["next_offer_index"]] - $_SESSION["n_selected"];
                echo "<div class='navbar'>Number of chests selected: ".$_SESSION["n_selected"]."/25       |       ";
                echo "Next offer in: ".$until_deal;
                echo "<div class='top-logo'></div>";
                if($until_deal == 0){
                    $_SESSION["next_offer_index"]++;
                    $offer_amount = 0;
                    $num_closed = 0;
                    foreach($_SESSION["current_chests"] as $value){
                        if($value > 0){
                            $offer_amount = $offer_amount + $value;
                            $num_closed++;
                        }
                    }
                    $offer_amount = number_format($offer_amount / $num_closed, 2, '.', ',');
                    echo "<div class='deal-container'>";
                    echo "<h1 class='deal'>The banker has offered you: $".$offer_amount.". Accept or open another case.</h1>";
                    echo "<form action='congrats.php' method='post' >";
                    echo "<input type='hidden' name='accepted_amount' value='".$offer_amount."'>";
                    echo "<input type='submit' name='accepted' value='ACCEPT' id='accept-btn'></form>";
                    echo "</div>";
                }
                echo "<div class='case-container'>";
                echo "<form action='game.php' method='post'>";
                for($i = 0; $i < sizeof($_SESSION["original_chests"]); $i++){
                    $num = $i + 1;
                    if($_SESSION["current_chests"][$i] > 0){
                        echo "<span class='chest'><input type='submit' name='chosen' value='".$num."' class='closed-chest'></input></span>";
                    }
                    elseif($_SESSION["current_chests"][$i] == -1){
                        echo "<input disabled type='submit' class='open-chest' value='$".number_format($_SESSION["original_chests"][$i], 0, '.', ',')."'></input>";
                    }
                    else{
                        echo "<input disabled type='submit' class='selected-chest' value='".$num."'></input>";
                    }
                }
                echo "</form>";
                echo "</div>";
            }
            else{
                for($i = 0;$i < sizeof($_SESSION["original_chests"]); $i++){
                    if($_SESSION["current_chests"][$i] == -2){
                        $_SESSION["won_selected"] = $_SESSION["original_chests"][$i];
                    }
                }
                header("Location: congrats.php");
            }

        ?>
</html>
