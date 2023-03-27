<?php
//日期时间函数：date(string format[,int timestamp])
//Y/y:4位/2位年份 m:月份  d:日期
//H/h:24/12小时制的小时数  i:分钟 s：秒  a/A：am/pm AM/PM
//设置时区
//date_default_timezone_set("Asia/Shanghai");
date_default_timezone_set("PRC");//PRC:中国
$dt = date("Y年m月d日 H:i:s A");
echo $dt;
echo "<br>";

//getdate():获取日期时间相关信息组成的数组
$dtArr = getdate();
print_r($dtArr);
echo "<br>";

//time():获取当前时间戳(格林威治时间1970年1月1日00:00:00）到当前时间的秒数)，一般用于生成一个不会重复的数字
$time = time();
echo $time;
echo "<br>";

$dt_info = date("Y-m-d H:i:s A",1670325803);
echo $dt_info;
?>