<?php
//作业1：定义一个邮箱，获取该邮箱名
$email = "123456@qq.com";
/* $email_name = strstr("$email","@",true);
echo $email_name; */
$arr = explode("@", $email);
//echo $arr[0];
//echo current($arr);

//作业2：定义一个含后缀的文件名，获取该文件后缀，并提示该文件所属类型
$file_name = "hello.txt";
//$suffix = strstr($file_name, ".");
$arr = explode(".", $file_name);
$suffix = end($arr);
switch ($suffix) {
    case "txt":
        //echo "文本文档";
        //echo "<script>alert('文本文档')</script>";
        break;
    case "doc":
        echo "文档";
        break;
    case "xls":
        echo "表格";
        break;
    default:
        echo "其他类型";
        break;
}

//作业3：定义一个字符串:my name is zhangsan，将其中的zhangsan替换为lisi
$str = "my name is zhangsan";
//$str1 = substr_replace($str,"lisi",-8);
$str1 = str_replace("zhangsan","lisi",$str);
echo $str1;
?>