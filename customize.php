<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <title>Customise Card | The Shopper's Card</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Styles/signup.css">
</head>
<body>
    <header class="custom-header">
        <?php
            session_start();
            if(isset($_SESSION['id'])){
                include 'PHP_Includes/displayCard.php';
                include 'Snippets/loggedInNav.php'; 
            } else {
                include 'Snippets/nav.php';
            }
        ?>
    </header>

    <div class="custom-page">
        <h2>Customise Your Card</h2>

        <?php
            
            if(isset($_SESSION['id'])){
                include 'Snippets/loggedInCard.php'; 

            } else {
                include 'Snippets/card.php';
            }
        ?>
        
        
        </div>
    
    <?php include 'Snippets/footer.php'?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="Javascript/main.js"></script>
</body>
</html>