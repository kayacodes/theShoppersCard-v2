<?php

    if(isset($_POST['signin-submit'])){
        require 'dbh.php';

        $email = $_POST['mail'];
        $password = $_POST['pwd'];

        if(empty($email) || empty($password)){
            header("Location: ../form.php?error=emptyfields");
            exit();
        }
        else {
            $sql = "SELECT * FROM signup WHERE email=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../form.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($password, $row['pwd']);
                    if ($pwdCheck == false){
                        header("Location: ../form.php?error=wrongPassword".$password);
                        exit(); 
                    }
                    else if ($pwdCheck == true) {
                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        header("Location: ../myaccount.php?login=".$email."&id=".$row['id']);
                        exit();
                    }
                    else {
                        header("Location: ../form.php?error=unabletoverifypwd");
                        exit();     
                    }
                }
                else {
                    header("Location: ../form.php?error=userDoesNotExist");
                    exit();
                }
            }
        }
    }
    else {
        header("Location: ../form.php");
        exit();
    }
?>