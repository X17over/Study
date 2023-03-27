<?php
//运算符
//1.算术运算符：+ - * / % ++ --
$a = 10;
$b = 3;
$c = $a / $b;
echo $c . "<br>"; //3.333333
//%:求余数
echo $a % $b . "<br>"; //1

$x = "10";
$y = "20";
$z = $x + $y;
echo $z . '<br>'; //30

/* $x = "10a";
$y = "a20";
$z = $x + $y;
echo $z.'<br>'; //10,会有警告*/

//自增/自减：++/--
//++在前，先自增后参与运算，++在后，先运算后自增，自减同理
/* $num1 = ($a++) + $b; //10 + 3 = 13
echo "\$a=$a,\$num1=$num1", '<br>'; //11,13 */
/* $num2 = (++$a) + $b; //11 + 3 = 14
echo "\$a=$a,\$num2=$num2", '<br>'; //11,14 */

//2.复合赋值运算符：+=，-=，*=，/=，%=
//a+=b相当于a=a+b;
/* $a += $b; //$a=$a+$b \$a=10+3=13
echo $a . "<br>"; //13 */

//3.比较运算符：> >= < <= == != === !==
//返回bool结果
// ==只比较值,不需要比较数据类型
//===/!==：恒等于/恒不等于，不仅比较值，还要比较数据类型
$num1 = 100;
$num2 = "100";
$flag1 = $num1 == $num2;
var_dump($flag1); //true
echo '<br>';
$flag2 = $num1 === $num2;
var_dump($flag2); //false
echo '<br>';

// 4.逻辑运算符: 
// 1)&&(and) x和y都为true,则返回true
$flag = ($a < $b) && (++$a + $b > 2 * $b); // flase && true  --> flase
var_dump($flag);
echo '<br>';
var_dump($a);
echo '<br>';


// 2)||(or)   x和y有一个为true,则返回true,两边都为false,则返回false
$flag = ($a < $b) || (++$a + $b > 2 * $b); // false || true  --> true
var_dump($flag);
echo '<br>';
var_dump($a);
echo '<br>';


// 3)xor(异或)   x和y有且仅有一个为true,则返回true,需要将整个表达式括起来
$flag = (($a < $b) xor ($a + $b > 2 * $b)); // flase xor true --> true
var_dump($flag);
echo '<br>';


// 4)!(非)    用于连接boolean类型的数据,返回结果也是boolean数据,将整个表达式结果相反
// $flag = !($a < $b) || (++$a + $b > 2 * $b); // !false-->true || true  --> true
$flag = !(($a < $b) || (++$a + $b > 2 * $b)); // false || true  --> true
var_dump($flag);
echo '<br>';


// 条件运算符/三元运算符
// 表达式1 ? 表达式2 : 表达式3
// 表达式1为true时执行表达式2,反之执行表达式3
$result = $a > $b ? "\$a>\$b" : "\$a<=\$b";
echo $result;
echo '<br>';

?>