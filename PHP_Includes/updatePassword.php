<?php 

if (isset($_POST['password-submit'])){
    
    require 'dbh.php';

    $id = $_POST['id'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $newPasswordRepeat = $_POST['newPasswordRepeat'];

    $sql = "SELECT * FROM signup WHERE id = ? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../myaccount.php?error=sqlerrorid");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($oldPassword, $row['pwd']);
            if ($pwdCheck == false){
                header("Location: ../myaccount.php?error=wrongPassword&login=".$email."&id=".$row['id']);
                exit(); 
            }
            else if ($pwdCheck == true) {
                
                if ($newPassword == $newPasswordRepeat) {
                    $sql = "UPDATE signup SET pwd = ? WHERE id =?";
                    $stmt =  mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../myaccount.php?error=sqlerror");
                        exit();
                    }
                    else {
                        $hashedPwd =  password_hash($newPassword, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "si", $hashedPwd, $id);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../myaccount.php?&update=successpwd&login=".$email."&id=".$row['id']);
                        exit();
                    }

                    header("Location: ../myaccount.php?&login=".$email."&id=".$row['id']);
                    exit();
                }
                else {
                    header("Location: ../myaccount.php?error=pwdMatch&login=".$email."&id=".$row['id']);
                    exit();
                }
            }
        }
    }
    

    mysqli_stmt_close($stmt);
    mysqli_close($conn);


} else {
    header("Location: ../myaccount.php?idk");
    exit();
}
?>