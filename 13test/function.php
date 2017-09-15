<?php 
    $name=$time=$content="";
    $nameErr=$timeErr=$contentErr="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'])){
            $nameErr="name is required";
        }else{
            $name=test_input($_POST['name']);
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                $nameErr="Invalid name";
                

            }
        }

        if(empty($_POST['email'])){
            $emailErr='email is required';
        }else
        {
            $email=test_input($_POST['email']);
            if(!preg_match('/([\w\-]+\@[\w\-]+\.[\w\-]+)/',$email)){
                $emailErr='Invalid email';
            }
        }
    }
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }


    $con=mysqli_connect("localhost","root","","exam");
    if(mysqli_connect_error($con)){
        echo 5;
    }
    $result=mysqli_query($con,'insert into list (id,name,time,content) values (4,"root","root","root")');
    echo $result;
    mysqli_close($con);
    /*
        $con=mysql_connect("localhost","root","");
    if($con==""){
        echo 'Connect fail';
    }
    mysql_select_db('exam',$con);
    mysql_query('insert into list (name,time,content) values ("wwww","2017-09-15","2017-09-15")');
    mysql_close($con);
    */
?>
