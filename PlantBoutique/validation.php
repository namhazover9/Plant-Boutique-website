<?php

    session_start();
    // header('location:login.php');
    $con = mysqli_connect('localhost', 'root', '');
    

    mysqli_select_db($con, 'userregistration');

    $name = $_POST['user'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    

    // $s = "select * from usertable where name = '$name' && password = '$pass'";
    $s = "select * from usertable where name = '$name' && password = '$pass' && phone = '$phone' && email = '$email'";

    $result = mysqli_query($con, $s);
    // $result1 = mysqli_query($con, $s1);

    $num = mysqli_num_rows($result);
    // $num1 = mysqli_num_rows($result1);

    
    if($num == 1) {  
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $pass;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;       
        header('location:ASM/PlantSign.php');
    } else {
       header('location:login.php');
    }
    
?>