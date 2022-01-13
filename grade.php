<?php
$sponsor = 0;
$player = 0;
$active = 0;
$star = 0;
$friend = 0;
$banker = 0;
$shoper = 0;
$boss = 0;

foreach($_POST as $key=>$value)
{
  if ($key <= 4) { $sponsor=$sponsor+$value; }
  if (4 < $key &&  $key <= 8) { $player=$player+$value; }
  if (8 < $key &&  $key <= 12) { $active=$active+$value; }
  if (12 < $key &&  $key <= 16) { $star=$star+$value; }
  if (16 < $key &&  $key <= 20) { $friend=$friend+$value; }
  if (20 < $key &&  $key <= 24) { $banker=$banker+$value; }
  if (24 < $key &&  $key <= 28) { $shoper=$shoper+$value; }
  if (28 < $key &&  $key <= 32) { $boss=$boss+$value; }
  if (32 < $key && $key <= 36) { $sponsor=$sponsor+$value; }
  if (36 < $key &&  $key <= 40) { $player=$player+$value; }
  if (40 < $key &&  $key <= 44) { $active=$active+$value; }
  if (44 < $key &&  $key <= 48) { $star=$star+$value; }
  if (48 < $key &&  $key <= 52) { $friend=$friend+$value; }
  if (52 < $key &&  $key <= 56) { $banker=$banker+$value; }
  if (56 < $key &&  $key <= 60) { $shoper=$shoper+$value; }
  if (60 < $key &&  $key <= 64) { $boss=$boss+$value; }
}  
 
$rus = array(   
   "sponsor"=>"спонсор",
   "player"=>"игрок",
   "active"=>"активист",
   "star"=>"звезда",
   "friend"=>"дружище",
   "banker"=>"банкир",
   "shoper"=>"шопоголик",
   "boss"=>"шеф"
);    
$arhs = array(

"sponsor"=> $sponsor,
"player"=> $player,
"active"=> $active,
"star"=> $star,
"friend"=>  $friend,
"banker"=> $banker,
"shoper"=> $shoper,
"boss"=> $boss
);
arsort($arhs);
foreach ($arhs as $key => $val) {
    $size  = ($val/5)."vmax";
    echo "<span style=\"font-size:$size\">";
    echo "<a href=\"$rus[$key].doc\">";
    echo "$rus[$key]</a> = $val\n<br>";
    echo "</span>";
}

?>


