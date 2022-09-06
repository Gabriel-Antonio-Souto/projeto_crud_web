<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Cadastrar</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/reset.css">
    </head>
    <body>
        <div class="site">
            <div class="conteudo">
                <div id="login">
                    <!--formulário de cadastro -->
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar</h5>
                        <br>
                        <form method="POST" action="processamento/cadastrar-usuario.php">
                            <label for="validationTextarea" class="form-label">Nome e Sobrenone:</label>
                            <br>
                            <input type="text" name="nome" class="form-control" placeholder="Informe seu nome e sobrenome" required>
                            <br>
                            <label for="validationTextarea" class="form-label">E-mail:</label>
                            <br>
                            <input type="text" name="login" class="form-control" placeholder="Informe seu e-mail" required>
                            <br>
                            <label for="validationTextarea" class="form-label">Senha:</label>
                            <br>
                            <input type="password" name="senha" class="form-control" placeholder="Insira sua senha" required>
                            <br>
                            <label for="validationTextarea" class="form-label">Confirmar Senha:</label>
                            <br>
                            <input type="password" name="confirmar" class="form-control" placeholder="Insira sua senha novamente" required>
                            <br>
                            <input type="submit" class="btn btn-primary" name="Entrar" value="Cadastrar">
                        </form>
                        <?php
                            // se existir um valor
                            if(isset($_GET['msg']))
                            if ($_GET['msg'] == 1)
                                echo("<br><h6 style='color: green;'>Cadastro realizado com sucesso. <a href='login.php'>Faça seu Login</a></h6>");
                                elseif ($_GET['msg'] == 2)
                                echo("<br><h6 style='color: red;'>Erro: senhas não correspondem! <a href='index.php'>Home</a></h6>");
                                elseif($_GET['msg'] == 3)
                                echo("<br><h6 style='color: red;'>Erro: e-mail já cadastrado! <a href='index.php'>Home</a></h6>"); 
                            else
                            echo("<br><h6 style='color: red;'>Erro ao cadastrar. <a href='index.php'>Home</a></h6>");

                        ?>
                    </div>
                </div>
            </div>    
        </div>
        <?php
          //rodapé
          include_once('layout/rodape.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    </body>
</html>
