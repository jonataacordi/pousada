<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=0, initial-scale=1,minimum-scale=1, width=device-width, height=device-height"/>
<title>Documento sem título</title>
<link rel="stylesheet" type="text/css" href="w3.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fontawesome.com/v4/assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:150px">
<h3 class="w3-center"> Menu </h3>
<hr>
<div class="w3-small w3-centered">
<a href="?link=form_cat.php" class="w3-bar-item w3-button"><i class="fa fa-inbox fa-2x" aria-hidden="true"></i> Check-in </a>
<hr>
<a href="?link=form_cad.php" class="w3-bar-item w3-button"><i class="fa fa-cubes fa-2x" aria-hidden="true"></i> Check-out </a>
<hr>
<a href="?link=form_emp.php" class="w3-bar-item w3-button"><i class="fa fa-id-badge fa-2x" aria-hidden="true"></i> Cad. Empregados </a>
<hr>
<a href="#" class="w3-bar-item w3-button"><i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i> Relatório vendas </a>
<hr>
<a href="#" class="w3-bar-item w3-button"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> Editar estoque </a>
<hr>
<a href="#" class="w3-bar-item w3-button"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> Editar categoria </a>
<hr>
<a href="#" class="w3-bar-item w3-button"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> Editar Empregador </a>
<hr>
</div>
    </div>
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>My Page</h1>
</div>
<?php
$cam=isset($_GET['link'])? $_GET['link']:null;

if($cam==""){
	$cam="ap.php";
}

include $cam;

?>
</div>
</body>
</html>