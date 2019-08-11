<?php  
function random($array)
{  
    
     shuffle($array);
     return $array;  
}

for ($i = 0; $i < 20; $i++)
{
  $numeric[$i] = $i;   
}

 $shuffled = random($numeric);

for ($i = 0; $i < 20; $i++)
{
  echo $shuffled[$i]." ";    

} 

echo "<br/>";
 
 
 
 $shuffled = random($shuffled);
 for ($i = 0; $i < 20; $i++)
{
  echo $shuffled[$i]." ";    

} 

 echo "<br/>";
 $shuffled = random($shuffled);
for ($i = 0; $i < 20; $i++)
{
  echo $shuffled[$i]." ";    

} 
 
 echo "<br/>";
 $shuffled = random($shuffled);

for ($i = 0; $i < 20; $i++)
{
  echo $shuffled[$i]." ";    

}

 echo "<br/>";
?>
