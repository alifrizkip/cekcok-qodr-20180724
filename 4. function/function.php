<?php

// cara 1
function kelilingPersegi($sisi) {
  $keliling = $sisi * 4;
  return $keliling;
}

// cara 2
$kelilingPersegi2 = function($sisi) {
  $keliling = $sisi * 4;
  return $keliling;
};

// cara 3
// $kelilingPersegi3 = fn($sisi) => $sisi * 4;

echo $kelilingPersegi2(10);