<?php

$string_one = 'Hello, World!';
echo $string_one;
echo "\n";

$name = 'clayton';
echo 'Hello, $name' . "\n";
echo "Hello, $name\n";

/* escape sequences */
echo "Hello, $name\n";
echo "Learning escape sequences by displaying name \"Hello, $name\"\n";

// string concatenation
echo 'Hello ' . 'World!' . "\n";

$firstName = 'Rasmus';
$lastName = 'Lerdorf';
$fullName = $firstName . ' ' . $lastName;
$fullName .= ' was the creator of PHP.';
echo "$fullName\n";
?>
