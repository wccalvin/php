<?php

// Example for integers
$num_one = 1;
$num_two = 2;
$num_three = 3;

var_dump( $num_one );
var_dump( 1 );
var_dump( "1" );

var_dump( $num_one + $num_two );
var_dump( $num_one + $num_two - $num_three );

// Example for floats
$distance_home = 1.2;
$distance_work = 2.5;

var_dump($distance_home + $distance_work);
// float + int = float
var_dump($distance_home + $distance_work + $num_three);
var_dump($distance_home + $distance_work + $num_three + 0.3);

// arithmetic operators
$a = 5;
$b = 10;

var_dump($a * $b);
var_dump($a / $b);

echo "----- Value of a=$a -----\n";
var_dump($a++);  // will display $a before incrementing
$a++;  //incrementing operator
var_dump(--$a);  // decrement before displaying
var_dump($a);
$a--;  //decrementing operator
var_dump($a);

$a += 5;
var_dump($a);


?>