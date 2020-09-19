<?php
    session_start();
    
    require 'dbh.php';
 
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM points WHERE id=?";
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
            $woolworths = $row['woolworths'];
            $hm = $row['hm'];
            $ms = $row['ms'];
            $cna = $row['cna'];
            $amazon = $row['amazon'];
        }
    }
?>