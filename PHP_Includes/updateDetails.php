<?php 

if (isset($_POST['details-submit'])){
    
    require 'dbh.php';

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $newEmail = $_POST['mail'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];

    if(empty($newEmail) || empty($firstname) || empty($surname) || empty($street) || empty($city) || empty($zipcode) || empty($country)){
        header("Location: ../myaccount.php?error=emptyfields");
        exit();

    } else if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../myaccount.php?error=invalidmail&uid=".$id);
        exit();

    } else if (!preg_match("/^[a-zA-Z]*$/", $firstname) && !preg_match("/^[a-zA-Z]*$/", $surname) &&!preg_match("/^[a-zA-Z]*$/", $city) && !preg_match("/^[a-zA-Z]*$/", $country)) {
        header("Location: ../myaccount.php?error=invalidcharacters");
        exit();

    } else {
        
        $sql = "SELECT email FROM signup WHERE id = ? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../myaccount.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $email = $row['email'];

                $sql = "UPDATE userDetails SET firstName =?, surname =?, street =?, city =?, zipcode =?, country =? WHERE userDetails.id =? ";

                $stmt =  mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../myaccount.php?error=sqlerror");
                    exit();
                        }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssssi",  $firstname, $surname, $street, $city,  $zipcode, $country, $id);
                    mysqli_stmt_execute($stmt);
                    
                    
                    $sql = "SELECT email FROM signup WHERE email =?";
                    $stmt =  mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../myaccount.php?error=sqlerror");
                        exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "s", $newEmail);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultCheck = mysqli_stmt_num_rows($stmt);
                        if ($resultCheck > 0 ) {

                            if ($email == $newEmail) {
                                header("Location: ../myaccount.php?update=success&login=".$newEmail."&id=".$id);
                                exit();

                            } else {
                                header("Location: ../myaccount.php?error=emailTaken&login=".$email."&id=".$id);
                                exit();
                            }
                        

                        } else if ($email != $newEmail) {
                            $sql = "UPDATE signup SET email = ? WHERE signup.id = ?";
                            $stmt =  mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)){
                                header("Location: ../myaccount.php?error=sqlerroremail");
                                exit();
                            }
                            else {
                                mysqli_stmt_bind_param($stmt, "si", $newEmail, $id);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../myaccount.php?update=success&login=".$newEmail."&id=".$id);
                                exit();
                            }
                        } 
                    }
                    
                    
                }
            }

        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
    exit();
}
?>