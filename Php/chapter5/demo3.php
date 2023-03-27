<?php
//二维数组：内部元素是一维数组的集合
//声明数字索引的二维数组
$arr1[0] = array("HTML", "CSS", "JavaScript", "jQuery");
$arr1[1] = array("Java", "JSP", "Spring", "Spring MVC");
$arr1[2] = array("C#", "Winform", "ASP", "ASP.NET");

$arr2 = array(array("HTML", "CSS", "JavaScript", "jQuery"),array("Java", "JSP", "Spring", "Spring MVC"),array("C#", "Winform", "ASP", "ASP.NET"));

//声明二维的关联数组
$arr3 = array("web前端课程："=>array("网页设计"=>"HTML", "CSS", "JavaScript", "jQuery"),"java课程："=>array("Java", "JSP", "Spring", "Spring MVC"),".NET课程："=>array("C#", "Winform", "ASP", "ASP.NET"));

//print_r()或var_dump()输出数组
print_r($arr3);
echo "<br>";
//使用foreach循环遍历数组
//只获取数组的值/元素
foreach ($arr3 as $k => $val) { //$arr1是二维数组，$val是内部的一维数组
    //遍历内部一维数组的键和值
    echo $k . "<br>";
    foreach ($val as $key => $value) {
        echo "$key => $value<br>";
    }
    echo "<br>";
}
?>