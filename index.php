<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infoma - Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <img src="InfomaLogo.png" alt="Infoma Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="category.php">Category</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </nav>
            <div class="user-info">
                <span>Mr.Prince240</span>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <input type="text" placeholder="Find something...">
            <h1>Help you to get information</h1>
            <p>Infoma is here to find information for students on various aspects...</p>
        </section>
        <section class="categories">
            <h2>Select Category</h2>
            <ul>
                <li><a href="category.php?category=vehicles">Vehicles</a></li>
                <li><a href="category.php?category=public_spaces">Public Spaces</a></li>
                <li><a href="category.php?category=sports_field">Sports Field</a></li>
                <li><a href="category.php?category=campus_activities">Campus Activities</a></li>
                <li><a href="category.php?category=devices">Devices</a></li>
                <li><a href="category.php?category=residences">Residences</a></li>
            </ul>
        </section>
    </main>
    <footer>
        <p>© 2024 Infoma</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
