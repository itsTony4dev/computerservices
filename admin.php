<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true || $_SESSION['role'] !== 1) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="pictures/loginlogo.png">
    <script src="https://kit.fontawesome.com/9d214354b3.js" crossorigin="anonymous"></script>
    <title>CT ZONE</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="admin.php"><i class="fa-solid fa-microchip"></i></a>
                <a href="admin.php">CT ZONE</a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#buy-Build">Buy</a></li>
                    <li><a href="#contact">Repair</a></li>
                    <?php
                    if ($_SESSION['is_logged_in']) {
                        echo '<li><a href="logout.php?page=admin">Logout</a></li>';
                    } else {
                        echo '<li><a href="login.php">Login</a></li>';
                    } ?>
                </ul>
            </div>
        </nav>
    </header>

    <main style="background-image: url('pictures/pc2-backg.webp');">
        <section class="hero">
            <h1>Expert PC Repair & Buy Services</h1>
            <p>Get your PC fixed or buy your favourite specs.</p>
        </section>

        <section class="services" id="repair">
            <h2>PC Services</h2>
            <div class="service-cards">
                <div class="service-card">
                    <img src="pictures/home.webp" alt="Hardware Repair" style="width: 300px; height: 168px" />
                    <h3>Hardware Repair</h3>
                    <p>Our technicians can fix any hardware issues with your PC.</p>
                </div>
                <div class="service-card">
                    <img src="pictures/buildOrBuy.webp" alt="Data Recovery" style="width: 300px; height: 168px" />
                    <h3>PC & PC Parts</h3>
                    <p>Buy a pre-built pc or get your brand new parts with the best prices.</p>
                </div>
                <div class="service-card">
                    <img src="pictures/gpu.webp" alt="Software Repair" style="width: 300px; height: 168px" />
                    <h3>Software Repair</h3>
                    <p>
                        We can resolve software-related problems and optimize your system.
                    </p>
                </div>
            </div>
        </section>

        <section class="buy-Build" id="buy-Build">
            <h2>PCs and Parts</h2>
            <div class="buy-Build-cards">
                <div class="buy-Build-card">
                    <img src="pictures/R.jpeg" alt="Buy PC" style="width: 300px; height: 168px" />
                    <h3>Pre-built PC</h3>
                    <p>Browse our selection of pre-built PCs at affordable prices.</p>
                    <button class="btn"><a href="adminBuy.php"> PCs</a></button>
                </div>
                <div class="buy-Build-card">
                    <img src="pictures/Build.jpeg" alt="Build PC" />
                    <h3>Available Parts</h3>
                    <p>Build your PC or get your parts at the best prices.</p>
                    <button class="btn"><a href="adminBuild.php"> Parts</a></button>
                </div>
            </div>
        </section>


    </main>
    <footer>
        <p>&copy; 2024 CT ZONE Repair & Buy. All rights reserved.</p>
    </footer>
</body>

</html>