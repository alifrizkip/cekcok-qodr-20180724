<?php

// switch
$number = 4;
switch ($number) {
  case 1:
    echo ('Ini 1');
    echo ("\n");
    break;

  case 2:
    echo ('Ini 2');
    echo ("\n");
    break;

  case 3:
  case 4:
  case 5:
    echo ('Ini antara 3 s/d 5');
    echo ("\n");
    break;
  default:
    echo ('Lebih dari 5');
    echo ("\n");
    break;
}