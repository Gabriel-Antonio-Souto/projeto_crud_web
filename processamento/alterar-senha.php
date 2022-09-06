<?php

    require_once('../model/Usuario.php');
    require_once('../model/Conexao.php');
    include_once("limpar.php");

    // listar usuários
    $usuario = new Usuario();
        
    $con = Conexao::conectar();
            
    $stmt = $con->prepare("SELECT idUsuario FROM tbUsuario WHERE 
                                emailUsuario = :e");
    $stmt->bindValue(":e", $_POST['Login']);
    $stmt->execute();

    // verificar se o usuário existe 
    if($stmt->rowCount() == null){
        header("Location: ../alterar.php?msg=3");
    
    }else{
        // verificar se as senhas correspondem
        if($_POST['novaSenha'] == $_POST['confirmarNovaSenha']){   
            
                $usuario->setLoginUsuario(limpar($_POST['Login']));
                $usuario->setSenhaUsuario(password_hash(limpar($_POST['novaSenha']), PASSWORD_DEFAULT));

                $usuario->alterar($usuario);

                header("Location: ../alterar.php?msg=1");
        }else{
            // caso se as senhas não correspondem
            header("Location: ../alterar.php?msg=2");
        
        } 
    } 
    
?>