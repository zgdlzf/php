## 常量是单个值得标识符，脚本中无法改变，贯穿整个脚本，自动全局
## 通过define()函数定义常量，具有三个参数，第一个是常量名称，第二个是常量值，第三个可选false是对大小写敏感，否则是true，默认为false
<?php
    define("GREETING","Welcome to W3School.com.cn!",true);
    echo greeting;
?>