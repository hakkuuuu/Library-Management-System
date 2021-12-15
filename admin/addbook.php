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
        <link rel="stylesheet" href="css/addbook.css">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                        Banquerohan <br />
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
                                    <h3 class="h3">Add Book</h3>
                                </div>
                                <div class="module-body">
                                    <br>
                                    <form class="form-horizontal row-fluid" action="addbook.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Title"><b>Book Title</b></label>
                                            <div class="mb-3">
                                                <input type="text" id="title" name="title" placeholder="Title" class="span8" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="control-group">
                                            <label class="control-label" for="Author"><b>Author</b></label>
                                            <div class="mb-3">
                                                <input type="text" id="author1" name="author1" class="span8" placeholder="Author" required>
                                                <br>
                                                <input type="text" id="author2" name="author2" class="span8">
                                                <br>
                                                <input type="text" id="author3" name="author3" class="span8">

                                            </div>
                                        </div>
                                        <br>
                                        <div class="control-group">
                                            <label class="control-label" for="Publisher"><b>Publisher</b></label>
                                            <div class="mb-3">
                                                <input type="text" id="publisher" name="publisher" placeholder="Publisher" class="span8" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="control-group">
                                            <label class="control-label" for="Year"><b>Year</b></label>
                                            <div class="mb-3">
                                                <input type="text" id="year" name="year" placeholder="Year" class="span8" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="control-group">
                                            <label class="control-label" for="Availability"><b>Number of Copies</b></label>
                                            <div class="mb-3">
                                                <input type="text" id="availability" name="availability" placeholder="Number of Copies" class="span8" required>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <div class="mb-3">
                                                <button type="submit" name="submit" class="btn btn-primary">Add Book</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                        <!--/.content-->
                    </div>

                </div>
            </div>
            <!--/.container-->

        </div>


        <?php require_once 'includes/footer.php'; ?>
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
            $title = $_POST['title'];
            $author1 = $_POST['author1'];
            $author2 = $_POST['author2'];
            $author3 = $_POST['author3'];
            $publisher = $_POST['publisher'];
            $year = $_POST['year'];
            $availability = $_POST['availability'];

            $sql1 = "insert into LMS.book (Title,Publisher,Year,Availability) values ('$title','$publisher','$year','$availability')";

            if ($conn->query($sql1) === TRUE) {
                $sql2 = "select max(BookId) as x from LMS.book";
                $result = $conn->query($sql2);
                $row = $result->fetch_assoc();
                $x = $row['x'];
                $sql3 = "insert into LMS.author values ('$x','$author1')";
                $result = $conn->query($sql3);
                if (!empty($author2)) {
                    $sql4 = "insert into LMS.author values('$x','$author2')";
                    $result = $conn->query($sql4);
                }
                if (!empty($author3)) {
                    $sql5 = "insert into LMS.author values('$x','$author3')";
                    $result = $conn->query($sql5);
                }

                echo "<script type='text/javascript'>alert('Success')</script>";
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