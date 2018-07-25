<?php

// if
$angka = 1;
if ($angka === 1) {
  echo ('Ini angka 1');
  echo ("\n");
}

// if else
if ($angka === 1) {
  echo ('Ini angka 1');
  echo ("\n");
} else {
  echo ('Ini bukan angka 1');
  echo ("\n");
}

// else if
$moreThanFive = 6;
if ($moreThanFive < 5) {
  echo ('Angka kurang dari 5');
  echo ("\n");
} else if($moreThanFive > 5 && $moreThanFive < 10) {
  echo ('Angka lebih dari 5 dan kurang dari 10');
  echo ("\n");
} else {
  echo ('Angka lebih dari 5 dan 10');
  echo ("\n");
}

// ternary
$isTrue = true ? 'Ini benar' : 'Ini salah';

echo $isTrue;
echo ("\n");