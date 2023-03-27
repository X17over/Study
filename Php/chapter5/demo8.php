<?php
//数组与数据结构
//array_push(array array, mixed var [, mixed ...]):向数组尾部插入一个或多个元素，返回数组的新长度。
/* $arr1 = array(80,75,90);
//$len = array_push($arr1,60,70);
$arr2 = array('a'=>80,'c'=>75,'b'=>90);
$len = array_push($arr1,60,70,$arr2);
echo $len."<br>";
print_r($arr1);  */


//array_unshift(array array, mixed var [, mixed ...])
//向数组首部插入一个或多个元素，返回数组的新长度。
$arr1 = array(80, 75, 90);
//$len = array_unshift($arr1,60,70);
$arr2 = array('a' => 80, 'c' => 75, 'b' => 90);
/* $len = array_unshift($arr1, 60, 70, $arr2);
echo $len . "<br>";
print_r($arr1); */

// array_pop(array):删除数组中的最后一个元素，并返回被删除的元素
/* $arr_del = array_pop($arr1);
var_dump($arr_del);
print_r($arr1);
echo "<br>";
print_r($arr2); */;

// array_shift(array):删除数组中的第一个元素,并返回被删除的元素
$arr_del = array_shift($arr1);
var_dump($arr_del);
print_r($arr1);
echo "<br>";
print_r($arr2);




?>