<?php
if (isset($_POST['login-submit'])) {

    require 'db_connect.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("location: /home2?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE gebruikersnaam=? OR email=?; ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: /home2?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdcheck = password_verify($password, $row['wachtwoord']);
                if ($pwdcheck == false) {
                    header("location: /home2?error=wrongpwd");
                    exit();
                } elseif ($pwdcheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['userUid'] = $row['gebruikersnaam'];
                    header("location: /home2?login=success");
                    exit();

                } else {
                    header("location: /home2?error=wrongpwd");
                    exit();
                }
            } else {
                header("location: /home2?error=nouser");
            }
        }

    }
} else {
    header("location: /home2");
    exit();
}