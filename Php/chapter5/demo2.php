<?php
//关联数组:索引为非数字形式的字符串，通过key(键)=>value(值)的方式进行关联
$arr = array("name"=>"张三","gender"=>"男","age"=>20);
//print_r()或var_dump()输出数组
print_r($arr);
echo "<br>";
//使用foreach循环遍历数组
//只获取数组的值/元素
foreach($arr as $value){
    echo $value.'<br>';
}
echo "<br>";
//同时获取数组的索引(键)和值/元素
foreach($arr as $key=>$value){
    echo $key ."=>". $value.'<br>';
}
?>