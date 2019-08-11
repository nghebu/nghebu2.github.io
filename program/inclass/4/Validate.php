<html><link type="text/css" id="dark-mode" rel="stylesheet" href=""><style type="text/css" id="dark-mode-custom-style"></style><head>
      <title>Validate User Inputs</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">
         <h2>Form Validation</h2>
         <p>HTML5 and server-side validation</p>

         <form method="post" action="ValidateConfirm.php" autocomplete="on" class="formLayout">
            <div class="formGroup">
               <label>Email:</label>
               <input name="email" class="textbox" required="" placeholder="Email" maxlength="50" autofocus="" type="email">
            </div>
            <div class="formGroup">
               <label>First name:</label>
               <input name="fname" class="textbox" autofocus="" required="" placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" type="text">
            </div>
            <div class="formGroup">
               <label>Birthday:</label>
               <input name="birthday" class="textbox" required="" placeholder="yyyy/mm/dd" title="birthday yyyy/mm/dd" type="date">
            </div>
            <div class="formGroup">
               <label>Age:</label>
               <!-- using pattern since type="number" poorly supported -->
               <input name="age" class="textbox" style="width:100px;" required="" placeholder="age" title="age (1-99)" pattern="[1-9][0-9]?" type="text">
            </div>
            <div class="formGroup">
               <label>State:</label>
               <input name="state" class="textbox" style="width:100px" required="" placeholder="ST" title="2-character state abbreviation" maxlength="2" pattern="[A-Za-z]{2}" type="text">
            </div>
            <div class="formGroup">
               <label>Zip: </label>
               <input name="zip" class="textbox" style="width:100px;" required="" placeholder="Zip" title="5-digit zip" maxlength="5" pattern="[0-9]{5}" type="text">
            </div>
            <div class="formGroup">
               <label></label>
               <button type="submit">Submit form</button>
            </div>
            <div class="formGroup vertGap55">
               <label></label>
               <button type="submit" formnovalidate="">Submit without HTML5 validation</button>
            </div>

         </form>
         <div><a href="?">Reload page</a></div>
      </div>



</body></html>
