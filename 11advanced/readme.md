## 定义二维数组,显示数组
$cars=array(
    array("Volvo",22,18),array("BMW",15,13),array("Land Rover",17,15)
);
## 日期和时间
通过date(format,timestamp)函数把时间戳格式化更易读的日期和时间
format必需参数，规定时间戳格式，常用日期格式，d月里某一天，m,Y,l表示周里的某一天，其他字符，比如"/",".","-"可以被插入字符中，已增加其它格式
<?php
    echo "今天是".date("Y/m/d")."<br>";
    echo "今天是".date("Y.m.d")."<br>";
    echo "今天是".date("l");
?>
时间格式字符
h带有首位零的12小时小时格式i分钟s秒a小写的午前和午后
<?php
    echo "现在时间是".date("h:i:sa");
?>
## 设置时区
<?php date_default_timezone_("Asia/Shanghai");
echo "当前时间是".date("h:i:sa");
?>
## strtotime()用字符串来创建日期
<?php 
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa",$d)."<br>";
    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa",$d)."<br>";
?>
## 服务器端包含（SSI）用于创建可在多个页面重复使用的函数、页眉、页脚或元素
include和require语句相同，都可以将PHP文件插入另一个PHP文件，require会生成致命错误，（E_COMPILE_ERROR)并停止脚本
include只生成警告（E_WARNING),并且脚本会继续执行
<?php $color='银色的';$car='奔驰轿车';?>
<html>
<body>
<?php include 'vars.php';echo "我有一辆".$color.$car."。";?>
</body>
</html>

## 文件操作
### readfile()函数读取文件，并把它写入输出缓冲，如果成功则返回字节数
<?php echo readfile("webdictionary.txt");?>
### fopen()打开文件，
两个参数，第一个是文件名，
第二个是打开文件模式，如下，r只读打开，w只写打开，删除文件内容或新建一个新的文件，a只写打开，文件中数据被保留，如果文件不存在，创建新的文件，x只写创建文件，返回false错误时，文件已存在，r+读写打开，w+读写打开，删除内容或创建文件，a+读写打开，文件被保留，或创建文件，x+读写创建，如果返回false，文件已存在。
### fread()读取文件,第一个文件名，第二个参数待读取得最大字节数
### fclose()关闭打开的文件
$myfile=fopen("webdictionary.txt","r") or die("Unable to open file!");
fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
### fgets()读取单行文件，fgetc()读取单字符
### feof()函数检查是否已到达"end-of-file"对于遍历未知长度的数据很有用
<?php 
    $myfile=fopen("webdictionary.txt","r") or die("Unable to open file!");
    while(!feof($myfile)){
        echo fgets($myfile)."<br>";
    }
    fclose($myfile);
?>
### 写入文件fwrite()函数用于写入文件，第一个参数是要写入的文件名，第二个参数是被写入的字符串
<?php 
    $myfile=fopen("newfile.txt","w") or die("Unable to open file!");
    $txt="Bill Gates\n";
    fwrite($myfile,$txt);
    fclose($myfile);
?>
## 上传并保存文件
enctype规定提交时的内容类型
$_FILES可以获取从客户机上传到服务器的文件
$_FILES["file"]["name"]被上传文件名称，第一个参数是表单的名称，第二参数可以是name\type\size\tmp_name或error
<html>
<body>
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
    <label for="file">FILENAME:</label>
    <input type="file" name="file" id="file"/><br>
    <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>
<?php
    if((($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg")||($_FILES["file"]["type"]=="image/pjpeg"))&&($_FILES["file"]["size"]<20000)){
        if($_FILES["file"]["error"]>0){
            echo "Return Code:".$_FILES["file"]["error"]."<br>";
        }else{
         echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>