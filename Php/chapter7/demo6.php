<?php
//变量相关函数
//1.检测变量是否为空：empty()，返回bool值
//"","0",0,0.0,false,null,array()返回true，否则返回false
$var = "";
$flag = empty($var);
var_dump($flag);
echo "<br>";

//unset():释放变量/销毁变量
$name = "张三";
echo $name;
//unset($name);
//echo $name;//报错，获取不到变量

//对于全局变量，若在函数内部销毁，则只在函数内部起作用；函数调用结束后，全局变量依然存在且有效。
function fun1(){
    global $name;
    echo $name;
    unset($name);
    //echo $name;//报错，获取不到变量
}
echo $name;
echo "<br>";

//isset():检测变量是否存在/定义,存在返回true，否则返回false（null值的变量也是false）
var_dump(isset($name));//bool(true) 
echo "<br>";
var_dump(isset($name1));//bool(false) 
echo "<br>";
$var = null;
var_dump(isset($var));//bool(false) 
?>