<!DOCTYPE html>
     <html>
     <head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <table>
<?php
$restaurant =array
             (
               "Chama Gaucha" => '$40.50',
              "Aviva by Kamee"=>'$15.00',
              "Bone’s Restaurant"=>'$65.00',
              "Umi Sushi Buckhead"=> '$40.50',
              "Fandangles "=> '$30.00',
               "Capital Grille"=>'$60.50',
              "Canoe"=> '$35.50',
              "One Flew South"=>'$21.00',
              "Fox Bros. BBQ"=> '$15.00',
              "South City Kitchen Midtown"=>'$29.00'
            );
ksort($restaurant);            
asort($restaurant);
?>
<table>
    <tr>
      <th>Name of the restaurant</th>
      <th>Average Prices</th>
    </tr>
    <?php foreach ($restaurant as $x=>$y) : ?>
    <tr>
      <td><?php echo ($x); ?></td>
      <td><?php echo ($y); ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</body>
</html>
