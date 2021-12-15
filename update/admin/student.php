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
                    <div class="search-container">
                        <form class="form-horizontal row-fluid" action="student.php" method="post">
                            <div class="control-group">
                                <label class="control-label" for="Search"><b></b></label>
                                <div class="controls">
                                    <input type="text" id="title" name="title" placeholder="Enter Name/Roll No of Student" class="span8" required>
                                    <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <?php
                        if (isset($_POST['submit'])) {
                            $s = $_POST['title'];
                            $sql = "select * from LMS.user where (RollNo='$s' or Name like '%$s%') and RollNo<>'ADMIN'";
                        } else
                            $sql = "select * from LMS.user where RollNo<>'ADMIN'";

                        $result = $conn->query($sql);
                        $rowcount = mysqli_num_rows($result);

                        if (!($rowcount))
                            echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                        else {


                        ?>
                            <table class="table" id="tables">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll No.</th>
                                        <th>Email id</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    //$result=$conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {

                                        $email = $row['EmailId'];
                                        $name = $row['Name'];
                                        $rollno = $row['RollNo'];
                                    ?>
                                        <tr>
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $rollno ?></td>
                                            <td><?php echo $email ?></td>
                                            <td>
                                                <center>
                                                    <a href="studentdetails.php?id=<?php echo $rollno; ?>" class="btn btn-success">Details</a>
                                                    <!--a href="remove_student.php?id=<?php echo $rollno; ?>" class="btn btn-danger">Remove</a-->
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


    </body>

    </html>


<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>
<?php require_once 'includes/footer.php'; ?>