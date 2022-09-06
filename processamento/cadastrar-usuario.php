<?php
    require_once('../model/Usuario.php');
    require_once('../model/Conexao.php');
    include_once("limpar.php");

    // verificar se as senhas correspondem
    if($_POST['senha'] == $_POST['confirmar']){

        $usuario = new Usuario();
        
        $con = Conexao::conectar();
            
        $stmt = $con->prepare("SELECT idUsuario FROM tbUsuario WHERE 
                                emailUsuario = :e");
        $stmt->bindValue(":e", $_POST['login']);
        $stmt->execute();
        // verifica se o usuário já existe
        if($stmt->rowCount() > 0){
          header("Location: ../cadastro.php?msg=3");
    
        }else{
          // cadastrar
          header("Location: ../cadastro.php?msg=1");
        $usuario->setNomeUsuario(limpar($_POST['nome']));
        $usuario->setLoginUsuario(limpar($_POST['login']));
        $usuario->setSenhaUsuario(password_hash(limpar($_POST['senha']), PASSWORD_DEFAULT));

        $usuario->cadastrar($usuario);

      }
    }else{
      // erro ao cadastrar
      header("Location: ../cadastro.php?msg=2");
  }
   
?>