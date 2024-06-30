<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="w3.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style> a{text-decoration: none;} </style>
<title>chek_In</title>
</head>
<body>

<div class="check-out w3-container">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3><i class="bi bi-box-arrow-left" aria-hidden="true"></i> CHECK-OUT 
<a href="?link=ap.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-times" aria-hidden="true"></i></a>
</h3>
<br>
</header>
<div class="card w3-container w3-white">
<?php 
require "conexao.php";
$in = $_GET["in"];
if ($result = mysqli_query($link, "SELECT * FROM cad_check_in WHERE situacao LIKE '$in%'")){
        while($user = mysqli_fetch_assoc($result)){
            echo '
			<div class="w3-third w3-container" style="width:250px; margin-bottom: 15px">
  <header class="  w3-dark-grey w3-center">
    <i class="fa fa-bed" aria-hidden="true"></i> Quarto: '.$user['ap'].'</header>
	<div class="w3-container w3-card-4 w3-small"><br>
	<span ><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;  '.$user['nome'].'</span>
	<br>
	<span><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp; '.$user['data_in'].'&nbsp;'.$user['data_out'].' </span>
	<hr>
    <div class=" w3-white w3-center" style="margin-top:-15px">
	&nbsp;<span>&nbsp;
    Finalizado</span>
    </div>
  </div><p></p>
</div>
			
';

        }
    }
mysqli_close($link);

?>
</div>
</div>
</div>
</body>
</html>