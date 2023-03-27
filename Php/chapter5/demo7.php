<?php
//数组排序函数
//sort(array)/rsort(array)
//对数值或字母组成的数字索引数组进行升序/降序排序
$arr1 = array(10, 20, 50, 30, 60, 40);
// sort($arr1);
// print_r($arr1);
/* rsort($arr1);
print_r($arr1);
echo "<br>"; */

//asort(array)/arsort(array)
//对数值或字母组成的关联数组进行升序/降序排序
$arr2 = array('java_score' => 80, 'html_score' => 75, 'php_score' => 90);
//asort($arr2);
//print_r($arr2);
//echo "<br>";
arsort($arr2);
print_r($arr2);
echo "<br>";

//ksort(array)/krsort(array)
//对关联数组键名进行升序/降序排序
$arr3 = array('a' => 80, 'c' => 75, 'b' => 90);
/* ksort($arr3);
print_r($arr3); //Array ( [a] => 80 [b] => 90 [c] => 75 ) 
echo "<br>"; */
/* krsort($arr3);
print_r($arr3); //Array ( [c] => 75 [b] => 90 [a] => 80 ) 
echo "<br>"; */

//array_reverse(array):返回翻转顺序的数组
//$arr = array_reverse($arr1);
$arr = array_reverse($arr3);
print_r($arr);
echo "<br>";

//shuffle(array):把数组中的元素按随机顺序重新排列。
shuffle($arr1);
print_r($arr1);
echo "<br>";
?>