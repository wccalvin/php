<?php
$a = 1;
if ($a > 1) {
    $a--;
    $a += 2;
} elseif ($a < 1) {
    $a++;
} else {
    $a += 5;
}
$a = $a + 2;
echo $a;
?>