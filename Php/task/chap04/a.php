<?php
// 1.输出一段自我介绍
// 2.字体大小30px
// 3.蓝色
$font_Size = "30px";
$color = "blue";
$text = "我叫张三...";
?>

<span style="font-size:<?= $font_Size ?>;color:<?= $color ?>" <?= $text ?></span>