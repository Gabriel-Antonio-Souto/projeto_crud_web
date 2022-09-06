
<!--menu-->
<div class="teste">
  <nav class="navbar navbar-dark fixed-top" style="background-color: #083d84;">
    <div class="container-fluid">
      <h3 class="titulo">Olá <?php echo $_SESSION['nome']; ?></h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h4 class="offcanvas-title text-black" id="offcanvasNavbarLabel">Editor de Anotações</h4>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
              <a id="link" class="nav-link active text-black" href="index.php">Anotações</a>
              </li>
              <li class="nav-item">
              <a id="link" class="nav-link active text-black" href="config.php">Configurações</a>
              </li>
              <li class="nav-item">
              <a id="link" class="nav-link active text-black" href="../processamento/logout.php">sair</a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>

<!--menu escuro-->
<?php if (isset($_COOKIE['corCookie'])){  $cor = $_COOKIE['corCookie'];?>
<nav class="navbar navbar-dark bg-dark fixed-top" style="background-color: #083d84;">
  <div class="container-fluid">
    <h3 class="titulo">Olá <?php echo $_SESSION['nome']; ?></h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#black" aria-controls="black">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="black" aria-labelledby="offcanvasBlack">
      <div class="offcanvas-header">
        <h4 class="offcanvas-title text-white" id="offcanvasBlack">Editor de Anotações</h4>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
            <a id="link" class="nav-link active text-white" href="index.php">Anotações</a>
            </li>
            <li class="nav-item">
            <a id="link" class="nav-link active text-white" href="config.php">Configurações</a>
            </li>
            <li class="nav-item">
            <a id="link" class="nav-link active text-white" href="../processamento/logout.php">sair</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<?php }?>
        