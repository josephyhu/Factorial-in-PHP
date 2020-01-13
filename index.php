<?php
$stdin = fopen('php://stdin', 'r');
$n = -1;

while ($n < 0 || !is_int($n)) {
  echo 'Enter a nonnegative integer ';
  $n = intval(trim(fgets($stdin)));
}

function factorial($n) {
  if ($n === 0) {
    return 1;
  } else {
    return $n * factorial($n - 1);
  }
}

echo factorial($n) . "\n";