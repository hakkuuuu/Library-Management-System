<?php
    $title = "Home";
    require_once 'includes/header.php';
    require_once 'database/conn.php';

    $con = connect();
    if(isset($_POST['submit'])){

        $title = $_POST['booktitle'];
        $sub = $_POST['subject'];
        $copies = $_POST['copies'];
        $rem = $_POST['remarks'];

        $sql = "INSERT INTO `books`(`book_title`, `book_subject`, `book_copies`, `book_remarks`) 
        VALUES ('$title','$sub','$copies','$rem')";
        $con->query($sql) or die($con->error);

        echo header("Location: issue.php");
    }

?>
    <header id="library-header">
      <h1 class="header-name">BNHS LIBRARY</h1>
    </header>
    <br>
    <div class="container">
    <form action="" method="post">
        <label>Book Title</label>
        <input type="text" name="booktitle">
        <label>Subject</label>
        <input type="text" name="subject">
        <label>Copies</label>
        <input type="text" name="copies">
        <label>Remarks</label>
        <input type="text" name="remarks">

        <input type="submit" name="submit" value="submit">
   </form>
    </div>
   

<?php require_once 'includes/footer.php'; ?>