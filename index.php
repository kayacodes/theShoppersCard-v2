<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Shopper's Card</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>
<body>
    <header id="home">
        <?php
        session_start();
            if(isset($_SESSION['id'])){
                include 'Snippets/loggedInNav.php'; 
            } else {
                include 'Snippets/nav.php';
            }
        ?>
        
        <div class="landing-text">
            <h1>The Shopper's Card</h1>
            <h2>Convenience At Your Finger Tips</h2>
        </div>
    </header>

    <div class="about" id="about" data-aos="fade-up" data-aos-delay="300">
        <h2>About Us</h2>
        <div class="about-content">
            <p>We are proud to present The Shopper's Card. A new and efficient way to access all the reward programs you've registered for with one simple card. It's the best way to  give your wallet some breathing space while still being able to score on the best deals and promotions.</p>
            <h3>Benefits</h3>
            <ul>
                <li>No hassle to sign up for multiple loyalty programs</li>
                <li>Environmentally Friendly</li>
                <li>Easy accessibility to view collected points from various companies.</li>
            </ul>
            <h3>Associated Companies</h3>
            <div class="companies">
                <p>The Shopper's Card currently supports these major companies.</p>
                <img class="companies-img" id="ms" src="Images/m&s.png" alt="Marks & Spencer Logo"  data-aos="fade-in" data-aos-delay="300">
                <img class="companies-img" id="hm" src="Images/H&M.png" alt="H$M logo"  data-aos="fade-in" data-aos-delay="600">
                <img class="companies-img" id="amz" src="Images/amazon.png" alt="Amazon Logo"  data-aos="fade-in" data-aos-delay="900">
                <img class="companies-img" id="cna" src="Images/CNA.png" alt="CNA logo"  data-aos="fade-in" data-aos-delay="1200">
                <img class="companies-img" id="ww" src="Images/Woolworths-Logo.png" alt="Woolworths Logo"  data-aos="fade-in" data-aos-delay="1500">
            </div>

        </div>
    </div>

    <?php include 'Snippets/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="Javascript/main.js"></script>
</body>
</html>