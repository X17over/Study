<?php
//分支结构
//if分支结构
/* 
1.单分支结构
if(条件表达式){
    条件表达式为true执行的代码块;
}
*/
//$score = 70;
/* if($score>=90){
    echo "奖励一部华为手机<br>";
}
echo "if分支结构外的代码"; */

/* 
2.双分支结构
if(条件表达式){
条件表达式为true执行的代码块;
}else{
条件表达式为false执行的代码块;
}
*/
/* $java_score = 80;
$php_score = 70;
if($java_score>=80 && $php_score>=90){
echo "奖励一部华为手机<br>";
}else{
echo "编写20道编程题<br>";
}
echo "if分支结构外的代码"; */

/* 
3.多重分支结构
if(条件表达式1){
条件表达式1为true执行的代码块;
}else if(条件表达式2){
条件表达式2为true执行的代码块;
}else if(条件表达式3){
条件表达式3为true执行的代码块;
}else{
以上条件表达式都为false执行的代码块;
}
说明：从上往下依次匹配或比较，如果其中一个满足条件则之后的所有分支不再执行
*/

/* $score = 55;
if($score>=90){
echo 'A';
}else if($score>=80){
echo 'B';
}else if($score>=70){
echo 'C';
}else if($score>=60){
echo 'D';
}else{
echo 'E';
} */

//4.嵌套if分支结构
//当同时需要满足多个条件，而且针对每种情况都需要单独处理
//在if代码块或else代码块或if-else代码块中都可嵌入if结构(不限形式)

$a = 10;
$b = 5;
$c = 12;
if ($a > 0 && $b > 0 && $c > 0) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "可以组成三角形！";
    }else{
        echo "不可以组成三角形(两边之和必须大于第三边)";
    }
} else {
    echo "三角形的每条边都必须大于零！";
}

?>