<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Home</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/reset.css">
    </head>
    <body>
        <div class="site">
            <div class="conteudo">
                <?php
                    // menu
                    include_once('layout/menu.php');
                ?>
                <img src="img/bem_vindo.png" class="img-fluid">
                <div class="container">               
                    <h2 class="titulo2">Editor de Anotações</h2>

                    <div class="card mb-3" style="max-width: 1500px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="img/notebook.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Fácil de Usar</h4>
                                    <p class="card-text" style="font-size: 20px;">Um editor simples e fácil de usar, crie e edite suas anotações gratuitamente em qualquer lugar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 1500px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="img/nuvem.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Tudo Salvo no Próprio Editor</h4>
                                    <p class="card-text" style="font-size: 20px;">Todas as anotações são salvas no próprio editor com isso você poderá criar e editar em qualquer aparelho.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
        <br><br>           
        <?php
            //rodapé
            include_once('layout/rodape.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    </body>
</html>