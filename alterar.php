<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Alterar Senha</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/reset.css">
    </head>
    <body>
        <div class="site">
            <div class="conteudo">
                <div id="login">
                    <!--formulário de alterar senha -->
                    <div class="card-body">
                        <h5 class="card-title">Alterar Senha</h5>
                        <br>
                        <form method="POST" action="processamento/alterar-senha.php">
                            <label for="validationTextarea" class="form-label">E-mail:</label>
                            <br>
                            <input type="text" name="Login" class="form-control" placeholder="Informe seu e-mail" required>
                            <br>
                            <label for="validationTextarea" class="form-label">Nova Senha:</label>
                            <br>
                            <input type="password" name="novaSenha" class="form-control" placeholder="Insira sua nova senha" required>
                            <br>
                            <label for="validationTextarea" class="form-label">Confirmar Nova Senha:</label>
                            <br>
                            <input type="password" name="confirmarNovaSenha" class="form-control" placeholder="Insira sua nova senha novamente" required>
                            <br>
                            <input type="submit" class="btn btn-primary" name="Entrar" value="Alterar">
                        </form>
                        <?php
                            // se existir um valor
                            if(isset($_GET['msg']))
                            if ($_GET['msg'] == 1)
                                echo("<br><h6 style='color: green;'>Senha alterada com sucesso. <a href='login.php'>Faça seu Login</a></h6>");
                                elseif ($_GET['msg'] == 2)
                                echo("<br><h6 style='color: red;'>Erro: senhas não correspondem! <a href='index.php'>Home</a></h6>");
                                elseif($_GET['msg'] == 3)
                                echo("<br><h6 style='color: red;'>Erro: e-mail não encontrado! <a href='index.php'>Home</a></h6>"); 
                            else
                            echo("<br><h6 style='color: red;'>Erro ao alterar senha. <a href='index.php'>Home</a></h6>");
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
