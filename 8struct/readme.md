## 条件语句
### 1 if 2 if else 3 if elseif else 
### switch
switch(expression){
    case label1:
        code
        break;
    case label2:
        code
        break;
    default:
        code
}
## 循环
### while和do...while
### for
### foreach遍历数组中每个元素并循环代码
<?php
    $color=array("red","green","blue","yellow");
    foreach($color as $value){
        echo "$value <br>";
    }
?>