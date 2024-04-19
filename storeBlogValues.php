<?php
session_start();

$_SESSION['title'] = $_GET['title'];
$_SESSION['content'] = $_GET['content'];
$_SESSION['currentDate'] = $_GET['currentDate'];

$_SESSION['previewing'] = true;

header("Location: previewBlog.php");
?>