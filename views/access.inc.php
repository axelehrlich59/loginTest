<?php 

if(isset($_POST['button-submit'])) {
     require '../db_connect/connect.php';
      
     $username = $_POST['email'];
     $password = $_POST['password'];

     if(empty($username) || empty($password)) {
          header("Location: ../login.php?error=emptyfields&email=".$username."&password=".$password);
          exit();
     }

     else if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../login.php?error=invalidemail&email=".$username);
     }
     
     else {

        $sql = "SELECT idUser FROM user WHERE idUser=?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }

        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0) {
                header("Location: ../login.php?error=sqlerror");
            exit();
            }
        }
     }


}