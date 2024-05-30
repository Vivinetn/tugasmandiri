<?php

$koneksi = mysqli_connect("localhost","root","","datavivin");

//login

if(isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($koneksi,"select role from login where username= '$username' and password='$password'");
    //role ==> pelanggan <> null

    $role = mysqli_fetch_assoc($cekuser)["role"];

    }else{
        if($usernaem == 'usernaem'){
            if($password == 'password'){
                header("Location: main.php?msg=New record created successfully");
            }
        }
    }
?>