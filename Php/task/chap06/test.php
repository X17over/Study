<?php
$user_name = $_POST['userName'];
if ($_POST['userName'] != null && $_POST['pwd'] != null) {
    if ($_POST['userName'] == 'zhangsan' && $_POST['pwd'] == 123456) {
        // echo "<h1>欢迎你:" . $_POST['userName'] . "</h1>";
        echo '<script>location.href=index.php?uname=$user_name</script>';
    } else {
        echo "<script>alert('用户名或密码错误!');</script>";
    }
} else {
    echo "<script>alert('用户名或密码不能为空!');</script>";
}
?>