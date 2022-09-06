<?php
    // salvar anotações
    include_once('valida-sentinela.php');
    require_once('../model/Anotacoes.php');
    include_once('limpar.php');

    $anotacao = new Anotacoes();

    $anotacao->setTituloAnotacao(limpar($_POST['titulo']));
    $anotacao->setTextoAnotacao(limpar($_POST['texto']));
    $anotacao->setIdUsuario($_SESSION['id']);
    
    $anotacao->salvar($anotacao);
    
    header("Location: ../restrito/index.php");
    
?>