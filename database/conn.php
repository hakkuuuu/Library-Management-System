<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "lmsdb";

    $con = new mysqli($host, $user, $pass, $db);

    if($con->connect_error){
        echo $con->connect_error;
    }    
    $sql = "SELECT * FROM books";
    $book_lst = $con->query($sql) or die($con->error);
    $row = $book_lst->fetch_assoc();

    // do {
    //     echo $row['book_title']." ". $row['book_subject']." ". $row['book_copies']." ". $row['book_remarks']."<br/>";
    // } while ($row = $book_lst->fetch_assoc());
     
?>
