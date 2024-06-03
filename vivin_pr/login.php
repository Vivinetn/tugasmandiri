<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
  <link rel="stylesheet" href="css/signup.css"><br><br><br>

    <div class="container">
      <h2>Log In</h2><br>
        <form action="ceklogin.php" method="post"> <br>
          <label for="username">Nama:</label><br>
          <input type="text" id="username" name="username" value="" required><br>
          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password" value="" required><br><br>
          <button type="submit" name="submit">Login</button>
        </form> <br>
        Don't Have an Account?
        <a href="signup.php">
          Sign Up
        </a> <br>
    </div>

  </body>
</html>
