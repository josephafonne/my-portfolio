<?php $page = "home"; 
include ('data/functions.php');
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

    <?php getMessages(); ?>
</head>
<body>
<?php include('assets/includes/navbar.php') ?>
    <!-- Main Section -->
    <div class="hero">
        <div class="hero-text">
            <h1 class="splash">Joseph Menye</h1><br>
            <p>Full Stack Developer & Programmer</p><br>
            <a href="skills.php"><button>View Skills</button><br></a>
        </div>
    </div>
    
    <!-- Footer Section -->
    <footer>
        <p class="footer-text">&copy; Menye 2023.</p>
    </footer>   

    <!-- Website scripts -->
    <script src="assets/js/app.js"></script>

    <!-- Icons scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>