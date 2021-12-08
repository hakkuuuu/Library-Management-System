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

    <nav id="nav-lms">
      <span id="logo">
        <img src="img/logo.png" alt="School Logo" id="logo-img" />
        <span id="logo-name">
          <h2>
            Banquerohan <br />
            National High School
          </h2>
        </span>
      </span>
      <ul id="nav-links">
        <li><a href="index.php" class="nav-link">Home</a></li>
      </ul>
    </nav>

    <!-- <script src="navbar.js"></script>
    for sticky navbar. use after flexbox is fixed -->

    <header id="library-header">
      <h1 class="header-name">Admin Login</h1>
    </header>

    <div class="center">
        <h1>Login</h1>
        <form method="post" action="site-home.php">
          <div class="txt_field">
            <input type="text" required />
            <span></span>
            <label>Library ID</label>
          </div>
          <input type="submit" value="Login" />
          <div class="signup_link">
            No library ID? <a href="#">Request Here</a>
          </div>
        </form>
    <?php require_once 'includes/footer.php'; ?>  
</html>