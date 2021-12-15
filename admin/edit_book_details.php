<?php
ob_start();
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
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/menu-navbar.css" type="text/css" />
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
            <li><a href="adminindex.php" class="nav-link">Logout</a></li>
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
                        <div class="module">
                            <div class="module-head">
                                <h3>Update Book Details</h3>
                            </div>
                            <div class="module-body">

                                <?php
                                $bookid = $_GET['id'];
                                $sql = "select * from LMS.book where Bookid='$bookid'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $name = $row['Title'];
                                $publisher = $row['Publisher'];
                                $year = $row['Year'];
                                $avail = $row['Availability'];


                                ?>

                                <br>
                                <form class="form-horizontal row-fluid" action="edit_book_details.php?id=<?php echo $bookid ?>" method="post">
                                    <div class="control-group">
                                        <b>
                                            <label class="control-label" for="Title">Book Title:</label></b>
                                        <div class="controls">
                                            <input type="text" id="Title" name="Title" value="<?php echo $name ?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <b>
                                            <label class="control-label" for="Publisher">Publisher:</label></b>
                                        <div class="controls">
                                            <input type="text" id="Publisher" name="Publisher" value="<?php echo $publisher ?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <b>
                                            <label class="control-label" for="Year">Year:</label></b>
                                        <div class="controls">
                                            <input type="text" id="Year" name="Year" value="<?php echo $year ?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <b>
                                            <label class="control-label" for="Availability">Availability:</label></b>
                                        <div class="controls">
                                            <input type="text" id="Availability" name="Availability" value="<?php echo $avail ?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" class="btn">Update Details</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

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

        <?php
        if (isset($_POST['submit'])) {
            $bookid = $_GET['id'];
            $name = $_POST['Title'];
            $publisher = $_POST['Publisher'];
            $year = $_POST['Year'];
            $avail = $_POST['Availability'];

            $sql1 = "update LMS.book set Title='$name', Publisher='$publisher', Year='$year', Availability='$avail' where BookId='$bookid'";



            if ($conn->query($sql1) === TRUE) {
                echo "<script type='text/javascript'>alert('Success')</script>";
                header("Refresh:0.01; url=book.php", true, 303);
            } else { //echo $conn->error;
                echo "<script type='text/javascript'>alert('Error')</script>";
            }
        }
        ?>

    </body>

    </html>


<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>
<?php require_once 'includes/footer.php'; ?>