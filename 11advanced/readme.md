## 定义二维数组,显示数组
$cars=array(
    array("Volvo",22,18),array("BMW",15,13),array("Land Rover",17,15)
);
<?php 
    echo $cars[0][0].":库存:".$cars[0][1].",销量：".$cars[0][2].".<br>";
    echo $cars[1][0]."库存：".$cars[1][1].",销量：".$cars[1][2].".<br>";
    echo $cars[2][0]."：库存：".$car[2][1]."，销量：".$cars[2][2].".<br>";
?>
<?php
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
## 日期和时间
通过date(format,timestamp)函数把时间戳格式化更易读的日期和时间
format必需参数，规定时间戳格式，常用日期格式，d月里某一天，m,Y,l表示周里的某一天，其他字符，比如"/",".","-"可以被插入字符中，已增加其它格式
<?php
    echo "今天是".date("Y/m/d")."<br>";
    echo "今天是".date("Y.m.d")."<br>";
    echo "今天是".date("l");
?>
时间格式字符
h带有首位零的12小时小时格式
i分钟
s秒
a小写的午前和午后
<?php
    echo "现在时间是".date("h:i:sa");
?>