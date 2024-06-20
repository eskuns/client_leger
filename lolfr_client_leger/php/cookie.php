<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<script>console.log('Debug Objects: " . $_SESSION['loggedin'] . "' );</script>";
} else {
    header("Location: http://localhost/lolbackup/index.php");
}
?>
