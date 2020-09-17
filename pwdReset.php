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
            <div class="form-container sign-up-container">
                <form action="PHP_Includes/reset-pwd.php" method="post"> 
                    <h1>Set New Password</h1>
                    <input type="hidden" name="selector" />
                    <input type="hidden"  name="validator" />

                    <input type="password" placeholder="Enter A New Password" name="pwd"  />
                    <input type="password" placeholder="Repeat New Password" name="pwd-repeat"  />

                    <button type="submit" name="reset-password-submit">Set New Password</button>
                    <!--<?php
                        $selector = $_GET["selector"];
                        $validator = $_GET["validator"];
                                
                        if (empty($selector) || empty($selector)){
                            echo "Could Not Validate Your Request";
                        } else {
                            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) { 
                    ?>
                            
                        <input type="hidden" value="<?php echo $selector; ?>" name="selector" />
                        <input type="hidden" value="<?php echo $validator; ?>" name="validator" />

                        <input type="password" placeholder="Enter A New Password" name="pwd"  />
                        <input type="password" placeholder="Repeat New Password" name="pwd-repeat"  />

                        <button type="submit" name="reset-password-submit">Set New Password</button>
                            </form>
                        <?php
                        }
                    }
                ?>-->
                
                </form>
            </div>

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
                    <div class="overlay-panel overlay-left">
                        <h1>Forgot Your Password?</h1>
                        <p>Fill In Your Details So We Can Reset It For You</p>
                        <button class="ghost" id="signIn">Reset Password</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Received Our E-Mail?</p>
                        <button class="ghost" id="signUp">Set New Password</button>
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

