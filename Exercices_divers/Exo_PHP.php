<?php

$nb = 0;

for ($nb=0; $nb<50; $nb++) {
  if ($nb % 2 == 1) {
    echo "$nb est impair <br />";
  } else {
    // echo "$nb est pair <br />";
  }
}

echo "<br />";

$nb = 0;

for ($nb=0; $nb<50; $nb++) {
  if ($nb % 2 == 1) {
    echo "$nb est impair <br />";
  } else {
    echo "$nb est pair <br />";
  }
}

echo "<br />";

$nb = 0;

for ($nb=0; $nb < 100 ; $nb++) {
  echo "$nb Je dois pratiquer le code, chaque jour, pour m'améliorer.<br />";
}

$nb = 1; while ($nb < 100) {echo "je dois pratiquer le code chaque jour"; $nb++;}


$a = 3; if ($a % 2 === 0) {echo $a, ' est pair';} else {echo $a, ' est impair';};



$a = 1; $b=10; if ($a % 2 === 0) {echo $a, ' est pair';} else {echo $a, ' est impair';};
