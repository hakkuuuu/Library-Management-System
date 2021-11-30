<?php
    $title = "Browse";
    require_once 'includes/header.php';
    require_once 'database/conn.php';
?>

  <div id="browsing">
  <ul id="browse-opts">
          <li><a href="cat.php" class="browse-opt">Categories</a></li>
          <li><a href="#link" class="browse-opt">A-Z</a></li>
        </ul>
  </div> 

  
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