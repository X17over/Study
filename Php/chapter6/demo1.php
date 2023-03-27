<?php
// 判断是否点击了提交
// 这是获取get请求方式的数据
/* if ($_GET["submit"] == "提交") {
    echo "你输入的用户名是:" . $_GET["userName"] . "<br>";
    echo "你输入的密码是:" . $_GET["pwd"] . "<br>";
} */

// 还可以通过get请求方式获取url参数地址
// echo "URL中传递的参数:userName=" . $_GET["userName"] . "<br>";
// echo "URL中传递的参数:pwd=" . $_GET["pwd"] . "<br>";

// 这是获取post请求方式的数据
if ($_POST["submit"] == "提交") {
    echo "你输入的用户名是:" . $_POST["userName"] . "<br>";
    echo "你输入的密码是:" . $_POST["pwd"] . "<br>";
    echo "你选择的性别是:" . $_POST["sex"] . "<br>";
    // 获取兴趣爱好
    if ($_POST['hobby'] != null) {
        echo "你选择的兴趣爱好是:";
        foreach ($_POST["hobby"] as $value) {
            echo $value . " ";
        }
    }
    echo "<br>";
    echo "你选择的城市是:" . $_POST["city"] . "<br>";
    /* if ($_POST["citys"] != null) {
    echo "你选择的城市是:";
    foreach ($_POST["citys"] as $value) {
    echo $value . " ";
    }
    } */
    echo "<br>";
    //获取文本域的值
    echo "你输入的个人简介:" . $_POST["intro"] . "<br>";
    //获取文件名完整路径(绝对路径)
    echo "文件名完整名：" . $_POST["pic"] . "<br/>";
    //获取隐藏域传递过来的学号id
    echo "学号：" . $_POST["stuId"] . "<br/>";

}

// 获取请求方式
echo "请求方式是:" . $_SERVER["REQUEST_METHOD"] . "<br>";

// 当不确定请求是get还是post时,可以使用$_REQUEST[]方式获取
/* if ($_REQUEST["submit"] == "提交") {
    echo "你输入的用户名是:" . $_REQUEST["userName"] . "<br>";
    echo "你输入的密码是:" . $_REQUEST["pwd"] . "<br>";
    echo "你选择的性别是:" . $_REQUEST["sex"] . "<br>";
} */
?>