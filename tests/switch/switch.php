<?php
switch (2) {
  case 1:
    $test = 'first';
    break;
  case 2:
    $test = 'second';
    break;
  default:
    $test = 1;
}

switch ($var):
  case 1:
  case 2:
    echo "Goodbye!";
    break;
  default:
    echo "I only understand 1 and 2.";
endswitch;
