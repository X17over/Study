<?php
// 作业1：自定义学员王浩3门课程成绩（java、C#、HTML）
// （1）输出Java课和C#课的分数之差
$java = 80;
$c = 90;
$html = 100;
$result = $java - $c;
echo "分数之差为:" . $result;
echo "<br>";
// （2）输出3门课的平均分
$result = ($java + $c + $html) / 3;
echo "3门课的平均分为:" . $result;                    
echo "<br>";
// 作业2：定义一个变量存储年份，使用条件运算符输出是不是闰年的结果
$year = 2022;
$result = ($year % 4 == 0 && $year / 100 != 0) || ($year % 4 == 0) ? "是闰年" : "不是闰年";
echo $year . $result;
echo "<br>";

// 作业3：定义一个变量和常量PI，实现一个数字加密器，加密规则是：加密结果=（变量*10+5)/2 + 常量PI，要求加密结果仍为一整数
$var = 79.9;
define("PI", 3.1415926);
$result = (int) (($var * 10 + 5) / 2 + PI);
echo $result;
?>