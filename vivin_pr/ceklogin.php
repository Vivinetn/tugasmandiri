<?php
$koneksi = mysqli_connect("localhost", "root", "", "datavivin");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

   $query = " SELECT * FROM register WHERE username='$username' AND password='$password'";
   $cekuser=mysqli_query($koneksi,$query);
   if($cekuser && mysqli_num_rows($cekuser) > 0){
    header("Location: main.php");
   } else {
    header ("Location: login.php");
}
}
?>