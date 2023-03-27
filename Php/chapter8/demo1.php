<?php
//字符串的定义
//1.使用单引号或双引号
//单引号不会解析内部变量，双引号可以解析内部变量
$course = 'PHP';
$str = 'I like $course';
echo $str;
echo "<br>";

$course = "PHP";
$str = "I like $course";
echo $str;
echo "<br>";

//2.使用定界符
$str1 = <<<eof
    <h2 style="color:red">课程：$course</h2><br>
    I like $course
eof;
echo $str1;
?>