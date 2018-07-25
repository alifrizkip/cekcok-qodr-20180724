<?php

function flipText( string $text) {
  $flippedText = join(array_reverse(str_split($text)));

  return $flippedText;
}
print_r(flipText('Alif Rizki Pambudi'));