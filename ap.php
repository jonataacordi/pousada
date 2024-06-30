<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Apartamentos</title>
</head>

<body>
<?php
require("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y');
$venda = 0;
$res = 0;
$in = 0;
$inv = 0;
//$ap =0;
$sitv ="";
for ($x = 1; $x <= 15; $x++){
	$sql = mysqli_query($link, "SELECT * FROM cad_check_in WHERE ap LIKE '$x'") or die( 
  mysqli_error($link) //caso haja um erro na consulta 
);
while ($users = mysqli_fetch_array($sql)){
     $venda = $users['ap'];
     $inv = $users['soma'];
	 $nomev = $users['nome'];
	 $cheqv = $users['data_in']." - ".$users['data_out'];
	 $sitv = $users['situacao'];
	 $sith = $users['horas'];
	 $data_out = $users['data_out'];
}
 if ( $venda == $x and $sitv == "Check-In" ){
     $icone = "fa fa-bed";
	 $cor = "w3-red";
	 $links = '?link=check_in.php&in=Check_In';
	 $resultado = mysqli_query($link, "SELECT sum($inv) FROM cad_check_in WHERE situacao LIKE 'Check-In'");
     $linhas = mysqli_num_rows($resultado);
       while($linhas = mysqli_fetch_array($resultado)){
     $in = $linhas['sum('.$inv.')'];
}

	 //$in = $inv;
	 $nome = $nomev;
	 $cheq = $cheqv;
	 $horas =$sith;
	  $cam = '<span><i class="fa fa-check-square-o" aria-hidden="true"></i> &nbsp;Oculpado </span>
	';
 }  else {
     $icone = "bi bi-door-open-fill";
	 $cor = "w3-teal";
	 $nome = "Livre";
	 $cheq = "";
	 $horas ="";
	 $cam = '<a href="?link=form_in.php&ap='.$x.'" ><i class="fa fa-sign-in w3-medium" aria-hidden="true"></i>&nbsp;&nbsp;'.$nome.'</a>';
	 $links = "?link=form_in.php&ap=".$x;
 }
 if ($venda == $x and $sitv == "Reservado" ){
     $icone = "bi bi-calendar-check-fill";
	 $cor = "w3-orange";
	 $links = '?link=reservas.php&in=Reservado';
	 $resultado = mysqli_query($link, "SELECT sum($inv) FROM cad_check_in WHERE situacao LIKE 'Reservado'");
     $linhas = mysqli_num_rows($resultado);
       while($linhas = mysqli_fetch_array($resultado)){
     $res = $linhas['sum('.$inv.')'];
}
	 $nome = $nomev;
	 $cheq = $cheqv;
	 $cam = '<span><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;Reservado </span>
	';
 } 

 echo' <div class="w3-third w3-container w3-animate-opacity " style="width:280px; margin-bottom: 25px">
 <header class="w3-container '.$cor.' w3-center">
 <a href='.$links.' ><h3 style="color: white"><i class="'.$icone.'" aria-hidden="true"></i> Quarto '.$x.'</h3></a>
</header>
  <div class="w3-container w3-card-2 w3-white w3-small " style="width:100%"><br>
    <span><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;  '.$nome.'</span>
	<br>
	<span><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;'.$cheq.' </span>
	<br>
	<span><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;saida às:&nbsp;'.$horas.'</span>
	<div class="w3-row w3-center class="w3-small">
	<hr>
	<p>
	'.$cam.'
	</p> 
	</div>
	</div>
	
</div>';
}



?>
</body>
</html>