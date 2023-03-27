<?php
// 数组集合函数
// array_intersect(array array1,array array2[,array arrayX...]):用于比较两个(或更多个)数组的键值,并返回交集
// $arr1 = array(10, 20, 80, 75, 90);
// $arr2 = array(80, 75, 90, 20, 70);

$arr1 = array('a' => 80, 'c' => 75, 'b' => 90);
$arr2 = array('a' => 80, 'c' => 80, 'b' => 95);

$newArr = array_intersect($arr1, $arr2);
print_r($newArr); //Array ( [a] => 80 )
echo "<br>";
// array_intersect_key(array array1,array array2[,array arrayX...]):用于比较两个(或更多个)数组的键名,并返回交集
$newArr = array_intersect_key($arr1, $arr2);
print_r($newArr); //Array ( [a] => 80 [c] => 75 [b] => 90 )
echo "<br>";
// array_intersect_assoc(array array1,array array2[,array arrayX...]):用于比较两个(或更多个)数组的键名和键值,并返回交集
$newArr = array_intersect_assoc($arr1, $arr2);
print_r($newArr); //Array ( [a] => 80 )
echo "<br>";

// array_merge(array array1,array array2[,array arrayX...]):用于合并一个或多个数组
// 如果是数字索引,就单独合并    array_unique:去除数组中重复的值
$arr1 = array(10, 20, 30, 40, 50);
$arr2 = array(80, 70, 90, 20, 30);
$newArr = array_merge($arr1, $arr2);
print_r(array_unique($newArr));
echo "<br>";

// 对于关联数组,合并时如果键名相同则后面的键值覆盖前面的
$arr1 = array('a' => 80, 'c' => 75, 'b' => 90);
$arr2 = array('a' => 80, 'c' => 80, 'b' => 95);
$newArr = array_merge($arr1, $arr2);
print_r($newArr); //Array ( [a] => 80 [c] => 80 [b] => 95 )
echo "<br>";

// array_diff(array array1,array array2[,array arrayX...]):用于比较两个(或更多个)数组的键值,并返回差集
//(第一个数组减去两个相同部分后剩下的数组元素)
$arr1 = array(10, 20, 30, 40, 50);
$arr2 = array(10, 60, 70, 20, 90);
$newArr = array_diff($arr1, $arr2);
print_r($newArr); //Array ( [3] => 40 [4] => 50 )
echo "<br>";

// array_diff_key(array array1,array array2[,array arrayX...]:用于比较两个(或更多个)数组的键名,并返回差集
$arr1 = array('a' => 80, 'c' => 75, 'b' => 90);
$arr2 = array('a' => 70, 'c' => 70, 'd' => 85);
$newArr = array_diff_key($arr1, $arr2);
print_r($newArr); //Array ( [b] => 90 )
echo "<br>";

// array_diff_=(array array1,array array2[,array arrayX...]:用于比较两个(或更多个)数组的键名,并返回差集
$arr1 = array('a' => 80, 'c' => 75, 'b' => 90);
$arr2 = array('a' => 70, 'c' => 70, 'd' => 85);
$newArr = array_diff_key($arr1, $arr2);
print_r($newArr); //Array ( [b] => 90 )
echo "<br>";
?>