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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <li><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
    </nav>
    <header id="library-header">
        <h1 class="header-name">BNHS LIBRARY</h1>
    </header>
        <!-- /navbar -->
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
                        <div class="search-container">
                            <form class="form-horizontal row-fluid" action="book.php" method="post">
                                <div class="control-group">
                                    <label class="control-label" for="Search"><b></b></label>
                                    <div class="controls">
                                        <input type="text" id="title" name="title" placeholder="Enter Name/ID of Book" class="span8" required>
                                        <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                        <br>
                        <?php
                        if (isset($_POST['submit'])) {
                            $s = $_POST['title'];
                            $sql = "select * from LMS.book where BookId='$s' or Title like '%$s%'";
                        } else
                            $sql = "select * from LMS.book";

                        $result = $conn->query($sql);
                        $rowcount = mysqli_num_rows($result);

                        if (!($rowcount))
                            echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                        else {


                        ?>
                            <table class="table" id="tables">
                                <thead>
                                    <tr>
                                        <th>Book id</th>
                                        <th>Book name</th>
                                        <th>Availability</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    //$result=$conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $bookid = $row['BookId'];
                                        $name = $row['Title'];
                                        $avail = $row['Availability'];


                                    ?>
                                        <tr>
                                            <td><?php echo $bookid ?></td>
                                            <td><?php echo $name ?></td>
                                            <td><b><?php echo $avail ?></b></td>
                                            <td>
                                                <center>
                                                    <a href="bookdetails.php?id=<?php echo $bookid; ?>" class="btn btn-primary">Details</a>
                                                    <a href="edit_book_details.php?id=<?php echo $bookid; ?>" class="btn btn-success">Edit</a>
                                                </center>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                                </tbody>
                            </table>
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

    </body>

    </html>


<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>
<?php require_once 'includes/footer.php'; ?>