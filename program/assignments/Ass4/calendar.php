<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
        <link rel = "stylesheet" href = "styles/calendar.css">
    </head>
    <body>
        <h1>Assignment Part 2</h1>
        <form action = "calendar.php" method = "post">
        <div id = "today">
      <?php
      date_default_timezone_set('America/New_York');
       echo "Today is " . date("Y/m/d") . "<br>";
echo "The time is " . date("h:i:sa");
$hour = date('h'); ?>    </div>
        <br>
        <div id = "options">
        Hours Displayed:
        <select name = "number">
            <option value = "1">1</option>
            <option value = "2">2</option>
            <option value = "3">3</option>
            <option value = "4">4</option>
            <option value = "5">5</option>
            <option value = "6">6</option>
            <option value = "7">7</option>
            <option value = "8">8</option>
            <option value = "9">9</option>
            <option value = "10">10</option>
            <option value = "11">11</option>
            <option value = "12" selected = "selected">12</option>
        </select>
        <input type = "submit" name = "button">
        <input type = "reset">
        </div>
        <table>

          <?php for ($i = 1; $i <= $_POST['number']; $i++) : ?>
          <tr>
            <td><?php echo date("h A", strtotime("+$i hours")); ?></td>
          </tr>
        <?php endfor; ?>
    </table>
        </form>
    </body>
</html>
