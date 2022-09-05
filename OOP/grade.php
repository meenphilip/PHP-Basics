<?php
$marks = array(90, 80, 70, 60, 50);
$grade;
function giveGrade($marks)
{
  if ($marks == 90) {
    echo  "A";
  } elseif ($marks == 80) {
    echo  "B";
  } elseif ($marks == 70) {
    echo  "C";
  } elseif ($marks == 60) {
    echo  "D";
  } elseif ($marks == 50) {
    echo  "E";
  } else {
    echo "FAILEd";
  }
}
giveGrade(70);
