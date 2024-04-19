<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = $_POST['month-select'];
    $_SESSION['month'] = $month;
}

header("Location: viewBlog.php");
?>