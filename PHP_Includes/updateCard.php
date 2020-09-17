<?php

 session_start();
 require 'dbh.php';

if (isset($_POST['default'])){
    $img = "";
} else if (isset($_POST['1'])){
    $img = "Images/1.JPG";

} else if (isset($_POST['2'])){
    $img = "Images/2.jpg";

} else if (isset($_POST['3'])){
    $img = "Images/3.jpg";

} else if (isset($_POST['4'])){
    $img = "Images/4.jpg";

} else {
    $img = "";
}

$id = $_SESSION['id'];

$sql = "UPDATE userDetails SET cardImage =? WHERE userDetails.id=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../customize.php?error=sqlerror");
    exit();
}
else {
    mysqli_stmt_bind_param($stmt, "si", $img, $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    header("Location: ../customize.php?update=successful&id=".$id);
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>