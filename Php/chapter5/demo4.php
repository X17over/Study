<?php
//数组操作相关函数
//1.创建数组的函数
//range(int low,int high,[int step])
//range函数创建一个包含指定范围的元素的数组,low表示填充数组的最小值，high表示填充数组的最大值，step表示步长(递增的值)
//$arr1 = range(1,10);//默认按1递增
//$arr1 = range(1,10,2);
//print_r($arr1);

//array_combine(array keys, array values)
//通过合并两个数组来创建一个新数组，其中的一个数组元素为键名，另一个数组元素为键值
/* $arr1 = array("name","gender","age");
$arr2 = array("张三","男",20);
$newArr = array_combine($arr1,$arr2);
print_r($newArr); */

//array_fill(int start_index,int num, mixed value):用给定的键值填充数组
/* $arr = array_fill(0,5,"a");
print_r($arr); */

//array_pad(array input, int pad_size, mixed pad_value):函数将指定数量的带有指定值的元素插入到数组中，其中pad_size为添加完元素后的新长度
/* $arr1 = array(10,20,30);
$arr2 = array_pad($arr1,5,"a");
print_r($arr2); */

//explode(string separator,string str,[int limit])：将字符串按指定分隔符分割为数组
//separator：必需，在哪里分割字符串(制定分割字符串) ，string：必需。要分割的字符串。limit可选。规定所返回的数组元素的数目。
$str = "zhangsan-lisi-wangwu";
$arr = explode('-',$str);
print_r($arr);
?>