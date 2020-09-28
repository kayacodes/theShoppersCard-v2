<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | The Shopper's Card</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body>
    <header>
        <?php
            include 'Snippets/nav.php';
        ?>         
    </header>
    
    <div class="signup-page">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
            <form action="PHP_Includes/reset-request.php" method="post">
                <h1>Reset Your Password</h1>
                
                <?php
                    if (isset($_GET["reset"])){
                        if($_GET["reset"] == "success") {
                            echo '<p> Check Your E-Mail! </p>';
                        }
                    }
                ?>
                <input type="email" placeholder="Email" name="mail" />
                <button type="submit" name="reset-request-submit">Receive New Password</button>
            </form>
            </div>
        
            <div class="overlay-container">
                <div class="overlay">
                    
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your E-mail to reset your password. You will receive an email with a link to where you can enter a new password.</p>
                        
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

