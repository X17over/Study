<?php
// 数据类型转换
// 1.自动类型转换
/* （1）布尔型数据和数值型数据在进行算术运算时，TRUE被转换为整数1，FALSE被转换为整数0。
（2）字符串型数据和数值型数据在进行算术运算时，如果字符串以数字开头，将被转换为相应的数字；如果字符串不是以数字开头，将被转换为整数0。
（3）在进行字符串连接运算时，整数、浮点数将被转换为字符串型数据，布尔值TRUE将被转换为字符串"1"，布尔值FALSE和NULL将被转换为空字符串""。
（4）在进行逻辑运算时，整数0、浮点数0.0、空字符串""、字符串"0"、NULL以及空数组将被转换为布尔值FALSE，其他数据将被转换为布尔值TRUE。 */
$a = 10;
$b = true;
$bo = false;
$c = $a + $b;
var_dump($c); //10
echo '<br>';

$x = '10';
$y = 20;
$z = $x + $y;
var_dump($z); //30
echo '<br>';

$str1 = $x . $y;
var_dump($str1); //1020
echo '<br>';
$str2 = $x . $b;
var_dump($str2); //101
echo '<br>';
$str3 = $x . $b;
var_dump($str3); //10
echo '<br>';

$result1 = 0 || "0";
$result2 = 0 || "";
$result3 = 0 || null;
var_dump($result1); //false
echo '<br>';
var_dump($result2); //false
echo '<br>';
var_dump($result3); //false
echo '<br>';

// 2.强制类型转换
// 方式一:使用转换的类型变量或表达式
$num1 = 123.5;
$num2 = 100;
// $num=(int)$num1+$num2;
$num = (int) ($num1 + $num2);
echo $num;
echo '<br>';

//方式2使用类型转换函数，intval()/floatval()/strval()
$sum = intval($num1) + $num2;
echo $sum;
echo "<br>";
//方式3使用settype(变量名，”类型")函数
settype($num1, "int");
//var_dump($num1);
echo gettype($num1); //获取变量的数据类型
echo '<br>';
$sum = $num1 + $num2;
echo $sum;
echo '<br>';

?>