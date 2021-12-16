<?php
$title = "Home";
require_once 'includes\header.php';
?>

<header id="library-header">
  <h1 class="header-name">BNHS LIBRARY</h1>
</header>

<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/crsl1.jpg" alt="Second slide" />
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/crsl2.jpg" alt="First slide" />
    </div>

    <div class="carousel-item" id="image2">
      <img class="d-block w-100" src="img/crsl3.jpg" alt="Third slide" />
    </div>
  </div>

  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>

<div id="getting-started">
      <h1 class="body-headings">WELCOME TO LMS</h1>
      <h3 class="body-subheadings">GET STARTED</h3>
      <div id="how-to">
        <section class="how-to-sections">
          <h3>HOW TO</h3>
          <a href="#request" class="how-to-links">
            <h3>Request a</h3>
            <h3>Book</h3>
            <p>Learn how to request a book from the library!</p>
          </a>
        </section>
        <section class="how-to-sections">
          <h3>HOW TO</h3>
          <a href="#return" class="how-to-links">
            <h3>Return a</h3>
            <h3>Book</h3>
            <p>Learn how to return a book from the library!</p>
          </a>
        </section>
        <section class="how-to-sections">
          <h3>MORE</h3>
          <a href="#more" class="how-to-links">
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

<?php require_once 'includes\footer.php'; ?>