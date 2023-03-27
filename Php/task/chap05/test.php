<?php
// 作业一：在浏览器显示5件特价商品名称(Nike背包，Adidas运动衫，李宁运动鞋，Kappa外套，360°腰包)，注：使用数组存储商品名称
$arr = array("Nike背包", "Adidas运动衫", " 李宁运动鞋", " Kappa外套", " 360°腰包");
foreach ($arr as $value) {
    echo $value . " &nbsp;";
}
echo "<br>";

/* 作业二：使用数组存储以下信息并遍历输出到浏览器
张三    HTML成绩    JS成绩  PHP成绩
李四    HTML成绩    JS成绩  PHP成绩
王五    HTML成绩    JS成绩  PHP成绩 */
$arr = array(
    "张三" => array("HTML成绩", "JS成绩", "PHP成绩"),
    "李四" => array("HTML成绩", "JS成绩", "PHP成绩"),
    "王五" => array("HTML成绩", "JS成绩", "PHP成绩"),
);
foreach ($arr as $key => $value) {
    echo $key . " &nbsp;";
    foreach ($value as $v) {
        echo $v . " &nbsp;";
    }
    echo "<br>";
}
echo "<br>";
// 作业三：在第二题的基础上，求出每个学生的总成绩和平均成绩。
$arr = array(
    "张三" => array("HTML成绩" => 84, "JS成绩" => 70, "PHP成绩" => 88),
    "李四" => array("HTML成绩" => 79, "JS成绩" => 84, "PHP成绩" => 93),
    "王五" => array("HTML成绩" => 83, "JS成绩" => 81, "PHP成绩" => 89),
);
foreach ($arr as $key => $value) {
    echo $key . "：";
    echo "总成绩：" . $sum = array_sum($value);
    echo "平均分：" . $avg = (int) ($sum / count($value));
    echo "最大值：" . $max = max($value);
    echo "<br>";
}

?>