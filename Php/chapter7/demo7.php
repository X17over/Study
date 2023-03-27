<?php
//include()函数引入文件
//如果引入文件失败时，不会影响当前文件后续代码的执行
/* echo "这是demo7.php文件代码";
include("header.html");
//include("header1.html");
echo "引入成功<br>"; */

//require()函数引入文件
//如果引入文件失败时，会影响当前文件后续代码的执行
/* echo "这是demo7.php文件代码";
require("header.html");
//require("header1.html");
echo "引入成功<br>"; */

//include_once和require_once函数：只会引入一次
/* include("header.html");//1次
require("header.html");//1次
include_once("header.html");//0次
require_once("header.html");//0次
*/

require_once("header.html"); //1次
include_once("header.html"); //0次
include("header.html"); //1次
require("header.html") //1次
    ?>