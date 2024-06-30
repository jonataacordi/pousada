<!DOCTYPE html>
<html>
<title>lista Hospedes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>

<div class="lista-hospedes w3-container">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3><i class="bi bi-people" aria-hidden="true"></i> LISTA DE HÓSPEDES
<a href="?link=ap.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-times" aria-hidden="true"></i></a>
</h3>
<br>
</header>
<div class="w3-container w3-white" style="font-size:12px">
<table class="w3-table-all " width="100%">
  <tr class="w3-grey w3-center">
    <th  class=" w3-center"><i class="fa fa-address-book-o" aria-hidden="true"></i> Cliente</th>
    <th  class=" w3-center">Contato</th>
    <th class=" w3-center">Apartamento</th>
  </tr>
  <?php
 
require("conexao.php");

if ($result = mysqli_query($link, "SELECT * FROM cad_check_in ORDER BY nome DESC")){
        while($user = mysqli_fetch_assoc($result)){
            if ($user['situacao']=="Check-In"){
			echo '
			<tr>
  <th><i class="fa fa-user-circle-o" aria-hidden="true"></i> '.$user['nome'].'</td>
  <th  class=" w3-center"><i class="fa fa-mobile" aria-hidden="true"></i> '.$user['fone'].'</td>
  <th  class=" w3-center"><i class="fa fa-bed" aria-hidden="true"></i> '.$user['ap'].'</td>
  </tr>
';
 }
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
