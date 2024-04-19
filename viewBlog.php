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

if (!isset($_SESSION['loggedIn'])) {
    $query = "SELECT COUNT(*) as count FROM blogs";
    $result = $connection->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        
        if (!$row['count'] > 0) {
            header("Location: login.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yaseen Alam</title>
        <script src="scripts/viewBlog.js" defer></script>
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
                echo'<nav class="login">
                        <a class="hover-logout" href="logout.php">L</a>
                    </nav>';
            } else {
                echo'<nav class="login">
                        <a class="hover-login" href="login.php">L</a>
                    </nav>';
            }
        } else {
            echo'<nav class="login">
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
        <?php
        $query = "SELECT id, title, content, created_at FROM blogs";
        $result = $connection->query($query);

        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['loggedIn'] == true) {
                echo'<div class="blog-box">
                        <div class="containerBlog">
                            <h2>&nbsp;BLOGS</h2>
                            <br>
                            <form id="blog-form" class="blog-form" method="post" action="addPost.php" onsubmit="return false;">
                                <h3>ADD BLOG</h3> 
                                <div class="input-group2">
                                    <input type="text" id="title" name="title" placeholder="Title"><br>
                                </div>
                                <div class="input-group2">
                                    <textarea id="content" name="content" rows="6" cols="90" placeholder="Content..."></textarea>
                                </div>
                                <br>
                                <div class="button-container">
                                    <button type="submit" id="submit-button">Submit</button>
                                    <button type="button" id="clear-button">Clear</button>
                                    <button type="button" id="preview-button">Preview</button>
                                </div>
                            </form>
                            <form class="month-form-container" id="month-form" method="post" action="selectMonth.php">
                                <label for="month-select">Sort By Month:</label>
                                <select id="month-select" name="month-select">
                                    <option value="">Select...</option>
                                    <option value="0">All</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <button type="submit">Enter</button>
                            </form>';
            }
        } else {
            echo'<div class="blog-box">
                    <div class="containerBlog">
                       <h2>&nbsp;BLOGS</h2>
                       <form class="month-form-container" id="month-form" method="post" action="selectMonth.php">
                            <label for="month-select">Sort By Month:</label>
                            <select id="month-select" name="month-select">
                                <option value="">Select...</option>
                                <option value="0">All</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <button type="submit">Enter</button>
                        </form>';
        }

        if (isset($_SESSION['month'])) {
            if (!$_SESSION['month'] == 0) {
                $month = $_SESSION['month'];
                $query = "SELECT * FROM blogs WHERE MONTH(created_at) = $month";
                $result = $connection->query($query);

                if ($result) {
                    $blogs = []; // Initialize an empty array to store blogs
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Store each row in the blogs array
                            $blogs[] = $row;
                        }

                        // Sort the blogs array by created_at using bubble sort
                        for ($i = 0; $i < count($blogs); $i++) {
                            for ($j = 0; $j < count($blogs) - $i - 1; $j++) {
                                // Convert date strings to timestamps for comparison
                                $time1 = strtotime($blogs[$j]['created_at']);
                                $time2 = strtotime($blogs[$j + 1]['created_at']);

                                // Swap if the current blog's creation time is less than the next one
                                if ($time1 < $time2) {
                                    $temp = $blogs[$j];
                                    $blogs[$j] = $blogs[$j + 1];
                                    $blogs[$j + 1] = $temp;
                                }
                            }
                        }

                        echo '<div class="viewBlog">';
                        foreach ($blogs as $blog) {
                            $dateTime = new DateTime($blog['created_at']);
                            $formattedTime = $dateTime->format('H:i | d/m/y');

                            echo '<article class="viewBlog-box">
                                    <h3>' . $blog['title'] . '</h3>
                                    <p>' . nl2br($blog['content']) . '</p>
                                    <p class="time"> <time>' . $formattedTime . '</time></p>
                                </article>';
                        }
                        echo '</div>';
                    } else {
                        echo '<h3> NO BLOGS FOUND </h3>';
                    }
                } else {
                    echo 'Error: ' . $query . '<br>' . $connection->error;
                }
            } else {
                if ($result) {
                    $blogs = []; // Initialize an empty array to store blogs
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Store each row in the blogs array
                            $blogs[] = $row;
                        }

                        // Sort the blogs array by created_at using bubble sort
                        for ($i = 0; $i < count($blogs); $i++) {
                            for ($j = 0; $j < count($blogs) - $i - 1; $j++) {
                                // Convert date strings to timestamps for comparison
                                $time1 = strtotime($blogs[$j]['created_at']);
                                $time2 = strtotime($blogs[$j + 1]['created_at']);

                                // Swap if the current blog's creation time is less than the next one
                                if ($time1 < $time2) {
                                    $temp = $blogs[$j];
                                    $blogs[$j] = $blogs[$j + 1];
                                    $blogs[$j + 1] = $temp;
                                }
                            }
                        }

                        echo '<div class="viewBlog">';
                        foreach ($blogs as $blog) {
                            $dateTime = new DateTime($blog['created_at']);
                            $formattedTime = $dateTime->format('H:i | d/m/y');

                            echo '<article class="viewBlog-box">
                                    <h3>' . $blog['title'] . '</h3>
                                    <p>' . nl2br($blog['content']) . '</p>
                                    <p class="time">' . $formattedTime . '</p>
                                </article>';
                        }
                        echo '</div>';
                    } else {
                        echo '<h3> NO BLOGS FOUND </h3>';
                    }
                } else {
                    echo 'Error: ' . $query . '<br>' . $connection->error;
                }
            }

            
        } else {
            if ($result) {
                $blogs = []; // Initialize an empty array to store blogs
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Store each row in the blogs array
                        $blogs[] = $row;
                    }

                    // Sort the blogs array by created_at using bubble sort
                    for ($i = 0; $i < count($blogs); $i++) {
                        for ($j = 0; $j < count($blogs) - $i - 1; $j++) {
                            // Convert date strings to timestamps for comparison
                            $time1 = strtotime($blogs[$j]['created_at']);
                            $time2 = strtotime($blogs[$j + 1]['created_at']);

                            // Swap if the current blog's creation time is less than the next one
                            if ($time1 < $time2) {
                                $temp = $blogs[$j];
                                $blogs[$j] = $blogs[$j + 1];
                                $blogs[$j + 1] = $temp;
                            }
                        }
                    }

                    echo '<div class="viewBlog">';
                    foreach ($blogs as $blog) {
                        $dateTime = new DateTime($blog['created_at']);
                        $formattedTime = $dateTime->format('H:i | d/m/y');

                        echo '<article class="viewBlog-box">
                                <h3>' . $blog['title'] . '</h3>
                                <p>' . nl2br($blog['content']) . '</p>
                                <p class="time"><time>' . $formattedTime . '</time></p>
                            </article>';
                    }
                    echo '</div>';
                } else {
                    echo '<h3> NO BLOGS FOUND </h3>';
                }
            } else {
                echo 'Error: ' . $query . '<br>' . $connection->error;
            }
        }

        echo'    </div>' .
            '</div>';
        ?>
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