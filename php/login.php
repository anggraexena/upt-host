<?php

  require_once "config.php";

    if (isset($_POST['login'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $sql = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password ='$password'");

        if (mysqli_num_rows($sql) > 0) {
            session_start();
            header("Location: ../dashboard.php");
            die();
        } else {
            echo "<script>alert('Username dan Password salah, Silahkan coba lagi!')</script>";
            echo "<meta http-equiv='refresh' content='1 url= ../index.html'>";
        }
    }

?>
