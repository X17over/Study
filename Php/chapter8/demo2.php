<?php
//字符串操作函数
//1.添加/还原转义字符
$str1 = "他说：'我在机电学PHP'";
$str2 = "他说：\"我在机电学PHP\"";
$addr = 'C:\Users\Administrator\Desktop\PHP基础';
echo $str1;
echo "<br>";
echo $str2;
echo "<br>";
//在单引号，双引号，反斜杠(\)前添加转义字符(\)
$str3 = addslashes($str1);
$addr2 = addslashes($addr);
echo $str3;
echo "<br>";
echo $addr2;
echo "<br>";
//去除转义字符(\)
$str4 = stripcslashes($addr2);
echo $str4;
echo "<br>";

//获取字符串长度：strlen()
//$name = "zhangsan,lisi 123"; //17
// $len = strlen($name);
// echo $len;

$name = "张三，李四";
$len = mb_strlen($name); //获取中文字符串长度
echo $len; //5
echo "<br>";

//截取字符串(处理英文字符串)：substr(string str, int start [, int length])
$str = "Visual Studio Code";
$str1 = substr($str, 0, 13);
echo $str1; //Visual Studio
echo "<br>";
$str2 = substr($str, 7, 6);
echo $str2; //Studio
echo "<br>";
$str3 = substr($str, -4, 4); //截取的起始索引可以为负值，表示从末尾(-1)开始计算
echo $str3; //Code
echo "<br>";
//如果需要截取到末尾，可以省略第三个长度参数
$str4 = substr($str, 7);
echo $str4; //Studio Code
echo "<br>";

//截取中文字符串(用法同上)：mb_substr()
$str = "张三，李四，王五";
$name = mb_substr($str, 0, 2);
echo $name . "<br>"; //张三
$name = mb_substr($str, 3, 2);
echo $name . "<br>"; //李四
$name = mb_substr($str, -2);
echo $name . "<br>"; //王五
?>