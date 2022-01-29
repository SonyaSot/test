<?php
$points = 0;
foreach($_POST as $key=>$value)
{
$points = $points + $value;
}
echo $points;
?>


