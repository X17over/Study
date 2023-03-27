<?php
// 实现文件上传
// 1.获取上传的的文件名
$fileName = $_FILES["pic"]["name"];
// 2.获取文件后缀
$arr = explode(".", $fileName);
$suffix = end($arr);
// 判断上传文件的类型
if (in_array($suffix, array("jpg", "png", "gif", "jpeg"))) {
    // 判断服务端目录下是否存在该文件
    if (file_exists("upload/" . $_FILES["pic"]["name"])) {
        echo $_FILES["pic"]["name"] . "文件已存在";
    } else {
        // 不存在时则临时临时目录下的文件移动或复制到upload目录下
        move_uploaded_file($_FILES["pic"]["tmp_name"], "upload/" . $_FILES["pic"]["name"]);
        // echo "文件上传成功";
        echo "<script>alert('文件上传成功')</script>";
    }
} else {
    // echo "文件格式有误";
    echo "<script>alert('文件格式有误')</script>";
}
?>