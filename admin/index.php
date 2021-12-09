<?php
    $title = "Login";
    require_once 'includes/header.php';
    require_once 'database/conn.php';

    $con = connect();

?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/login.css">
  <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library Management System</title>
  </head>

    <header id="library-header">
      <h1 class="header-name">Admin Login</h1>
    </header>
<br>
    <div class="container">
        <h1>Login</h1>
        <form method="post" action="site-home.php">      
            <label>Email or Username</label>
            <input type="text" name="username" value="username"><br>
            <label>Password</label>
            <input type="text" name="password" value="password">
            <button type="submit" name="login">Login</button>
        </form>
    </div>    
    <?php require_once 'includes/footer.php'; ?>  
</html>