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

<?php require_once 'includes\footer.php'; ?>