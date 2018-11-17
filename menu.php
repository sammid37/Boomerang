<div class="faixa_menu">
  <nav class="navbar navbar-expand-md navbar-light">
    <b><a class="navbar-brand text-white" href="#">Boomerang</a></b>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    <?php
      session_start();
      //  ISSO FUNCIONA, NÃO MEXA!!!
      if(!isset($_SESSION["acesso"]) || $_SESSION["acesso"] != TRUE) {
        echo"<a title='iniciar sessão' href='login.php'></i>LOGIN</a>";
      }
      else{
        if ($_SESSION['tipousuario']==1) {
          echo "
            <a class='nav-link' style='color:white' href='#'>Bem-vindo(a), 
            ".$_SESSION['Nome'].
            "</a>";
        }else {
          echo "
            <a class='nav-link' style='color:white' href='#'>Bem-Vindo,"
            .$_SESSION['Nome'].
            "</a>";
        }
      }
    ?>
        </li>
      </ul>
    </div>
    <!-- id="icone_sair" -->
    <a href="logout.php" class='nav-link' style="color:white">
      <span class="glyphicon glyphicon glyphicon-log-out "></span>
    </a>
  </nav>
</div>
