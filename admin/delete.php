<?php
    $title = "Home";
    require_once 'includes/header.php';

    if (isset($_POST['book_Id'])) {
      $user_id = $_POST['book_Id'];
      $sql = "DELETE FROM `users` WHERE `id`='$book_Id'";
      
      $result = $conn->query($sql);
    
      if ($result == TRUE) {
        echo "Record deleted successfully.";
      }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
      }
    }
?>
    <header id="library-header">
      <h1 class="header-name">BNHS LIBRARY</h1>
    </header>


<?php require_once 'includes/footer.php'; ?>