## php数据类型包括字符串引号内文本（双引号或单引号）、整数、浮点数、逻辑、数组、对象和null值
## php对象用于存储数据和有关如何处理数据的信息的数据类型，对象必须明确声明，首先使用class关键词生命对象的类，然后定义对象类中定义数据类型，然后在类的实例中使用数据类型。
<?php
    class Car{
        var $color;
        function Car($color="green"){
            $this->color=$color;
        }
        function what_color(){
            return $this->color;
        }
    }
?>
## 数组分为索引数组、关联数组和多维数组
索引数组创建
$cars=array("Volvo","BMW","SAAB");
*count()函数返回数组的长度（元素数）*
echo count($cars);
关联数组的创建方法
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
遍历关联数组
foreach($age as $x=>$x_value){
    echo "Key=".$x.",Value=".$x_value;
    echo "<br>";
}
## 数组的排序
sort()升序排序数组
rsort()降序排序数组
asort()根据值，以升序对关联数组进行排序
ksort()根据键，以升序对关联组数进行排序
arsort()根据值，以降序对关联数组进行排序
krsort()根据键，以降序对关联组数进行排序
## 超全局变量
php定义了很多超全局变量，如下
$GLOBALS        $_SERVER
$_REQUEST       $_POST
$_GET           $_FILES
$_ENV           $_COOKIE
$_SESSION
