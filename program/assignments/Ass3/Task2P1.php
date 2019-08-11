<?php
//part 1
function isBitten()
{
  $prob = rand(0,1);
 return $prob;
}

$chance = isBitten();
if ($chance == 0)
  echo "Charlie ate my lunch <br>";
else echo "Charlie did not eat my lunch <br>";
?>
