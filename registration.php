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
      
      <form class="container" method="post" action="registration.php">
        <?php include('errors.php'); ?>
        <h1>Register</h1>
        <label for="username">Username</label>
        <input type="text" placeholder="Enter username" name="username" value="<?php echo $username; ?>">

        <label for="email">E-Mail</label>
        <input type="email" placeholder="Enter your email" name="email" value="<?php echo $email; ?>">

        <label for="password">Password</label>
        <input type="password" placeholder="Enter your password" name="password_1">

        <label for="password">Confirm Password</label>
        <input type="password" placeholder="Confirm your password" name="password_2">

        <input type="submit" value="submit" name="reg_user">
        <div class="other-controls">
        <a href="login.php">Login</a></button>

      </form>
  </div>

    
  </body>
</html>