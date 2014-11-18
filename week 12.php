<?php
$chores = array("Do dishes","Do laundry","Clean front table","Work on client project","Invoice client","Cut out Christmas fabric","Do homework",);
sort($chores);
$chores[3] = 'Clean front table';
array_push($chores, 'Clean front table');
echo $chores[3].'<br />';
$chores[2] = 'Work on client project';
array_push($chores, 'Work on client project');
echo $chores[5].'<br />';
$chores[7] = 'Do homework';
array_push($chores, 'Do homework');
echo $chores[7]. '<br />';
print_r($chores);
echo '<br />';
$chores= array
(
  "Do final exams",
  "Finish English class flier",
  "Finish Christmas program",
  "Check doctor's appointment"
);
$i = 0;
$newChores = array();
foreach ($chores as $key => $value) {
$newChores[$i] = $value;
$i++;
}
print_r($newChores);
?>