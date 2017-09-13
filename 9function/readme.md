# php的真正力量来自它的函数，它拥有超过1000个内建的函数（函数只有在被调用时被执行）
## 没有调用参数时，使用默认参数
<?php
    function setHeight($minheight=50){
        echo "The height is : $minheight <br>";
    }
    setHeight(350);
    setHeight();
    setHeight(135);
?>