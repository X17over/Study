<?php
// 跳过和终止语句
// continue:跳过当前次循环继续进入下一次循环
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . ''; // 0 1 2 3 4 6 7 8 9 
}

echo "<br>";
// break:终止当前整个循环
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . ''; // 0 1 2 3 4 
}
echo "<br>";

// exit(int i| String str): 退出应用程序，可选参数i为退出状态码，str为退出信息
// exit(0);
exit("输入密码错误超过三次,程序退出!");
echo "这是for循环外的代码"; // 无法执行

?>