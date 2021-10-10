<?php
    session_start();
    unset($_SESSION['login_success']);
    header("Location: login.php");
?>