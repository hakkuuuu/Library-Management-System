<?php
    $title = "Home";
    require_once 'includes/header.php';
    require_once 'database/conn.php'
?>

    <header id="library-header">
        <h1 class="header-name">BNHS LIBRARY</h1>
    </header><br>
        <div class="container">
        <h1 class="book">List of available books</h1><br>
            <ul>
                <li><a href="update.php">Update Book</a></li>
                <li><a href="add.php">Add Book</a></li>
                <li><a href="delete.php">Remove Book</a></li>

            </ul>
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
                <!-- display data from the book list table -->
                <?php
                $con = connect();
                $sql = "SELECT * FROM books";
                $book_lst = $con->query($sql) or die($con->error);
                $row = $book_lst->fetch_assoc();
                do {?>
                    <tr>
                        <td><?php echo $row['book_title']; $row ?></td>
                        <td><?php echo $row['book_subject']; $row ?></td>
                        <td><?php echo $row['book_copies']; $row ?></td>
                        <td><?php echo $row['book_remarks']; $row ?></td>
                    </tr>
                <?php } while ($row = $book_lst->fetch_assoc());?>
                    <tr class="align-bottom">
            </tbody>
            </table>
        </div>
    </div>
    
   

<?php require_once 'includes/footer.php'; ?>