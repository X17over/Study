<?php
//for循环
//当循环次数已知时推荐使用for循环，循环次数未知时使用推荐使用while循环
/* 
for(循环变化初始化;循环条件;迭代){
    循环体;
}
*/
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}
echo "\$sum = $sum<br>";

//嵌套for循环
//外层循环执行一次，则内部循环执行一圈
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>