<?php
//比较字符串
//strcmp(str1,str2)/strcasecmp(str1,str2)：strcmp()函数区分大小写，strcasecmp()函数不区分大小写
//strncmp(str1,str2,len)/strncasecmp(str1,str2,len):用于比较前n个字符(strncmp区分大小写，strncasecmp不区分大小写)
//第一个字符串等于第二个字符串返回0，大于第二个返回1，小于第二个返回-1
$str1 = "zhangsan";
$str2 = "ZhangSan";
$result1 = strcmp($str1, $str2);
echo $result1 . "<br>"; //1
$result2 = strncasecmp($str1, $str2, 5); //比较前5个字符
echo $result2 . "<br>"; //0
$result3 = strcasecmp($str1, $str2);
echo $result3 . "<br>"; //0

//strstr(string,searchStr)/stristr(string,searchStr)
//搜索字符串(searchStr)在另一字符串(string)中是否存在，如果存在则返回该字符串及剩余部分，否则返回FALSE。
//strstr()函数区分大小写，stristr()函数不区分大小写。
$str = strstr("zhangsan,lisi", "li");
var_dump($str); //string(4) "lisi" 
echo "<br>";
$str = strstr("zhangsan,lisi", "wang");
var_dump($str); //bool(false) 
echo "<br>";
$str = stristr("zhangsan,lisi", "Li");
var_dump($str); //string(4) "lisi" 
echo "<br>";

//substr_count(string,substring[,start,length])
/* 
计算子串在字符串中出现的次数。
start:规定在字符串中何处开始搜索。  
length:规定搜索的长度。
*/
$count1 = substr_count("zhangsan", "a");
echo $count1 . "<br>"; //2
$count2 = substr_count("zhangsan,zhangsanfeng", "zhang");
echo $count2 . "<br>"; //2
$count3 = substr_count("zhangsan", "a", 3);
echo $count3 . "<br>"; //1
$count4 = substr_count("zhangsan", "a", 3, 3);
echo $count4 . "<br>"; //0

//替换字符串
//str_replace(find,replace,string[,count]):区分大小写
//ireplace(find,replace,string[,count])：不区分大小写
//find：要查找的字符串  replace：替换的字符串  string：原字符串
$str = str_replace("zhang", "wang", "zhangsan");
echo $str . "<br>"; //wangsan
$str = str_ireplace("Zhang", "wang", "zhangsan");
echo $str . "<br>"; //wangsan
$str = str_ireplace("Zhang", "wang", "zhangsan,zhangsanfeng");
echo $str . "<br>"; //wangsan,wangsanfeng

//substr_replace(string str,string rep,int start,[int length])
/* 
str:要检查的字符串
rep:要替换/插入的字符串
start:在字符串的何处开始替换(可以为负数)
length:规定要替换多少个字符。默认是与字符串长度相同，0表示插入而非替换
*/
//替换
$str = substr_replace("zhangsan", "wang", 0, 5);
echo $str . "<br>"; //wangsan
$str = substr_replace("zhangsan", "wang", 0);
echo $str . "<br>"; //wang
$str = substr_replace("zhangsan", "li", -3);
echo $str . "<br>"; //zhangli
//插入
$str = substr_replace("zhangsan", "hello,", 0, 0);
echo $str . "<br>"; //hello,zhangsan
$str = substr_replace("zhangsan", ",zhangsanfeng", 8);
echo $str . "<br>"; //zhangsan,zhangsanfeng
?>