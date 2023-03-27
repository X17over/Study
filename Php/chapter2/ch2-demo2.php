<?php
//变量赋值
//1.传值赋值/值传递
$a = 10;
$b = $a;
$a = 20;
echo "$a--$b<br>";//20--10

//引用赋值/引用传递
$a = 10;
$b = &$a;
$a = 20;
echo "$a--$b<br>";//20--20

//可变变量：变量名为另一个变量的值
$course = "php";
$php = 85;
// echo $php;
echo $$course;

//预定义变量/系统变量
//服务器IP地址
echo $_SERVER['SERVER_ADDR'].'<br>';
//服务器主机名
echo $_SERVER['SERVER_NAME'].'<br>';
//请求方式，默认GET
echo $_SERVER['REQUEST_METHOD'].'<br>';
//用户的IP地址
echo $_SERVER['REMOTE_ADDR'].'<br>';
//用户访问的浏览器端口号
echo $_SERVER['REMOTE_PORT'].'<br>';
//服务器端口号，默认80
echo $_SERVER['SERVER_PORT'].'<br>';
//文件的绝对路径
echo $_SERVER['SCRIPT_FILENAME'].'<br>';
//服务器版本，php版本等信息
echo $_SERVER['SERVER_SIGNATURE'].'<br>';
//服务器的项目发布目录
echo $_SERVER['DOCUMENT_ROOT'].'<br>';
//由所有已定义全局变量组成的数组
print_r($GLOBALS);

//获取php版本
echo PHP_VERSION.'<br>';
//获取php所有相关信息
echo phpinfo();
?>