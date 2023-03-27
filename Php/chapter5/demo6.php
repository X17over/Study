<?php
//数组检索函数
//array_keys(array)/array_values(array)
//返回包含数组中所有键名/键值的一个新数组
$arr1 = array("name"=>"张三","gender"=>"男","age"=>20);
$arr2 = array_keys($arr1);
$arr3 = array_values($arr1);
//print_r($arr2);//Array ( [0] => name [1] => gender [2] => age ) 
//echo "<br>";
//print_r($arr3);//Array ( [0] => 张三 [1] => 男 [2] => 20 ) 

//in_array(mixed value, array arr [, bool strict])
/* 在数组中搜索特定的value值，如果在数组中找到该值，则此函数返回true，否则返回false，strict为true表示同时还要检查value值的数据类型。 */
//$flag = in_array("张三",$arr1);//bool(true)
//$flag = in_array("20",$arr1); //默认不比较类型，bool(true)
$flag = in_array("20",$arr1,true);//bool(false)
var_dump($flag);
echo "<br>";

//array_search(mixed needle, array haystack [, bool strict])
//函数在数组中搜索某个键值(value)，并返回对应的键名(key)，否则返回false。
$result = array_search("20",$arr1);
var_dump($result);//string(3) "age" 
echo "<br>";

//array_key_exists(mixed key, array search)
//检查某个数组中是否存在指定的键名，如果键名存在则返回 true，如果键名不存在则返回 false。
$flag = array_key_exists("name",$arr1);
var_dump($flag); //bool(true) 
echo "<br>";

//array_unique(array)
//用于移除数组中重复的值。如果两个或更多个数组值相同，只保留第一个值，其他的值被移除，返回过滤后的数组。
$arr = array(10,20,50,10,20,20);
$arr1 = array_unique($arr);
print_r($arr1);
?>