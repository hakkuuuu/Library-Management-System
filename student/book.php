<?php
require('dbconn.php');
require_once 'includes\header.php';
?>

<?php 
if ($_SESSION['RollNo']) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css" type="text/css" />
    <link rel="stylesheet" href="css\menu-navbar.css" type="text/css" />
</head>
<header id="library-header">
    <h1 class="header-name">BNHS LIBRARY</h1>
    </header>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span9">
                    <nav>
                        <ul id="nav-menu"id="nav-menu">
                            <li class="nav-menu-links"><a class="menu-link" href="index.php">Home</a></li>
                            <li class="nav-menu-links"><a class="menu-link" href="book.php">All Books </a></li>
                            <li class="nav-menu-links"><a class="menu-link" href="history.php">Borrowed Books </a></li>
                            <li class="nav-menu-links"><a class="menu-link" href="current.php">Issued Books </a></li>
                        </ul>
                    </nav>
                        <div class="search-container">
                            <form class="form-horizontal row-fluid" action="book.php" method="post">
                                <div class="control-group">
                                    <label class="control-label" for="Search"><b></b></label>
                                        <div class="controls">
                                            <input type="text" id="title" name="title" placeholder="Enter Name/ID of Book" class="span8" required>
                                            <button type="submit" name="submit"class="btn btn-primary">Search</button>
                                        </div>
                                </div>
                            </form>
                            <br>
                                <?php
                                    if(isset($_POST['submit']))
                                    {$s=$_POST['title'];
                                        $sql="select * from LMS.book where BookId='$s' or Title like '%$s%'";
                                    }
                                    else
                                        $sql="select * from LMS.book order by Availability DESC";

                                        $result=$conn->query($sql);
                                        $rowcount=mysqli_num_rows($result);

                                    if(!($rowcount))
                                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {?>
                            <table class="table" id = "tables">
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
                            while($row=$result->fetch_assoc())
                            {
                                $bookid=$row['BookId'];
                                $name=$row['Title'];
                                $avail=$row['Availability'];
                            ?>
                                    <tr>
                                      <td><?php echo $bookid ?></td>
                                      <td><?php echo $name ?></td>
                                      <td><b><?php 
                                           if($avail > 0)
                                              echo "<font color=\"green\">AVAILABLE</font>";
                                            else
                                            	echo "<font color=\"red\">NOT AVAILABLE</font>";

                                                 ?>
                                                 	
                                                 </b></td>
                                      <td><center><a href="bookdetails.php?id=<?php echo $bookid; ?>" class="btn btn-primary">Details</a>
                                      	<?php
                                      	if($avail > 0)
                                      		echo "<a href=\"issue_request.php?id=".$bookid."\" class=\"btn btn-success\">Issue</a>";
                                        ?>
                                        </center></td>
                                    </tr>
                               <?php }} ?>
                               </tbody>
                                </table>
                            </div>
                        </div>        
                    <!--/.span3-->
                    <!--/.span9-->
                </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
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

<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>

<?php require_once 'includes\footer.php'; ?>