## php表单处理
超全局变量$_GET和$_POST用于收集表单数据
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:<input type="text" name="name">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
E-mail:<input type="text" name="email">
<span class="error">*<?php echo $emailErr;?></span>
<br><br>
Website:<input type="text" name="website">
<span class="error"><?php echo $WebsiteErr;?></span>
<br><br>
Comment:<textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:<input type="radio" name="gender" value="femal">Female
<input type="radio" name="gender" value="male">Male
<span class="error">*<?php echo $genderErr;?></span>
<br><br>
</form>

