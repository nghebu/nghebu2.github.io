<!DOCTYPE html>
<html>
   <head>
      <title>Validation Confirm</title>
      <link href="style.css" rel="stylesheet" type="text/css">

   </head>
   <body>
      <div class="pageContainer centerText">
         <?php
         include 'validationUtilities.php';

         //Retrieve inputs (using helper function)
         $email = $_GET['email'];
         $fname = $_GET['fname'];
         $phone = $_GET['phone'];
         $state = $_GET['state'];

         //set validation flag
         $IsValid = true;

         echo "<p class='centeredNotice'>";
         //email
         if (!fIsValidEmail($email)) {
            echo "Invalid email<br>";
            $IsValid = false;
         }

         if (!fIsValidLength($fname, 2, 20)) {
            echo "Enter first name (2-20 characters)<br>";
            $IsValid = false;
         }

         if (!fIsValidPhone($phone)) {
            echo "Enter 10 digit phone number<br>";
            $IsValid = false;
         }
         function fIsValidDate($date) {
         //date must be in format yyyy-mm-dd or yyyy/mm/dd (RFC 3339 format)
            $date = str_replace('-', '/', $date);
            $test_arr = explode('/', $date);
            if (count($test_arr) == 3 &&
                    is_numeric($test_arr[0]) &&
                    is_numeric($test_arr[1]) &&
                    is_numeric($test_arr[2])) {
               //checkdate($month, $day, $year)
               if (checkdate($test_arr[1], $test_arr[2], $test_arr[0])) {
                  return true;
               } else {
                  return false; //invalid date
               }
            } else {
               return false; //invalid format
          }     
         if (!fIsValidStateAbbr($state)) {
            echo "Enter 2-character state abbreviation<br>";
            $IsValid = false;
         }

         echo "</p>";
         if (!$IsValid) {
            //at least one element not valid. Echo a message and stop execution
            echo "<img class='validImage' src='/sandvig/mis314/images/red_x.jpg' /><br><br>
            <p><input type='button' class='button' value='<< Go Back <<' onClick='history.back()'><br></p>";
            //stop execution.
            exit();
         }
         //all inputs are valid.
            echo "<div class='center'>
            <img class='validImage' src='/sandvig/mis314/images/valid.png' />
            <h3>All inputs have valid formats!</h3>
            Email: $email <br>
            First name: $fname <br>
            Phone: $phone <br>
            State: $state <br>
            ";
         ?>
      </div>
   </body>
</html>
