<?php 

include("data/functions.php");

$page = "projects";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS styles -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/icon.png" />
    <title>Joseph Menye Afonne | Developer</title>
</head>
<body>
<?php include('assets/includes/navbar.php') ?>

    <!-- Main Section -->
    <div class="hero-about">
        <div class="hero-text">
            <h1 class="splash">Projects</h1><br>
            <p>Application of the skills and proof of work.</p><br>
        </div>
    </div><br><hr>

    <!-- Main article -->
    <article class="aboutme">
        <div class="about">
        <?php getProjects(); ?>
        </div>
    </article>
    
    <!-- Footer Section -->
    <footer>
        <br>
        <p class="footer-text">&copy; Menye 2023.</p>
    </footer>

    <!-- Website scripts -->
    <script src="assets/js/app.js"></script>

    <!-- Icons scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>