<?php

// boolean
$isReady = true;
var_dump($isReady);
$isReady = false;
var_dump($isReady);

// type juggling
var_dump(1 + "1");
$a = 2;
$b = '2';
var_dump($a == $b);
var_dump($a === $b);  // check for type too

$a = 5;
$isBoolean = true;
$isIdentical = ($a === '5');
var_dump($isIdentical);

// conditionals
// $b = '5';
// $a = '';
$a = 1;
if ($a == $b) {
    echo "The values match\n";
} elseif ($a == '') {
    echo '$a is an empty string' . "\n";
} else {
    echo "The values do not match";
}

?>