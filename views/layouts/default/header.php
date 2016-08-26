
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión</title>
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="<?php echo APP_URL; ?>views/layouts/default/js/jquery-3.1.0.min.js"></script>
    <script src="<?php echo APP_URL; ?>views/layouts/default/js/bootstrap.min.js"></script>

<style type="text/css">{
  margin:0;
  padding:0;
}
 
body {
  background:#FFFFFA;
}
 
header {
  width:100%;
}
 
header nav {
  width:90%;
  max-width:1000px;
  margin:20px auto;
  background:#024959;
}
 
.menu_bar {
  display:none;
}
 
header nav ul {
  overflow:hidden;
  list-style:none;
}
 
header nav ul li {
  float:left;
}
 
header nav ul li a {
  color:#fff;
  padding:20px;
  display:block;
  text-decoration:none;
}
 
header nav ul li span {
  margin-right:10px;
}
 
header nav ul li a:hover {
  background:#037E8C;
}
 
section {
  padding:20px;
}
 
@media screen and (max-width:800px ) {
  header nav {
    width:80%;
    height:100%;
    left:-100%;
    margin:0;
    position: fixed;
  }
 
  header nav ul li {
    display:block;
    float:none;
    border-bottom:1px solid rgba(255,255,255, .3);
  }
 
  .menu_bar {
    display:block;
    width:100%;
    background:#ccc;
  }
 
  .menu_bar .bt-menu {
    display:block;
    padding:20px;
    background:#024959;
    color:#fff;
    text-decoration:none;
    font-weight: bold;
    font-size:25px;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
  }
 
  .menu_bar span {
    float:right;
    font-size:40px;
  }
}</style>
 
</head>
 

  <header>
    <div class="menu_bar">
      <a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
    </div>
 
    <nav>
      <ul>
        <li><a href="<?php echo APP_URL; ?>users"><h3>Usuarios</h3></li></a>
        <li><a href="<?php echo APP_URL; ?>categories"><h3>Categorias</h3></a></li>

       <li><a href="<?php echo APP_URL; ?>transactions"><h3>Transacciones</h3></a></li>

      <li><a href="<?php echo APP_URL; ?>accounts"><h3>Cuentas</h3></a></li>

      <li><a href="<?php echo APP_URL; ?>users/logout"><h3>Salir</h3></a></li>
      </ul>
    </nav>
  </header>