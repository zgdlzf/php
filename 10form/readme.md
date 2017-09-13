## php表单处理
超全局变量$_GET和$_POST用于收集表单数据
<?php
    //定义变量并设置空值
    $nameErr=$emailErr=$genderErr=$websiteErr="";
    $name=$email=$gender=$comment=$website="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr="Name is required";
        }else{
            $name=test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                $nameErr="Only letters and white space allowed";
            }
        }
        if(empty($_POST["email"])){
            $emailErr="Email is required";
        }else{
            $email=test_input($_POST["email"]);
            if(!preg_match("/([\w\-]+\@[\w\-]+.[\w\-]+)/",$email)){
                $emailErr="Invalid email format";
            }
        }
        if(empty($_POST["website"])){
            $website="";
        }else{
            $website=test_input($_POST["website"]);
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                $websiteErr="Invalid URL";
            }
        }
        if(empty($_PSOT["comment"])){
            $comment="";
        }else{
            $comment=test_input($_POST["comment"]);
        }
        if(empty($_POST["gender"])){
            $genderErr="Gender is required";
        }else{
            $gender=test_input($_POST["gender"]);
        }
    }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:<input type="text" name="name" value="<?php echo $name;?>">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
E-mail:<input type="text" name="email" value="<?php echo $email;?>">
<span class="error">*<?php echo $emailErr;?></span>
<br><br>
Website:<input type="text" name="website" value="<?php echo $website;?>"> 
<span class="error"><?php echo $WebsiteErr;?></span>
<br><br>
Comment:<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<br><br>
Gender:<input type="radio" name="gender"
<?php if(isset($gender)&& $gender=="female") echo "checked;" value="femal">Female
<input type="radio" name="gender" <?php if(isset($gender)&& $gender=="male") echo "checked;" value="male">Male
<span class="error">*<?php echo $genderErr;?></span>
<br><br>
</form>

