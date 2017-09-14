# cookie用于识别用户
## setcookie(name,value,expire,path,domain)函数设置cookie
## $_COOKIE["user"]取回名为user的cookie值
<?php
// Print a cookie
echo $_COOKIE["user"];

// A way to view all cookies
print_r($_COOKIE);
?>
<html>
<body>

<?php
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />";
?>

</body>
</html>

## 当删除cookie时，应当使过期日期变更为过去时间点
<?php 
// set the expiration date to one hour ago
setcookie("user", "", time()-3600);
?>
# session用于存储有关用户会话的信息
session工作原理是：当访问者创建一个唯一的id，并基于这个id存储变量
## 启动会话session_star()
## 存储并取回session变量的正确方法是$_SESSION变量
## 终结session，可以使用unset()用于释放制定的session变量或session_destroy()彻底终结session
<?php
session_start();

if(isset($_SESSION['views']))
  $_SESSION['views']=$_SESSION['views']+1;

else
  $_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
unset($_SESSION['views']);
session_destroy();
?>