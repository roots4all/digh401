<?php
$total = 0;
$booster1 = 50;
$booster2 = 100;
$booster3 = 150
function rocketThrust()
{
global $total, $booster1, $booster2, $booster3;
$total = $booster1 + $booster2 + $booster3;
} 
rocketThrust();
echo 'Rocket thrust is currently stable at '.$total.' newtons';
?>
