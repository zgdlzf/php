<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $con=mysqli_connect("localhost","root","","exam");
        if(mysqli_connect_error($con)){
            echo "Could't connect".mysqli_connect_error();
        }
        $result=mysqli_query($con,'select * from list');
        while($row=mysqli_fetch_row($result)){
            echo $row[0].$row[1].$row[2];
        }
        mysqli_close($con)
    ?>
</body>
</html>