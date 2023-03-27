<?php
//常量
//1.定义常量：define(name,value,[true])
//制定参数true表示不区分大小写，默认false表示区分大小写
//const PI = 3.14159;
// define("PI",3.14159,true);
define("PI", 3.14159);
echo PI . '<br>';
echo constant("PI") . '<br>';

//检索指定常量是否存在：defined(const_name)
$flag = defined('PI');
var_dump($flag); //bool(true)
echo "<br>";

//预定义常量
//获取php文件的完整路径(绝对路径)
echo __FILE__ . "<br>";
//获取php代码行数
echo __LINE__ . "<br>";
//获取php版本
echo PHP_VERSION . "<br>";
//执行PHP解析器的操作系统名称
echo PHP_OS . "<br>";
//TRUE/FALSE/NULL
var_dump(true);
?>