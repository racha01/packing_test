<?php

    session_start();

    require('connect.php');

    
    // $sql1="select * from users ";

    // $result1=mysqli_query($con,$sql1);
    // while($row = mysqli_fetch_assoc($result1)){
    //     print($row["username"]."<br>");
    //     print($row["user_pass"]."<br>");
    // }
    
    $user_form=$_POST["username"];
    $pass_form=$_POST["password"];
    // print($user_form."<br>");
    // print($pass_form."<br>");

    $sql="select * from users where username='$user_form' and user_pass=MD5('$pass_form')";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['USER_NAME']=$user_form;
        $_SESSION['USER_ROLE']=$row["user_role"];
        header('Location:dashboard.php');
       
    }
    else{
        header('Location:login.html');
    }

?>