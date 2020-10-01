<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | The Shopper's Card</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Styles/signup.css">
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
            <form action="/PHP_Includes/signup.php" method="post">
                <h1>Create Account</h1>
                <?php
                    if (isset($_GET["error"])){
                        if($_GET["error"] == "emptyfields") {
                            echo '<p> Fill In All Fields! </p>';
                        }
                        else if ($_GET["error"] == "invalidmail") {
                            echo '<p> Invalid Email! </p>';
                        }
                        else if ($_GET["error"] == "idTaken") {
                            echo '<p> ID or E-Mail Taken! </p>';
                        }
                        else if ($_GET["error"] == "invalidlength") {
                            echo '<p>  ID Must Be 13 Characters Long! </p>';
                        }
                    }
                    else if (isset($_GET["signup"]) == "success") {
                        echo '<p> Sign Up Successful!</p>';
                    }
                    
                ?>
                <input type="number" placeholder="ID Number" name="uid"/>
                <input type="email" placeholder="Email" name="mail" />
                <input type="password" placeholder="Password" name="pwd"/>
                <button type="submit" name="signup-submit">Sign Up</button>
            </form>
            </div>
        
            <div class="form-container sign-in-container">
                <form action="/PHP_Includes/signin.php" method="post">
                    <h1>Sign In</h1>
                    <?php
                        if (isset($_GET["error"])){
                            if($_GET["error"] == "emptyfields") {
                                echo '<p> Fill In All Fields! </p>';
                            }
                            else if ($_GET["error"] == "wrongPassword") {
                                echo '<p> Wrong Password! </p>';
                            }
                            else if ($_GET["error"] == "userDoesNotExist") {
                                echo '<p> User Does Not Exist! </p>';
                            }
                        }
                    ?>
                    <input type="email" placeholder="Email" name="mail" />
                    <input type="password" placeholder="Password" name="pwd"  />

                    <?php
                        if (isset($_GET["newpwd"])){
                            if($_GET["newpwd"] == "passwordupdated") {
                                echo '<p> Your Password Has Been Reset! </p>';
                            }
                        }
                    ?>
                    <a href="pwdReset.php">Forgot Your Password?</a>
                    <button type="submit" name="signin-submit">Sign In</button>
                </form>
            </div>
        
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To Access Your Reward Points Please Login</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter Your Personal Details To Get Started</p>
                        <button class="ghost" id="signUp">Sign Up</button>
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

