<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>Login</title>
  </head>
  <body>

  <nav id="nav-lms">
    <span id="logo">
      <img src="css/logo.png" alt="School Logo" id="logo-img" />
        <span id="logo-name">
          <h2>Tabaco National <br />High School</h2>
        </span>
    </span>

    <ul id="nav-links">
      <li><a href="About" class="nav-link">About</a></li>
      <li><a href="login.php" class="nav-link">Login</a></li>
    </ul>
  </nav>
    <h1>Login</h1>
    <form method="get" action="index.php">
        <div class="form-group">           
            <input type="text" id="libraryID" placeholder="Library ID">
            <label for="libraryID" class="form-label">Library ID</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="signup_link">
            No library ID? <a href="#">Request Here</a>
        </div>
    </form>
<?php require_once 'includes/footer.php'; ?>