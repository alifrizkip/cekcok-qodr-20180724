<?php

// konstanta
const phi = 3.14;

// variable biasa
$name = 'alip';
$name = 'rizki';

// ##########
// Tipe - tipe data
// ##########

// integer
$number = 12345;

// string
$text = 'Hello World!';

// boolean
$isTrue = true;

// array
$drinks = ['tea', 'coffee', 'water', 'milk'];

// assosiative array
$person = [
  'name' => 'alip',
  'address' => 'klaten',
  'age' => 17,
  'isSingle' => true
];

// Sambung string dengan variable
$village = 'Mangunan';
$subdistrict = 'Dlingo';

$story = 'QODR berada di desa '.$village.' kecamatan '.$subdistrict;

$story1 = "QODR berada di desa {$village} kecamatan {$subdistrict}";