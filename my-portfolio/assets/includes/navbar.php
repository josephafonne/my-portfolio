<header>
    <!-- Navbar -->
    <img src="assets/images/logo.png" alt="Menye" class="logo">
        <nav>
            <ul class="navigation">
                <li><a href="index.php" class="nav-link <?php if($page == "home"){ echo 'active'; } ?>">Home</a></li>
                <li><a href="about.php" class="nav-link <?php if($page == "about"){ echo 'active'; } ?>">About</a></li>
                <li><a href="skills.php" class="nav-link <?php if($page == "skills"){ echo 'active'; } ?>">Skills</a></li>
                <li><a href="projects.php" class="nav-link <?php if($page == "projects"){ echo 'active'; } ?>">Projects</a></li>
            </ul>
        </nav>
        <a class="c2a" id="contactbtn" onclick="showContactInfo()"><button>Contact</button></a>
    </header>