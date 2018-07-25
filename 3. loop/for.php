<?php

// for
for ($i=1; $i <= 10 ; $i++) { 
  echo $i;
  echo "\n";
}

// foreach
$santris = [
  'alip',
  'ilham',
  'hadi',
  'topan',
  'hadi'
];
foreach ($santris as $index => $santri) {
  echo "Santri ke {$index} ini bernama {$santri}";
  echo "\n";
}