<?php
    session_start();
    require 'PHP_includes/dbh.php';
 
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM userDetails WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../form.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $firstname = $row['firstName'];
            $surname = $row['surname'];
            $street = $row['street'];
            $city = $row['city'];
            $zipcode = $row['zipcode'];
            $country = $row['country'];
        }
    }
?>