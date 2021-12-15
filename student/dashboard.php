<?php
require('dbconn.php');
require_once 'includes\header.php';
?>


<!DOCTYPE html>
<html lang="en">
    <header id="library-header">
        <h1 class="header-name">BNHS LIBRARY</h1>
    </header>
                        <nav>
                            <ul id="nav-menu"id="nav-menu">
                                <li class="nav-menu-links"><a class="menu-link" href="index.php">Home
                                </a></li>
                                <li class="nav-menu-links"><a class="menu-link" href="book.php">All Books </a></li>
                                <li class="nav-menu-links"><a class="menu-link" href="history.php">Borrowed Books </a></li>
                                <li class="nav-menu-links"><a class="menu-link" href="current.php">Issued Books </a></li>
                            </ul>
                            <br>
                        </nav>
        
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
    </body>
<?php require_once 'includes\footer.php'; ?>