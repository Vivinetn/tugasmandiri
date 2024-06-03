<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
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

    $sqlquery = "INSERT INTO register(username, password, email, role, gender, hobi) 
                 VALUES('$username', '$password', '$email', '$role', '$gender', '$hobi')";

    $result = mysqli_query($conn, $sqlquery);

    if ($result) {
        echo "<script>
        alert('Account Created Succesfully');
        window.location.href = 'login.php';
        </script>";
  exit();
     } else {
        echo "Failed: " . mysqli_error($conn);
     }

}


 ?>