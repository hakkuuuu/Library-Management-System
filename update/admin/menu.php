<?php
$title = "menu";

?>

<?php
require('dbconn.php');
?>

<?php
if ($_SESSION['RollNo']) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/menu-navbar.css">
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
                <li><a href="menu.php" class="nav-link">Dashboard</a></li>
                <li><a href="adminindex.php" class="nav-link">Logout</a></li>
            </ul>
        </nav>
        <header id="library-header">
            <h1 class="header-name">BNHS LIBRARY</h1>
        </header>


        <div class="row">
            <div class="span9">
                <nav>
                    <ul id="nav-menu">
                        <li class="nav-menu-links"><a class="menu-link" href="book.php">All books</a></li>
                        <li class="nav-menu-links"><a class="menu-link" href="addbook.php">Add Books</a></li>
                        <li class="nav-menu-links"><a class="menu-link" href="requests.php">Issue Return request</a></li>
                        <li class="nav-menu-links"><a class="menu-link" href="current.php">Currently Issued Books</a></li>
                        <li class="nav-menu-links"><a class="menu-link" href="student.php">Manages Students</a></li>
                    </ul>
                </nav>
                <div class="search-container">
                    <form class="form-horizontal row-fluid" action="book.php" method="post">

                    </form>
                    <br>
                    <div class="card" style="width: 50%;">

                        <div class="card-body">

                            <?php
                            $rollno = $_SESSION['RollNo'];
                            $sql = "select * from LMS.user where RollNo='$rollno'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();

                            $name = $row['Name'];
                            $email = $row['EmailId'];
                            $mobno = $row['MobNo'];
                            ?>
                            <i>
                                <h1 class="card-title">
                                    <center><?php echo $name ?></center>
                                </h1>
                                <br>
                                <p><b>LRN:</b><?php echo $rollno ?></p>
                                <p><b>Email ID: </b><?php echo $email ?></p>
                                <br>
                                <p><b>Mobile number: </b><?php echo $mobno ?></p>
                                </b>
                            </i>

                        </div>
                    </div>
                    <br>
                    </center>
                </div>

            </div>
        </div>
        <!--/.span9-->
        </div>

    </body>


<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>


<?php require_once 'includes/footer.php'; ?>