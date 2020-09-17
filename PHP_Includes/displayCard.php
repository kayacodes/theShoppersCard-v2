<?php
    require 'dbh.php';

    $id = $_SESSION['id'];
    $sql = "SELECT cardImage FROM userDetails WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../customize.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $img = $row['cardImage'];
        }
    }
?>