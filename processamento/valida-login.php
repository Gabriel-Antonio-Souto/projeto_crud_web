<?php
    session_start();
    ob_start();
    include_once("../model/Conexao.php");
    include_once("limpar.php");
    // pegar os dados
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // verifica se o usuário clicou no botão
    if(!empty($dados['Entrar'])){
        $c = new Conexao();
        $cnn = $c->conectar();
        // listar usuário
        $query = "SELECT * FROM tbUsuario 
            WHERE emailUsuario = :login
            LIMIT 1";
        $resultado = $cnn->prepare($query);
        $resultado->bindParam(':login',limpar($dados['login']));
        $resultado->execute();
        // se resultado for diferente de 0
        if(($resultado) AND ($resultado->rowCount()!=0)){
            $row =  $resultado->fetch(PDO::FETCH_ASSOC);
            // se resultado for iguail a dados
            if(password_verify(limpar($dados['senha']), $row['senhaUsuario'])){
                $_SESSION['id'] = $row['idUsuario'];
                $_SESSION['nome'] = $row['nomeUsuario'];
                header("Location: ../restrito/index.php");
            }else{
                // erro login
                header("Location: ../login.php?msg=1");
            }
        }else{
            // erro login
            header("Location: ../login.php?msg=2");
        }

    }
?>