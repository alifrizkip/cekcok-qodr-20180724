<?php

$start = microtime(true);

function getProvince() {
  sleep(2);
  global $start;

  $diff = floor((microtime(true) - $start) * 1000);

  echo "Get province data successfully. After {$diff} ms";
  echo "\n";
}

function getSubdistrict() {
  sleep(3);
  global $start;

  $diff = floor((microtime(true) - $start) * 1000);

  echo "Get subdistrict data successfully. After {$diff} ms";
  echo "\n";
}

// =====================================

$getIndonesiaLocationData = function() {
  getProvince();
  getSubdistrict();
};

$getIndonesiaLocationData();