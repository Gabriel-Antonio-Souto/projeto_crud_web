<?php
    // validar sessão
    include_once('../processamento/valida-sentinela.php');
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Configurações</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/estilo.css">
    </head>
    <body>
      <div class="site">
        <div class="conteudo">      
          <?php
            // menu-restrito
            include_once('../layout/menu-restrito.php');
            // cookies
            include_once('cookies-css.php');
            ?>
    
              <h3 class="titulo1">Configurações</h3>
              <?php

                require_once("../model/Usuario.php");
                try {
                    $user = new Usuario();
                    $lista = $user->listar();
                    
                } catch(Exception $e) {
                    
                    echo $e->getMessage();
                }
              
              ?>  
              <div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                  </symbol>
                </svg>
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                  Este site usa cookies<br><br>
                  As opções selecionadas serão armanenadas no armazenamento local do seu navegador. <br><br>
                  Observação: Se você acessar sua conta em outro dispositivo ou navegador, as opções salvas não estarão disponíveis.
                  </div>
                </div>
                <hr>
                <br>
                <h3>Dados:</h3>
                <br>
                <!--listar usuário-->
                <?php foreach ($lista as $linha){ ?>
                    <?php if($_SESSION['id'] == $linha['idUsuario']) {?>
                        <div>
                            <h6>Nome: <?php echo $linha['nomeUsuario'];?></h6>
                            <br>
                            <h6>E-mail: <?php echo $linha['emailUsuario'];?></h6>
                            <br>
                            <h6>ID: <?php echo $linha['idUsuario'];?></h6>
                    
                        </div>
                    <?php } ?>
                <?php } ?>
                <br>
                <hr>
                <br>
                <h3>Opções:</h3>
                <br>
                <!--formulário de modo-->
                <form method="post" action="cor.php">
                    <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><h6>Selecionar um modo:</h6></label>
                      <div class="col-sm-10">
                        <select class="form-select" name="corSelect">
                          <option value="">Selecione uma opção</option>
                          <option value="">Original</option>
                          <option value="#181818">Escuro</option>
                        </select>
                      </div>
                      <br>
                    </div>
                    <input class="btn btn-outline-dark" id="config" type="submit" name="Submit" value="Aplicar" />
                </form>
                <br>
                <!--formulário de fonte-->
                <form method="post" action="font.php">
                  <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><h6>Selecionar uma fonte:</h6></label>
                      <div class="col-sm-10">
                        <select class="form-select" name="fontSelect">
                          <option value="">Selecione uma opção</option>
                          <option value="Arial">Arial</option>
                          <option value="Verdana">Verdana</option>
                          <option value="Helvetica">Helvetica</option>
                          <option value="Tahoma">Tahoma</option>
                          <option value="Georgia">Georgia</option>
                          <option value="'Courier New'">Courier New</option>
                          <option value="'Times New Roman'">Times New Roman</option>
                          <option value="cursive">Cursive</option>
                        </select>
                      </div>
                      <br>
                  </div>
                      <input class="btn btn-outline-dark" id="config" type="submit" name="Submit" value="Aplicar" />
                </form>
                <br>
                <!--formulário de estilo de fonte-->
                <form method="post" action="estiloFont.php">
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><h6>Selecionar um estilo de fonte:</h6></label>
                    <div class="col-sm-10">  
                      <select class="form-select" name="estiloFontSelect">
                        <option value="">Selecione uma opção</option>
                        <option value="italic">Italic</option>
                        <option value="normal">Normal</option>
                        <option value="oblique">Oblique</option>
                      </select>
                    </div>
                      <br>
                  </div>
                    <input class="btn btn-outline-dark" id="config" type="submit" name="Submit" value="Aplicar" />
                </form>
                <br>
              </div>
        </div>
      </div>
      <?php
        // rodapé
        include_once('../layout/rodape.php');
      ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>