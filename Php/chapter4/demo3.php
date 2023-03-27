<?php
//循环结构
//1.while循环结构
/* 
循环变量初始化;
while(循环条件){
    循环体;
    迭代(更新循环变量值);
}
*/
/* $num = 1;
$sum = 0;
while ($num <= 100) {
if ($num % 2 == 0) {
$sum += $num;
}
$num++;
}
echo "sum=" . $sum; */

//2.do-while循环
//while循环是先判断后执行，do-while则是先执行后判断，当初始条件不满足时，while一次都不执行，而do-while至少执行一次。
/* 
循环变量初始化;
do{
    循环体;
    迭代(更新循环变量值);
}while(循环条件);
*/
/* $num = 1;
$sum = 0;
do {
if ($num % 2 == 0) {
$sum += $num;
}
$num++;
} while ($num<=100);
echo "sum=" . $sum; */

//while和do-while区别
$a = 0;
while ($a > 0) {
    $a--;
}
echo "\$a = $a"; //0
echo "<br>";

$b = 0;
do {
    $b--;
} while ($b > 0);
echo "\$b = $b"; //-1
?>