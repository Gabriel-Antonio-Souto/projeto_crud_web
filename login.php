<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Login</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/reset.css">
    </head>
    <body">
        <div class="site">
            <div class="conteudo">
                <div id="login">
                    <!--formulário de login -->
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <br>
                        <form method="POST" action="processamento/valida-login.php">
                            <label  for="validationTextarea" class="form-label">E-mail:</label>
                            <br>
                            <input type="text" class="form-control" name="login" placeholder="Informe seu e-mail" required>
                            <br>
                            <label  for="validationTextarea" class="form-label">Senha:</label>
                            <br>
                            <input type="password" class="form-control" name="senha" placeholder="Insira sua senha" required>
                            <br>                          
                            <input type="submit"  class="btn btn-primary" name="Entrar" value="Entrar"> 
                        </form>
                            <?php
                                // se existir um valor
                                if(isset($_GET['msg']))
                                if ($_GET['msg'] == 1)
                                    echo("<br><h6 style='color: red;'>Erro: Usuário ou senha inválida! <a href='index.php'>Home</a></h6>");
                                    elseif ($_GET['msg'] == 2)
                                    echo("<br><h6 style='color: red;'>Erro: Usuário ou senha inválida! <a href='index.php'>Home</a></h6>");
                                    elseif($_GET['msg'] == 3)
                                    echo("<br><h6 style='color: red;'>Erro: Necessário realizar login! <a href='index.php'>Home</a></h6>"); 
                                else
                                echo("<br><h6 style='color: red;'>Erro ao Logar. <a href='index.php'>Home</a></h6>");
                            ?>
                        <br>
                        <a href="alterar.php">esqueceu a senha?</a>
                        |
                        <a href="cadastro.php">Cadastra-se</a>
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
