<?php
session_start();

$host = "localhost";
$root_username = "root";
$root_password = "";
$database = "phase2";

$connection = mysqli_connect($host, $root_username, $root_password, $database);

if (!$connection) {
    die("Connection has been failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $content = str_replace("<br />\r\n", "\\n", $content);
    
    if (empty($title) || empty($content)) {
        $_SESSION['error'] = "Please fill in all fields.";
    } else {
        $query = "INSERT INTO blogs (title, content) VALUES (?, ?)";
        
        $statement = $connection->prepare($query);
        $statement->bind_param("ss", $title, $content);
        
        if ($statement->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
        
        $statement->close();
        $connection->close();

        header("Location: viewBlog.php");
    }
}
?>