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
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Please fill in all fields.";
    } else {
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($connection, $query);
        
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            
            if ($password == $user['password']) {
                session_destroy();
                session_start();
                $_SESSION['loggedIn'] = true;
                header("Location: viewBlog.php");
                exit;
            } else {
                $_SESSION['error'] = "Invalid Email or Password.";
            }
        } else {
            $_SESSION['error'] = "Invalid Email or Password.";
        }
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yaseen Alam</title>
        <link rel="icon" href="media/me-blue.png" type="image/x-icon">
        <link rel="stylesheet" href="styles/reset.css">
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/mobile.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Zeyada&display=swap');
        </style>
    </head>
    <body id="grid">
        <header class="name">
            <a class="name2" href="index.php"><strong>YASEEN</strong></a>
        </header>
        <header class="surname">
            <a class="surname2" href="index.php">ALAM</a>
        </header>
        <?php
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['loggedIn'] == true) {
                echo '<nav class="login">
                        <a class="hover-logout" href="logout.php">L</a>
                      </nav>';
            } else {
                echo '<nav class="login">
                        <a class="hover-login" href="login.php">L</a>
                      </nav>';
            }
        } else {
            echo '<nav class="login">
                    <a class="hover-login" href="login.php">L</a>
                  </nav>';
        }
        ?>
        <nav class="about">
            <a class="hover-about" href="about.php">A</a>
        </nav>
        <nav class="projects">
            <a class="hover-projects" href="projects.php">P</a>
        </nav>
        <nav class="contact">
            <a class="hover-contact" href="contact.php">C</a>
        </nav>
        <nav class="blog">
            <a class="hover-blog" href="viewBlog.php">B</a>
        </nav>
        <nav class="skills">
            <a class="hover-skills" href="skills.php">S</a>
        </nav>
        <nav class="education">
            <a class="hover-education" href="education.php">E</a>
        </nav>
        <main class="login-box">
            <div class="container">
                <h2>&nbspLOGIN</h2>
                <br>
                <br>
                <form id="login-form" method="post" action="login.php">
                    <div class="input-group">
                        <input type="email" id="username" name="username" title="Email must be entered" placeholder="Email" autocomplete="email" required>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" title="Password must be entered" placeholder="Password" autocomplete="password" required>
                    </div>
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<p>" . $_SESSION['error'] . "</p>";
                        unset($_SESSION['error']);
                    }
                    ?>
                    <br>
                    <button type="submit">Login</button>
                </form>
            </div>
        </main>
        <figure class="p1">
            <img class="default-image" src="media/p1.png" alt="p1">
            <img class="hover-image" src="media/p1-bw.png" alt="p1 hover">
        </figure>
        <figure class="p2">
            <img class="default-image" src="media/p2.png" alt="p2">
            <img class="hover-image" src="media/p2-bw.png" alt="p2 hover">
        </figure>
        <figure class="p3">
            <img class="default-image" src="media/p3.png" alt="p3">
            <img class="hover-image" src="media/p3-bw.png" alt="p3 hover">
        </figure>
        <footer class="footer">
            <p>
                Copyright © 2024 NSY, Fokusely Inc.
            </p>
        </footer>
    </body>
</html>