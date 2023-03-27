<?php
//自定义函数
/* 
function 函数名([形参1,形参2...]){
    函数体;
    [return 返回值]
}
*/

//1.无参无返回值的函数
function fun1()
{
    for ($i = 0; $i < 10; $i++) {
        echo "hello world!<br>";
    }
}
//调用函数
//fun1();

//2.有参无返回值的函数
function fun2($num)
{
    for ($i = 0; $i < $num; $i++) {
        echo "hello world!<br>";
    }
}
fun2(5);

//默认值参数
//默认值参数要放在所有参数的最后，可以有多个默认值参数
function fun3($a, $b=100,$c=200)
{
    echo $a + $b + $c;
}
fun3(10);//310
//fun3(10,200);//410，如果调用了有默认值参数的函数时又重新传递了实参，则以传递的实参为准(覆盖默认值)
echo "<br>";

//值传递和引用传递
//值传递：不会保留传递的实参在函数内的修改
//引用传递：会保留传递的实参在函数内的修改，需要在形参前加"&"

//值传递
function fn1($a){
    $a = 2*$a;
    echo $a;
}
$a = 10;
fn1($a);//20
echo "<br>";
echo $a;//10
echo "<br>";

//引用传递
function fn2(&$a){
    $a = 2*$a;
    echo $a;
}
$a = 10;
fn2($a);//20
echo "<br>";
echo $a;//20
echo "<br>";

//3.无参有返回值的函数
//结合return返回结果并跳出函数，且只能返回一个值，如果需要返回多个值则可以返回一个数组，return必须为最后一条语句
//调用有返回的函数可以直接参与运算
function fun4()
{
    $a = 100;
    $b = 200;
    $sum = $a + $b;
    return $sum;
}
$sum = fun4() + 300;
echo $sum."<br>"; //600

//4.有参有返回值的函数
function fun5($a, $b)
{
    $sum = $a + $b;
    return $sum;
}
$sum = fun5(10, 20) + 30;
echo $sum;
?>