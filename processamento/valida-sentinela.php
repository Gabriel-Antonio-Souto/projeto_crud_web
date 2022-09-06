<?php
    // valida sentinela
    session_start();
    ob_start();
    include_once("../model/Conexao.php");
    // se as sessões não existirem 
    if((!isset($_SESSION['id'])) and (!isset($_SESSION['nome']))){
        header("Location: ../login.php?msg=3");
    }
?>