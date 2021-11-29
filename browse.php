<?php
    $title = "Browse";
    require_once 'includes/header.php';
    require_once 'database/conn.php';
?>

  <!-- <div id="browsing">
  <ul id="browse-opts">
          <li><a href="cat.php" class="browse-opt">Categories</a></li>
          <li><a href="#link" class="browse-opt">A-Z</a></li>
        </ul>
  </div> -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
  <div class="container">
  <div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Subject</th>
        <th>Copies</th>
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody>
        <?php do {  ?>
        <tr>
            <td><?php echo $row['book_title']; $row ?></td>
            <td><?php echo $row['book_subject']; $row ?></td>
            <td><?php echo $row['book_copies']; $row ?></td>
            <td><?php echo $row['book_remarks']; $row ?></td>
        </tr>
        <?php } while ($row = $book_lst->fetch_assoc()); ?>
      <tr class="align-bottom">
       
    </tbody>
  </table>
</div>
  </div>

<?php require_once 'includes/footer.php'; ?>