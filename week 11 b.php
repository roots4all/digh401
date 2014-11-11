<?php
$chores = array("Do dishes","Do laundry","Clean front table","Work on client project");
sort($chores);
echo $chores[0].'<br />';
$chores[3] = 'Clean front table';
array_push($chores, 'Clean front table');
echo $chores[1].'<br />';
$chores[2] = 'Work on client project';
array_push($chores, 'Work on client project');
echo $chores[2].'<br />';
echo array_shift($chores).'<br />';
echo $chores[0].'<br />';
array_pop($chores);
?>