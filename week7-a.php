<?php
$total = 0;
$booster1 = 50;
$booster2 = 300;
function rocketThrust()
{
global $total, $booster1, $booster2;
$total = $booster1 + $booster2;
} 
rocketThrust();
echo 'Rocket thrust is currently stable at '.$total.' newtons';
?>
