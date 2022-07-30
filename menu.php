<head>
  <link rel="stylesheet" href="adm.css">
</head>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="float:left;height: 50px;padding: 12px 15px;font-size: 18px;line-height: 20px;"><img src="logo/logo-transparent.png"></a> <!-- Logo -->
      </div>

      <!-- Menu -->	
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Livros</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informatica <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Notebook</a></li>
              <li><a href="#">Pc gamer </a></li>
              <li><a href="#">All in one</a></li>
              <li class="divider"></li>
              <li><a href="#">Tablet</a></li>
              <li><a href="#">Ipad</a></li>
            </ul>
          </li>
  
          <!-- Dropdown -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TV Audio <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="busca.php?busca=Smart">Tv Smart</a></li>
              <li><a href="busca.php?busca=TV_4k">Tv 4k </a></li>
              <li class="divider"></li>
              <li><a href="busca.php?busca=Fones">Fones de Ouvido</a></li>
              <li><a href="busca.php?busca=Dock Station">Dock Station</a></li>
            </ul>
          </li>
        </ul>
  
  <!-- Pesquisa,Contato,Carrinho -->
        
        <form method="get" action="busca.php" class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" id="busca" name="busca" placeholder="Buscar"> <!--Busca -->
          </div>
          <button type="submit" class="btn btn-default">Pesquisar</button>
        </form>
        <ul class="nav navbar-nav navbar-right"> 
        <li>  <a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho </a> </li>
          <li><a href="#">Contato</a></li>

                                          <!-- Area de LOGIN -->
<?php
  if (empty($_SESSION['id'])) {

?>

            <li><a href="login.php" <span class="glyphicon glyphicon-log-in login"> </span> Login </a> </li> <!--Login-->

  <?php } else {
    if ($_SESSION['adm']==0) {
  $consulta_user=$conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]'");
  $exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);
  ?>

  <li> <a href="areaUser.php"><span class="glyphicon glyphicon-user"> </span> <?php echo $exibe_user['nome']; ?> </a></li>                                                                 <!-- login -->

<li> <a href="sair.php"><span class="glyphicon glyphicon-off leave"> </span>Sair</a></li> <!-- logoff -->
<?php } else { ?>
   
   <li > <a href="adm.php"> <button class="btn btn-sml btn-danger adm">Adm</button></a></li>   <!-- botão adm -->                                                              <!-- login -->

   <li> <a href="sair.php"><span class="glyphicon glyphicon-off leave"></span>Sair</a></li> <!-- logoff adm-->
<?php } 
} ?>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>