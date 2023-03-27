<?php
//数组
//数字索引数组
//1.数组的声明和赋值
//方式1：$数组名[数字索引] = 值;
$arr1[0] = "张三";
$arr1[1] = "李四";
$arr1[2] = "王五";
print_r($arr1);
//var_dump($arr1);
echo "<br>";

//方式2：array(值1,值2,...)
$arr2 = array("张三","李四","王五");
print_r($arr2);
echo "<br>";

//遍历数组
//使用for循环遍历
//获取数组长度：sizeof(数组)或count(数组)
for ($i=0; $i < count($arr1); $i++) { 
    echo $arr1[$i].'<br>';
}
echo "<br>";
//使用foreach循环遍历数组
//只获取数组的值/元素
foreach($arr2 as $value){
    echo $value.'<br>';
}
//同时获取数组的索引和值/元素
foreach($arr2 as $key=>$value){
    echo $key ."=>". $value.'<br>';
}
?>