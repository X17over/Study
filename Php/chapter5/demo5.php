<?php
//数组统计函数
//count(array):返回数组的长度
/* $arr = array(10,20,50,30,40);
$len = count($arr);
echo $len; */

//max(array)或max(value1,value2...)：求数组或几个值中的最大值
/* $arr = array(10,20,50,30,40);
$max = max($arr);
$max2 = max(10,20,50,30,40);
echo $max."<br>";
echo $max2; */

//min(array)min(value1,value2...)：求数组或几个值中的最小值
/* $arr = array(10,20,50,30,40);
$min = min($arr);
$min2 = min(10,20,50,30,40);
echo $min."<br>";
echo $min2; */

//array_sum(array):返回数组中所有值的和。
/* $arr = array(10,20,50,30,40);
$sum = array_sum($arr);
echo $sum; */

//array_count_values (array input)
/* 
用于统计数组中所有值出现的次数，返回一个关联数组，其元素的键名是原数组的值，键值是该值在原数组中出现的次数。
 */
/* $arr = array(10,20,50,10,20,20);
$arr1 = array_count_values($arr);
print_r($arr1); */

//数组和变量之间的转换
//extract(array)
/* 
该函数使用数组键名作为变量名，使用数组键值作为变量值。针对数组中的每个元素，将在当前符号表中创建对应的一个变量。该函数返回成功设置的变量数目。
*/
/* $arr = array("name"=>"张三","gender"=>"男","age"=>20);
extract($arr);
echo $name.','.$gender.','.$age; */

//compact(var1,var2...)
//与extract()相反，创建一个包含变量或数组名和它们的值组成的新数组。
$name = "张三";
$gender = "男";
$age = 20;
$arr1 = array("name"=>"张三","gender"=>"男","age"=>20);
$arr = compact("name","gender","age","arr1");
print_r($arr);
?>