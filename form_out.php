<!DOCTYPE html>
<html>
<title>CHECK-OUT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>

<div class="form-out w3-container" style="width:950px">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3>CHECK - OUT
<a href="?link=ap.php" class="w3-bar-item w3-button w3-right" style="margin-right:15px"><i class="fa fa-times" aria-hidden="true"></i></a>
</h3>
<br>
</header>
<div class="w3-container w3-white" style="font-size:12px">
<table class="w3-table-all " width="100%">
  <tr class="w3-grey w3-center">
    <th colspan="4"  class=" w3-center"><i class="fa fa-address-book-o" aria-hidden="true"></i> Dados do Cliente </th>
    
  </tr>
  <?php
 $diaria = "180";
 $id = $_GET['id'];
require("conexao.php");
 echo '<span class="w3-border w3-light-grey">&emsp;Valor da diária: '.$diaria.'&emsp;</span>';
if ($result = mysqli_query($link, "SELECT * FROM cad_check_in where Id LIKE '$id'")){
        while($user = mysqli_fetch_assoc($result)){
            
        echo '
			<tr>
  <th colspan="4" class=" w3-center">
  <span class="w3-third" >Cliente: '.$user['nome'].'</span>
  <span class="w3-third w3-right" style="width:150px">Apartamento: '.$user['ap'].'</span>
  
  
  
  </td>
  
  </tr>
';
echo '<th colspan="4">
	<div class="w3-container w3-center">
	
	<h2> Histórico da hospedagem </h2>
	<hr>
	<p>
	<span class="w3-third" style="width:150px">Data entrada<br>'.$user['data_in'].'</span>
	<span class="w3-third" style="width:150px">Data Saída<br>'.$user['data_out'].'</span>
	<span class="w3-third w3-center" style="width:150px">Horário entrada<br>'.$user['horas'].'</span>
	<span class="w3-third" style="width:150px">Horário Saída<br>'.$user['horas'].'</span>
	</p><br>
	<p>
	<br><hr>
	<span class="w3-third w3-center">Acompanhantes: '.$user['acompanhantes'].'</span>
	<span class="w3-third w3-center">Tempo da hospedagem: '.$user['dia'].' dias</span>
	</p>
	<p>
	<br><hr>	
	<span class="w3-third w3-right" style="width:150px"> Valor total :R$ '.number_format($diaria*$user['dia'],2,",",".").'</span>
	</p>
	</div>
	<form action="?link=cad_checkout.php&id='.$user['Id'].'" method="post" class="w3-center">
	<p>
	<input type="hidden" name="situacao" value="Check-Out" />
	<input type="hidden" name="valor" value="'.number_format($diaria*$user['dia'],2,",",".").'" />
	<input type="hidden" name="pago" value="Sim" />
	<input type="hidden" name="id" value="'.$user['Id'].'" />
	<embed> Finalizar o Check - Out..! </embed>
	<br><br>
	<button class="w3-btn w3-light-grey w3-round-xlarge"> OK </button>
	</p>
	</form>
	</th>';
		}
    }

	
mysqli_close($link);
?>
</table>
<br><br>
</div>
</div>
</div>
</body>
</html>


<!-- <form action="?link=cad_checkout.php&id='.$user['Id'].'" method="post" class="w3-center"> -->