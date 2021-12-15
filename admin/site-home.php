<?php
$title = "site-home";

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/browse.css">
  <link rel="stylesheet" href="css/my-book.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Library - <?php echo $title; ?></title>
</head>

<body>

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
      <li><a href="menu.php">Dashboard</a></li>
      <li><a href="index.php" class="nav-link">Logout</a></li>
    </ul>
  </nav>
  <header id="library-header">
    <h1 class="header-name">BNHS LIBRARY</h1>
  </header>



  <?php require_once 'includes/footer.php'; ?>