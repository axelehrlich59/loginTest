<?php

if(isset($_POST['login-submit'])) {

require '../db_connect/config.php';


$mailuid = $_POST['mailuid'];
$password = $_POST['password'];

if(empty($mailuid) || empty($password)) {
    header("Location: ../login.php?error=emptyfields");
          exit();
}
else {
    $sql = "SELECT * FROM user WHERE idUser=? OR emailUser=?;";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
    }

    else {
        mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['mdpUser']);
            if ($pwdCheck == false) {
                header("Location: ../login.php?error=sqlerror");
                 exit();
            }

            else if ($pwdCheck == true) {
                session_start();
                $_SESSION['userId'] = $row['idUser'];
                $_SESSION['userUId'] = $row['uidUsers'];

                header("Location: final.php?succes=login");
                exit();
            }

            else {
                header("Location: ../login.php?error=sqlerror");
                 exit();
            }
        }

        else {
            header("Location: ../login.php?error=nouser");
            exit();
        }

    }
}


}

else {
    header("Location: ../login.php");
          exit();
}