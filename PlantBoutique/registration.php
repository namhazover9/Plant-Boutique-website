<?php

    session_start();
    // header('location:login.php');
    $con = mysqli_connect('localhost', 'root', '');
    

    mysqli_select_db($con, 'userregistration');

    $name = $_POST['user'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $s = "select * from usertable where name = '$name' OR phone = '$phone' OR email = '$email'";
   
    $result = mysqli_query($con, $s);


    $num = mysqli_num_rows($result);


    if($num > 0) {     
        echo '<script>alert("The Username, Phone or Email Already Taken.")</script>';
        echo "<script>window.location = 'login.php'</script>";
    }else {
        $reg = "insert into usertable(name, password, phone, email) values ('$name' , '$pass', '$phone', '$email')";
        mysqli_query($con, $reg);   
        echo '<script>alert("Registration Successfully!")</script>';
        echo "<script>window.location = 'login.php'</script>";
    }
    
    // $_SESSION['username'] = $name;
    // $_SESSION['password'] = $pass;
    // $_SESSION['phonenumber'] = $phone;
    // $_SESSION['email'] = $email;
    
?>