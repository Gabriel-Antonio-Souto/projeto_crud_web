<?php
    // destruir sessão
    session_start();
    ob_start();
    unset($_SESSION['id'],$_SESSION['nome']);
    session_destroy();
    header("Location: ../login.php");

?>