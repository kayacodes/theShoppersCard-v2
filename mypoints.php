<?php
    include 'PHP_Includes/displayPoints.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Points | The Shopper's Card</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/signup.css">
</head>

<body>
    <header class="mypoints-header">
        <?php
            if(isset($_SESSION['id'])){
                include 'Snippets/loggedInNav.php'; 
            } else {
                include 'Snippets/nav.php';
            }
        ?>
    </header>

    <div class="points">
        <h2>My Points</h2>
        <div class="cardBlock">
            <div class="card middle" id="c1">
                <div class="front">
                    <img src="Images/wwCard.jpg" alt="Woolworths-Logo">
                </div>
                <div class="back">
                    <div class="back-content">
                        <h3><a href="">Woolworths</a></h3>
                        <h4>Points System</h4>
                        <p>Each Rand spent equates to 2 points</p>
                        <p>Current Points: <?php echo $woolworths ?></p>
                    </div>
                </div>
            </div>
    
            <div class="card middle" id="c2">
                <div class="front">
                    <img src="Images/hsCard.jpg" alt="H&M-Logo">
                </div>
                <div class="back">
                    <div class="back-content">
                        <h3><a href="">H&M</a></h3>
                        <h4>Points System</h4>
                        <p>Each Rand spent equates to 2 points</p>
                        <p>Current Points: <?php echo $hm ?></p>
                    </div>
                </div>
            </div>
    
            <div class="card middle" id="c3">
                <div class="front">
                    <img src="Images/msCard.jpg" alt="M&S-Logo">
                </div>
                <div class="back">
                    <div class="back-content">
                        <h3><a href="">M&S</a></h3>
                        <h4>Points System</h4>
                        <p>Each Rand spent equates to 2 points</p>
                        <p>Current Points: <?php echo $ms ?></p>
                    </div>
                </div>
            </div>
    
            <div class="card middle" id="c4">
                <div class="front">
                    <img src="Images/cnaCard.jpg" alt="CNA-Logo">
                </div>
                <div class="back">
                    <div class="back-content">
                        <h3><a href="">CNA</a></h3>
                        <h4>Points System</h4>
                        <p>Each Rand spent equates to 2 points</p>
                        <p>Current Points: <?php echo $cna ?></p>
                    </div>
                </div>
            </div>
    
            <div class="card middle" id="c5">
                <div class="front">
                    <img src="Images/amazonCard.jpg" alt="Amazon-Logo">
                </div>
                <div class="back">
                    <div class="back-content">
                        <h3><a href="">Amazon</a></h3>
                        <h4>Points System</h4>
                        <p>Each Rand spent equates to 2 points</p>
                        <p>Current Points: <?php echo $amazon ?></p>
                    </div>
                </div>
            </div>
    
            <div class="card middle" id="c6">
                <div class="front">
                    <img src="Images/comingSoonCard.jpg" alt="Coming Soon-Logo">
                </div>
                <div class="back">
                    <div class="back-content">
                        <h3><a href="">Coming Soon</a></h3>
                        <p>More Associated Companies Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <?php include 'Snippets/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="Javascript/main.js"></script>
</body>
</html>
