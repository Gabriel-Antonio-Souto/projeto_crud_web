<?php
    // excluir anotação
    require_once('../model/Anotacoes.php');

    $anotacao = new Anotacoes();

    $anotacao->setIdAnotacao($_GET['id']);

    $anotacao->excluir($anotacao);

    header("Location: ../restrito/index.php");
?>