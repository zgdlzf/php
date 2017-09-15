<!DOCTYPE html>
<html lang="en">
    <meta charset="utf8">
    <head>
        <title>
            exam
        </title>
    </head>
    <body>
    <?php include "function.php";?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            name:<input type="text" name="name">
            <span><?php echo $nameErr?></span>
            <br>
            time:<input type="date" name="time">
            content:<textarea rows="10" cols="10"></textarea>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
