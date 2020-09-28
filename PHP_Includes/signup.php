<?php

if (isset($_POST['signup-submit'])){
    require 'dbh.php';

    $id = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd']; // hash password 

    if (empty($id) || empty($email) || empty($password) ){
        header("Location: ../form.php?error=emptyfields&uid=".$id."&mail=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../form.php?error=invalidmail&uid=".$id);
        exit();
    }
    else if (strlen(strval($id)) != 13){
        header("Location: ../form.php?error=invalidlength&uid=".$id);
        exit();
    }
    else {

        $sql = "SELECT id FROM signup WHERE id =? OR email=?";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../form.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "is", $id, $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../form.php?error=idTaken");
                exit();
            }
            else {
                $sql = "INSERT INTO signup (id, email, pwd) VALUES (?, ?, ?)";
                $stmt =  mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../form.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPwd =  password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "iss", $id, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);

                    $sql = "INSERT INTO userDetails (id) VALUES (?)";
                    $stmt =  mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../form.php?error=sqlerror");
                        exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "i", $id);
                        mysqli_stmt_execute($stmt);
                        
                        $sql = "INSERT INTO points (id) VALUES (?)";
                        $stmt =  mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)){
                            header("Location: ../form.php?error=sqlerror");
                            exit();
                        }
                        else {
                            mysqli_stmt_bind_param($stmt, "i", $id);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../form.php?signup=success");
                            exit();
                        }
                        
                        
                    }

                   

                    /*header("Location: ../form.php?signup=success");
                    exit();*/
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}
else {
    header("Location: ../form.php?");
    exit();
}

?>