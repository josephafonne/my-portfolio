<?php $page = "about"; ?>
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
            <h1 class="splash">About me</h1><br>
            <p>Personal information, background, and more</p><br>
        </div>
    </div><br><hr>

    <!-- Main article -->
    <article class="aboutme">
        <div class="about">
            <h1>Upbringing</h1>
            <p>I was born in Tukombo, Nkhata Bay. I grew up in the lakeshore with my family.</p>
            <br>
            <h1>Education</h1>
            <p>I attended Tukombo Primary and secondary schools, and that is where i took my MSCE.</p>
            <br>
            <h1>Experience</h1>
            <p>I finished school 3 years earlier than normal, so I had time to learn a few programming languages like Python and HTML.</p>
            <br>
            <h1>University</h1>
            <p>I was accepted into Mzuzu university, and I started in 2022. I am currently a second year student studying <abbr title="Bsc. Information and communication technology">BICT</abbr>.</p>
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