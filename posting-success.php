<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>Todo Repuestos</title>
 
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
 
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
 
<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
 
 
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
<div class="header">
<nav class="navbar   navbar-site navbar-default" role="navigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
<a href="index.html" class="navbar-brand logo logo-title colortitulo">
 
<span class="logo-icon"><span class="logo-icon"><img src="images/to2autorep.png" /></span>
TODO<span>REPUESTOS </span> </a></div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">

<li class="dropdown"><a class="enlace" href="#" class="dropdown-toggle" data-toggle="dropdown">
<?php
session_start();

// Controlo si el usuario ya está logueado en el sistema.
if(isset($_SESSION['email'])){
	echo "<span>".$_SESSION['email']." </span>";
}
?>
<i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
<ul class="dropdown-menu user-menu">
<li class="active"><a href="#"><i class="icon-home"></i> Mi Perfil
</a></li>
<li><a href="myads.php"><i class="icon-th-thumb"></i> Mis Anuncios </a></li>
<li><a href="#"><i class="icon-heart"></i> Anuncios Premium </a></li>
<li><a href="#"><i class="icon-folder-close"></i> Archivos </a></li>
<li><a href="#"><i class="icon-hourglass"></i> Por Aprobar </a></li>
<li><a href="#"><i class=" icon-money "></i> Historial de Pagos </a></li>
</ul>
</li>
<li><a href="index.php" class="enlace">Salir</a></li>
<li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.php">publicar!</a></li>
</ul>
</div>
 
</div>
 
</nav>
</div>
 
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-12 page-content">
<div class="inner-box category-content">
<div class="row">
<div class="col-lg-12">
<div class="alert alert-success pgray  alert-lg" role="alert">
<h2 class="no-margin no-padding">&#10004; Felicidades! Tu publicación se há realizado con éxito.</h2>
<p>Espera un correo de confirmación que indica que tu publicación ha sido aceptada.</p>
</div>
</div>
</div>
</div>
 
</div>
 
</div>
 
</div>
</div>
 
<div class="footer" id="footer">
<div class="container">
<ul class=" pull-right navbar-link footer-nav">
<li> &copy; 2015 BootClassified</li>
</ul>
</div>
</div>
 
</div>
 
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
<script src="assets/js/fileinput.min.js" type="text/javascript"></script>
<script>
    // initialize with defaults
    $("#input-upload-img1").fileinput();
    $("#input-upload-img2").fileinput();
    $("#input-upload-img3").fileinput();
    $("#input-upload-img4").fileinput();
    $("#input-upload-img5").fileinput();


</script>
 
<script src="assets/js/owl.carousel.min.js"></script>
 
<script src="assets/js/hideMaxListItem.js"></script>
 
<script src="assets/js/jquery.matchHeight-min.js"></script>
 
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
 
<script src="assets/js/script.js"></script>
</body>
</html>
