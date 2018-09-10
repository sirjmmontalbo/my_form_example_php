<?php include('server.php') ?>

<!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="regbox">
      <form class="container" method="post" action="login.php">
        <?php include('errors.php'); ?>
        <h1>LOGIN</h1>
        <label for="email">E-Mail</label>
        <input type="email" placeholder="Enter your email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Enter your password" name="password">

        <input type="submit" value="submit" name="login_user">
        <div class="other-controls">
        <a href="registration.php">Register</a></button>
        </div>
      </form>
  </div>

    
  </body>
</html>