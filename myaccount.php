<?php
    include 'PHP_Includes/displayDetails.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account | The Shopper's Card</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/signup.css">
</head>

<body>
    <header class="myacc-header">
        <?php
            if(isset($_SESSION['id'])){
                include 'Snippets/loggedInNav.php'; 
            } else {
                include 'Snippets/nav.php';
            }
        ?>
    </header>

    <div class="myaccount-page">
        <h2>My Account</h2>
        <div class="forms">
            <h3>Account Details</h3>
            <ul>
                <li><a onclick="switchForms('personalDetails')";>Personal Details</a></li>
                <li><a onclick="switchForms('changePassword')";>Change Password</a></li>
            </ul>
            
            <form  action="PHP_Includes/updateDetails.php" name="details" method="POST" class="details-form" id="details-form" data-aos="fade-up">
            <?php
                if (isset($_GET["error"])){
                    if($_GET["error"] == "emptyfields") {
                        echo '<p> Fill In All Fields! </p><br>';
                    }
                    else if ($_GET["error"] == "invalidmail") {
                        echo '<p> Invalid Email! </p><br>';
                    }
                    else if ($_GET["error"] == "invalidcharacters") {
                        echo '<p> Invalid Characters Used! </p><br>';
                    }
                    else if ($_GET["error"] == "emailTaken") {
                        echo '<p> E-Mail Unavailable. </p><br>';
                    }
                }
                else if (isset($_GET["update"]) == "success") {
                    echo '<p> Update Successful!</p><br>';
                }
            ?>

                <label for='ID' id="id">ID  </label>
                <input type="text" name="id" value="<?php  echo $id ?>" readonly>
                <br>
                <label for="name">First Name</label>
                <input type="text" name="firstname" value="<?php  echo $firstname ?>" required>
                <br>
                <label for="surname">Surname</label>
                <input type="text" name="surname" value="<?php  echo $surname ?>" required><br>
                <label for="email">Email</label>
                <input type="email" name="mail" value="<?php  echo $email ?>"  required><br>
                <label for="street">Street</label>
                <input type="street" name="street" value="<?php  echo $street ?>" required><br>
                <label for="city">City</label>
                <input type="city" name="city" value="<?php  echo $city ?>" required><br>
                <label for="zip">Zip Code</label>
                <input type="text" name="zipcode" value="<?php  echo $zipcode ?>" required><br>
                <label for="country">Country</label>            
                <input type="country" name="country" value="<?php  echo $country ?>" required><br>
                <button name="details-submit" >Submit</button>
            </form>
                
            <form action="PHP_Includes/updatePassword.php" class="details-form" id="password-form" method="POST" data-aos="fade-up">
            <?php
                if (isset($_GET["error"])){
                    if($_GET["error"] == "wrongPassword") {
                        echo '<p> Old Password Incorrect! </p><br>';
                    }
                    else if ($_GET["error"] == "pwdMatch") {
                        echo '<p> Passwords Do Not Match </p><br>';
                    }
                }
                else if (isset($_GET["update"]) == "successpwd") {
                    echo '<p> Password Update Successful!</p><br>';
                }
            ?>
                <label for='ID' id="id">ID  </label>
                <input type="text" name="id" value="<?php  echo $id ?>" readonly> <br>
                <label for="">Old Password</label>
                <input type="password" name="oldPassword" required> <br>
                <label for="">New Password</label>
                <input type="password" name="newPassword" required> <br>
                <label for="">Confirm Password</label>
                <input type="password" name="newPasswordRepeat" required><br>
                <button name="password-submit">Save Password</button>
            </form>
        </div>
    </div>
    
    <?php include 'Snippets/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="Javascript/main.js"></script>
</body>
</html>