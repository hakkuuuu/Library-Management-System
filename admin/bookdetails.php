<?php
require('dbconn.php');
?>

<?php
if ($_SESSION['RollNo']) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="css/menu-navbar.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>

    <body>
    <nav id="nav-lms">
        <span id="logo">
            <img src="img/logo.png" alt="School Logo" id="logo-img" />
            <span id="logo-name">
                <h2>
                    Banquerohan <br/>
                    National High School
                </h2>
            </span>
        </span>
        <ul id="nav-links">
            <li><a href="menu.php" class="nav-link">Dashboard</a></li>
            <li><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
    </nav>
    <header id="library-header">
        <h1 class="header-name">BNHS LIBRARY</h1>
    </header>
        <div class="wrapper">
            <div class="container">
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
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>Book Details</h3>
                                </div>
                                <div class="module-body">
                                    <?php
                                    $x = $_GET['id'];
                                    $sql = "select * from LMS.book where BookId='$x'";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();

                                    $bookid = $row['BookId'];
                                    $name = $row['Title'];
                                    $publisher = $row['Publisher'];
                                    $year = $row['Year'];
                                    $avail = $row['Availability'];

                                    echo "<b>Book ID:</b> " . $bookid . "<br><br>";
                                    echo "<b>Title:</b> " . $name . "<br><br>";
                                    $sql1 = "select * from LMS.author where BookId='$bookid'";
                                    $result = $conn->query($sql1);

                                    echo "<b>Author:</b> ";
                                    while ($row1 = $result->fetch_assoc()) {
                                        echo $row1['Author'] . "&nbsp;";
                                    }
                                    echo "<br><br>";
                                    echo "<b>Publisher:</b> " . $publisher . "<br><br>";
                                    echo "<b>Year:</b> " . $year . "<br><br>";
                                    echo "<b>Availability:</b> " . $avail . "<br><br>";




                                    ?>

                                    <a href="book.php" class="btn btn-primary">Go Back</a>
                                </div>
                            </div>
                        </div>
                        <!--/.span3-->
                        <!--/.span9-->

                        <!--/.span3-->
                        <!--/.span9-->
                    </div>
                </div>
                <!--/.container-->
            </div>
            <!--/.wrapper-->
            <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
            <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
            <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
            <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
            <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="scripts/common.js" type="text/javascript"></script>

    </body>

    </html>

    
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>


