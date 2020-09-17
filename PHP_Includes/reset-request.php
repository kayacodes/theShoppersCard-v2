<?php 

if(isset($_POST["reset-request-submit"])) {
 
    //creating the tokens
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "www.theshopperscard.com/pwdReset.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    require 'dbh.php';  

    $userEmail = $_POST['mail'];
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    //sending the email to the user
    $to = $userEmail;
    $subject = 'Reset Your Password For TheShoppersCard.com';
    $message = '<p>We received a password reset request. The link to reset your password is below. If you did not make this request, you can ignore this email</p>';
    $message .= '<br>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '"></a>';

    $headers = "From: TheShoppersCard <kayadokrat@gmail.com>\r\n";
    $headers .= "Reply-To: kayadokrat@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n"; 

    mail($to, $subject, $message, $headers);
    header("Location: ../pwdReset.php?reset=success");

} else {
    header("Location: ../index.php");
}

?>