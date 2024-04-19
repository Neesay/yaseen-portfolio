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
        session_start();

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
        <main class="projects-box">
            <div class="container">
                <h2>&nbspPROJECTS</h2>
                <br>
                <br>
                <h4>The Rapid Advancement in Computer Science and the Tech Revolution with Machine Learning: An Experience</h4>
                <embed src="media/YA-NRP-CS-Machine Learning.pdf" type="application/pdf">
                <br>
                <br>
                <h4>Hyperlink: Inverter Testing</h4>
                <embed src="media/Hyperlink Inverter Testing.pdf" type="application/pdf">
                <br>
                <br>
                <h4>Hyperlink: Inverter Troubleshooting</h4>
                <embed src="media/Inverter Troubleshooting by Yaseen.pdf" type="application/pdf">
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