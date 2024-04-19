<?php
session_start();

if (isset($_SESSION['loggedIn'])) {
    if ($_SESSION['loggedIn'] == true) {
        session_destroy();
    }
}

header('Location: index.php');
?>