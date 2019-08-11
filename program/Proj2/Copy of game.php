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
                if($until_deal == 0){
                    $_SESSION["next_offer_index"]++;
                    //generate offer. May have to move elsewhere?
                }
                echo "<div class='navbar'>Number of chests selected: ".$_SESSION["n_selected"]."/25       |       ";
                echo "Next offer in: ".$until_deal;
                echo "<div class='top-logo'></div>";
                echo "<div class='case-container'>";
                echo "<form action='game.php' method='post'>";
                for($i = 0; $i < sizeof($_SESSION["original_chests"]); $i++){
                    $num = $i + 1;
                    if($_SESSION["current_chests"][$i] > 0){                   
                        echo "<input type='submit' name='chosen' value='".$num."' class='closed-chest'></input>";
                    }
                    elseif($_SESSION["current_chests"][$i] == -1){
                        echo "<input disabled type='submit' class='open-chest' value='$".$_SESSION["original_chests"][$i]."'></input>";
                    }  
                    else{
                        echo "<input disabled type='submit' class='selected-chest' value='".$num."'></input>";
                    }              
                }
                echo "</form>";
                echo "</div>";
            }
            else{
                header("Location: congrats.php");
            }
            
        ?>
</html>