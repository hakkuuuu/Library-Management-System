<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/style.css" />
  <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    rel="stylesheet"
  />
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
        <img src="css/logo.png" alt="School Logo" id="logo-img" />
        <span id="logo-name">
          <h2>Tabaco National <br />High School</h2>
        </span>
      </span>
      <ul id="nav-links">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="about.php" class="nav-link">About</a></li>
        <li><a href="login.php" class="nav-link">Login</a></li>
      </ul>
    </nav>

    <!-- <script src="navbar.js"></script>
    for sticky navbar. use after flexbox is fixed -->

    <header id="library-header">
      <h1 class="header-name">LIBRARY MANAGEMENT</h1>
      <h1 class="header-name">SYSTEM</h1>
    </header>
    <div
      id="carousel"
      class="carousel slide"
      data-ride="carousel"
      data-interval="2000"
    >
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="/images/first.jpg"
            alt="Second slide"
          />
        </div>

        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="/images/second.jpg"
            alt="First slide"
          />
        </div>

        <div class="carousel-item" id="image2">
          <img
            class="d-block w-100"
            src="/images/third.jpg"
            alt="Third slide"
          />
        </div>
      </div>

      <a
        class="carousel-control-prev"
        href="#carousel"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carousel"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div id="getting-started">
      <h1 class="body-headings">WELCOME TO LMS</h1>
      <h3 class="body-subheadings">GET STARTED</h3>
      <div id="how-to">
        <section class="how-to-sections">
          <h3>HOW TO</h3>
          <a href="login.php" class="how-to-links">
            <h3>Request a</h3>
            <h3>Book</h3>
            <p>Learn how to request a book from the library!</p>
          </a>
        </section>
        <section class="how-to-sections">
          <h3>HOW TO</h3>
          <a href="login.php" class="how-to-links">
            <h3>Return a</h3>
            <h3>Book</h3>
            <p>Learn how to return a book from the library!</p>
          </a>
        </section>
        <section class="how-to-sections">
          <h3>MORE</h3>
          <a href="login.php" class="how-to-links">
            <h3>Library</h3>
            <h3>Hours</h3>
            <p>Do know when to go to the library!</p>
          </a>
        </section>
      </div>
    </div>
    <div id="books">
      <h1 class="body-headings">BOOKS</h1>
      <h3 class="body-subheadings">SEE WHAT INTERESTS YOU</h3>
      <div id="books-container"></div>
    </div>
  
  <?php require_once 'includes/footer.php'; ?>
</html>