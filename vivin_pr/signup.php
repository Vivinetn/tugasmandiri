<?php
require 'tambah.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="signup.css"><br>
<h2>Website Mandiri - Sign Up</h2>

<div class="container">
<form action="tambah.php" method="POST">
  <!-- Nama -->
  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value=""><br><br>

  <!-- Password -->
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" value=""><br><br>

  <!-- Email -->
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" value=""><br><br>

  <!-- Role -->
  <label for="role">Role:</label>
  <select name="role" id="role">
    <option value="user">User</option>
    <option value="admin">Admin</option>
  </select>
  <br><br>

  <!-- Jenis Kelamin -->
  <label for="gender">Jenis Kelamin:</label><br>
  <input type="radio" id="lakilaki" name="gender" value="lakilaki">
  <label for="lakilaki">Laki Laki</label><br>

  <input type="radio" id="perempuan" name="gender" value="perempuan">
  <label for="gender">Perempuan</label><br><br>

  <!-- Hobi -->
  <label for="hobi">Hobi:</label><br>
  <input type="checkbox" id="a" name="hobik[]" value="tidur">
  <label for="hobi"> Tidur</label><br>

  <input type="checkbox" id="a" name="hobik[]" value="main">
  <label for="hobi"> Main</label><br>

  <input type="checkbox" id="a" name="hobik[]" value="makan">
  <label for="hobi"> Makan</label><br>

  <input type="checkbox" id="a" name="hobik[]" value="jalan">
  <label for="hobi"> Jalan</label><br>

  <input type="checkbox" id="a" name="hobik[]" value="bersih">
  <label for="hobi"> Bersih bersih</label><br><br>

  <br><br>
  <button input type="submit" name="submit" value="Submit"> Register<br>
</form> 

<a href="login.php">
  <button>Login</button>
</a> 
</div>

</body>
</html>