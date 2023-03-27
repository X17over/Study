<?php
//代码注释：单行注释//，多行注释/块注释/* */，shell方式注释#

//数据类型
//1.标量数据类型
//整数：int/integer/long
//声明变量：$变量名 = 值;
//弱类型：通过值决定类型
$age = 20;
//字符串拼接使用点符号
echo $age."<br>";
//浮点数：float/double
$score = 85.5;
print $score.'<br>';
//使用科学计数法表示浮点数
$num1 = 1.23E5; //1.23*10的5次方
$num2 = 1.23E-5;//1.23*10的-5次方
echo $num1.',',$num2.'<br>';

//string类型：使用单引号或双引号引起来的字符串,双引号可以解析内部变量
$name = 'zhangsan';
$class = "1班";
echo '姓名：'.$name.',班级：'.$class.'<br>';
echo "姓名：$name,班级：$class<br>";
//浏览器中换行使用<br>,浏览器源码中换行使用\n
$str = "张三\n1班";
echo $str;
//布尔类型：bool/boolean，只有true和false两个值
$bo = true;
echo $bo.'<br>';//作为字符串使用时，true为'1',false就是空字符串：''

//print和echo输出语句的区别
//相同点：都可以输出字符串，语法一样
/* 第一种语法是语句语法:print/echo "字符串";语法二：函数形式写法：print()/echo(),但都不是函数，而是语句 */
print("张三<br>");
print "张三<br>";
echo("张三<br>");
echo "张三<br>";
//不同点
//1.print一次只能输出一个字符串，echo一次可以输出多个字符串
// print 'a';
echo 'a---','b---','c<br>';
echo ('a---'),('b---'),('c<br>');
//2.print输出方式有返回值true/1，echo输出没有返回值
// $val = print('hello');
// print($val);

// echo('hello');
//3.echo执行效率更高

//定界符方式定义字符串
/* 
<<<开始标记
    字符串...
结束标记;
注意点：开始标记和结束标记要一致，结束标记独占一行
内部字符串不需要"\"转义
*/
$str = <<<eof
姓名：$name<br>
年龄：$age<br>
"成绩"：$score<br> 
eof;
echo $str;

//复合数据类型：数组(array)、对象(object)
//特殊数据类型：资源(resource)、空值/空类型:null
$nu = null;

//检测数据类型：is_类型(变量)，返回boolean值
$flag1 = is_int($age);//也可以写成is_integer($age)或is_long($age)
$flag2 = is_float($score);//也可以写成is_double($score)
$flag3 = is_string($name);
$flag4 = is_null($nu);
echo "$flag1,$flag2,$flag3,$flag4<br>";

// 输出运算符/输出表达式
$color = "red";

//print_r()和var_dump()输出方式
//可以像print()和echo()一样输出标量数据类型，而且还可以输出数组和对象类型
$arr = array('张三','李四','王五');
print_r($arr);//按一定格式输出数组的索引和值
echo '<br>';
var_dump($arr);//按一定格式输出数组的索引,值和数据类型
echo '<br>';
var_dump($age);

?>
<h2 style="background-color:<?=$color ?> ;">江西机电</h2>
<h2 style="background-color:<?=$color ?> ;"><?=$name?></h2>
<h2 style="background-color:<?php echo $color ?>;"><?php echo $name ?></h2>