<?php 

include("data/functions.php");

$page = "contact"; 


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
            <h1 class="splash">Send a message!</h1><br>
        </div>
    </div><br><hr>

    <!-- Main article -->
    <div class="contact">
    <h1>Contact</h1><br><br>
        <form method="post" class="contactForm" action="contact.php">
            <label for="name">Full name: </label>
            <input type="text" name="name" class="forminput" placeholder="Your name here"><br><br>

            <label for="email">E-mail: </label>
            <input type="email" name="email" class="forminput" placeholder="username@example.com" maxlength="255"><br><br>

            <label for="subject">Subject: </label>
            <input type="text" name="subject" class="forminput" placeholder="Message subject" maxlength="100"><br><br>

            <label for="message">Message: </label>
            <textarea id="msg" name="message" placeholder="Write something... (You can increase the height of this field)" class="forminput" maxlength="5000"></textarea><br>
            <br>

            <input type="submit" value="Submit" class="button" name="submit">
        </form>
</div>
    
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