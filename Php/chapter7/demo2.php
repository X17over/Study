<?php
//变量函数/匿名函数
//允许将函数名(函数的定义)赋值给一个变量，该函数就称为变量函数，通过变量调用函数，一般用于实现回调函数。
function fun1($a, $b)
{
    return $a + $b;
}
$sum = "fun1";
echo $sum(10,20);//30
echo "<br>";

$num = function($a, $b){
    echo $a + $b;
};
echo $num(10,20);//30
echo "<br>";

//回调函数：允许将一个函数作为另一个函数的参数使用，则该函数称为回调函数
function fun2($num1, $num2)
{
    return $num1 + $num2;
}
echo fun2($sum(10,20),30);//60
echo "<br>";

//递归函数：函数内部调用自身函数，需要在指定条件下退出自调用，防止无限调用导致电脑死机
function fun3($n){
    echo $n.' ';
    if($n>0){
        fun3($n-1);
    }
}
fun3(10);//10 9 8 7 6 5 4 3 2 1 0 
?>