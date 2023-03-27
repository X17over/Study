<?php
//switch分支结构
//类似于多重if分支结构，当变量或表达式的值处于某个连续区间时优先使用多重if，当处于某几个固定值的范围时优先使用switch结构
//支持匹配整数或字符串类型
$grade = '1';
switch($grade){
    case '1':
        echo "奖励一台华为笔记本电脑";
        break;
    case '2':
        echo "奖励一部华为手机";
        break;
    case '3':
        echo "奖励一个U盘";
        break;
    default:
        echo "再接再厉！";
        break;
}
?>