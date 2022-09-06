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
        <title>Anotações</title>
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

                <h3 class="titulo1">Suas Anotações</h3>
                
                <a type="button" id="botao" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editor">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                </svg>
                Criar</a>
            
                <?php
                    require_once("../model/Anotacoes.php");
                    try {
                        $anotacao = new Anotacoes();
                        $listaAnotacao = $anotacao->listar();
                        
                    } catch(Exception $e) {
                        echo $e->getMessage();
                    }
                    
                ?>
      
                <!-- Editor -->
                <div class="modal fade" id="editor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="../processamento/salvar-anotacao.php">
                            <input class="tituloEditor" name="titulo" placeholder="Titulo:"><hr>
                            <textarea style="resize: none; width: 100%;" rows="30" name="texto" placeholder="Texto:"></textarea><hr>
                        </div>
                        <div class="modal-footer">
                        <input class="btn btn-primary" type="reset" name="b2" value="Limpar">
                            <input class="btn btn-primary" id="button" type="submit" value="Salvar">
                        </div>
                        </form>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <!--lista anotações-->
                        <?php foreach ($listaAnotacao as $linha){ ?>
                            <!--se a sessão for igual ao ID do usuário -->
                            <?php if($_SESSION['id'] == $linha['idUsuario']) {?>
                                <div class="col">
                                    <div class="card h-100 border-dark" >
                                        <div class="card-header"> 
                                            <h5 class="card-title"><?php echo $linha['tituloTexto'] ?></h5>
                                        </div>
                                        <div class="card-body text-dark">
                                            <p class="card-text"><?php echo substr($linha['texto'], 0, 150); echo "...";?></p>
                                        </div>
                                        <div class="card-footer ">
                                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#visualizar<?php echo $linha['idTexto'];?>">Visualizar</a>
                                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluir<?php echo $linha['idTexto'];?>">Excluir</a>   
                                        </div>
                                    </div>
                                </div>
                                <!-- Excluir -->
                                <div class="modal fade" id="excluir<?php echo $linha['idTexto'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title text-white" id="exampleModalLabel"><?php echo $linha['tituloTexto'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            Deseja mesmo excluir este item?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                                <a class="btn btn-danger" href="../processamento/excluir-anotacao.php?id=<?php echo $linha['idTexto'];?>">Excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- Visualizar -->
                                <div class="modal fade" id="visualizar<?php echo $linha['idTexto'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form method="post" action="../processamento/salvar-alteracao.php?id=<?php echo $linha['idTexto'];?>">
                                                    <input class="tituloEditor" name="alterarTitulo" placeholder="Titulo:" value="<?php echo $linha['tituloTexto'] ?>"><hr>
                                                    <textarea style="resize: none; width: 100%;" rows="30" name="alterarTexto" placeholder="Texto:"><?php echo $linha['texto'];?></textarea><hr>
                                                </div>
                                                <div class="modal-footer">
                                                    <input id="button" class="btn btn-primary" type="submit" value="Salvar Alterações">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>

            </div>     
        </div>
        <br><br><br>
        <?php
            //rodapé
            include_once('../layout/rodape.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
   </body>
</html>