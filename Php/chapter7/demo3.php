<?php
//变量作用域
//1.全局变量：在函数外定义的变量，可以在整个php文件访问，但是不能直接在函数内部访问，如果需要在函数内访问则需要添加global声明或使用$GLOBALS全局数组获取
$a = 10;
function fun1()
{
    //global $a;
    //echo 2*$a;

    echo 2 * $GLOBALS["a"];
}
fun1();
echo "<br>";

//2.局部变量：在函数内定义的变量（包括函数内声明的变量，函数参数，函数内部代码中定义的变量），只能在函数内部访问。
function fun2($x){
    $y = 10;
    echo $x + $y;
}
//echo $x,$y;//超过函数作用域，无法访问
fun2(100);
echo "<br>";

function fun3($num1){
    $num2 = 10;
    if($num1>$num2){
        $num3 = 20;
        echo $num2+$num3;
        echo "<br>";
    }
    echo $num3*2;
}
fun3(100);
echo "<br>";

//静态变量：在函数内声明的静态变量(使用是static声明的变量)，在调用结束后会继续保留其值(局部变量会销毁)，而且只会初始化一次
function fun4(){
    static $x = 0;
    $x++;
    echo $x;
}
fun4();//1
echo "<br>";
fun4();//2
echo "<br>";
?>