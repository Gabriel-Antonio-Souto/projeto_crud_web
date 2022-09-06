<?php
    // salvar alterações
    require_once('../model/Anotacoes.php');
    include_once('limpar.php');

    $anotacao = new Anotacoes();

    $anotacao->setTituloAnotacao(limpar($_POST['alterarTitulo']));
    $anotacao->setTextoAnotacao(limpar($_POST['alterarTexto']));
    $anotacao->setIdAnotacao($_GET['id']);

    $anotacao->alterar($anotacao);
    header("Location: ../restrito/index.php");

?>