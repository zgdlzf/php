# php语法
    1 php脚本在服务器上执行，然后向浏览器发送回纯HTML结果
    2 php脚本可以放置在文档的任何位置
    3 php脚本可以以分号结尾，也可以不适用分号
    4 php注释的三种方法单行注释包括//和#多行注释为/* */
## php所有用户自定义的函数、类和关键词（例如if、else、echo等等）都对大小写不敏感，只有变量对大小写敏感
ECHO "Hello World!<br>";
echo "Hello World!<br>"等价
而$color与$COLOR不同
## php变量以$符号开头，变量名称以字母或下划线开头；php没有创建变量的命令，变量会在首次为其赋值时被创建
<?php
    $txt="Hello world!";
    $x=5;
    $y=10.5;
？>
## php变量作用域
local局部（函数内创建）
global全局变量（函数外创建）
static（静态）
## php global关键词用于函数内访问全局变量
<?php
    $x=5;
    $y=10;
    function myTest(){
        global $x,$y;
        $y=$x+$y;
    }
    myTest();
    echo $y;
?>
## php同时在名为$GLOBAL[index]的数组中存储了所有全局变量，下表存有变量名，函数内能够访问，并能够直接更新全局变量
<?php
    $x=5;
    $y=10;
    function myTest(){
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    }
    myTest();
    echo $y;
?>