<?php

// 作业1：编写函数，传入参数n，计算1累加到参数n的和，并返回结果。
function fun1($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    echo '参数和是：' . $sum; //5050
}
fun1(1000);
echo "<br>";
// 作业2：编写函数，传入整数数组，计算数组中所有奇数的和，并返回结果
function fun2()
{
    $sum = 0;
    $arr = array(10, 23, 33, 40, 20, 45, 75, 66, 43, 21);
    foreach ($arr as $value) {
        if ($value % 2 == 1) {
            $sum += $value;
            // echo $value . "<br>";    // 数组所含奇数
        }
    }
    return $sum; //240
}
$sum = fun2();
echo $sum;
echo "<br>";
// 作业3：编写函数，传入行数，输出传入行数的金字塔星号（*）
function fun3($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
fun3(10);
?>