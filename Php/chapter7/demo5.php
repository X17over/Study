<?php
//数学相关函数
//1.求最大值：max(array $arr)/max(val1,val2...)
$arr = array(10,50,60,40,30,80,75);
$max= max($arr);
echo $max."<br>";
$max= max(10,50,60,40,30,80,75);
echo $max."<br>";
//2.求最小值：min(array $arr)/min(val1,val2...)
$arr = array(10,50,60,40,30,80,75);
$min= min($arr);
echo $min."<br>";
$min= min(10,50,60,40,30,80,75);
echo $min."<br>";
//3.rand([int low,int high]):生成一个随机数
$num1 = rand();
echo $num1."<br>";
$num2 = rand(1,10);//获取1~10之间的随机数(含1和10)
echo $num2."<br>";
//ceil(int $num):向上取整
echo ceil(12.01);//13
echo "<br>";
//floor(int $num):向下取整
echo floor(12.99);//12
echo "<br>";
//pow(int $num1,int $num2):$num1的$num2次方
echo pow(2,3);//8
echo "<br>";
//sqrt(int $num):$num的平方根
echo sqrt(36);//6
echo "<br>";
//abs(int $num):$num的绝对值
echo abs(-100);//100
echo "<br>";
//round(int $num1[,int $num2]):对$num1保留$num2位小数，并对其后一位小数四舍五入，$num2默认为0，表示只取整数，对第一位小数四舍五入
echo round(12.5678);//13
echo "<br>";
echo round(12.5678,2);//12.57
echo "<br>";
?>