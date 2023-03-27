<?php
$a = 10;
$b = 3;
$flag1 = (($a < $b) || ($a + $b > 2 * $b)); // false || true  --> true
var_dump($flag1); // true
echo '<br>';
$flag2 = (($a < $b) or ($a + $b > 2 * $b)); // false || true  --> true
var_dump($flag2); // flase
?>