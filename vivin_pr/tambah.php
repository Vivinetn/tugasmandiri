<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    if($gender == 'lakilaki'){
        $gender = 'L';
    }else{
        $gender = 'P';
    }
    $hobi = $_POST['hobik'];

    $hobi = implode(',', $_POST['hobik']);

    $sqlquery = "INSERT INTO register(username, password, email, role, gender, hobi) VALUES('$nama', '$password', '$email', '$role', '$gender', '$hobi')";
    mysqli_query($conn, $sqlquery);

    $result = mysqli_query($conn, $sqlquery);

    if ($result) {
        header("Location: login.php?msg=New record created successfully");
     } else {
        echo "Failed: " . mysqli_error($conn);
     }

}


 ?>