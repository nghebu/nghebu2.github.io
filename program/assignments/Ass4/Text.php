<!DOCTYPE html>
<html >

<head>
    <title>Text Form</title>
    <style type = "text/css">
    body{font-family: arial;}
    </style>
</head>
<body>
  <?php


  echo '<span style="font-family: ' . $_POST['font'] . '; color: ' . $_POST['color'] . '; font-size:' . $_POST['size'] . ';">' . $_POST['words'] . '; </span>';
?>
</body>
</html>
