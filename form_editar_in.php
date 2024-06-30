<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charSet="utf-8"/>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="con_cep.js"></script>

<script src="data_out.js"></script>
<title>Editar check_in</title>
</head>

<body>

<div class="editar_check-in w3-container" style="margin-top:px; width:950px">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3>EDITAR CHECK-IN
<a href="?link=ap.php" class="w3-bar-item w3-button w3-right" style="margin-right:15px"><i class="fa fa-times" aria-hidden="true"></i></a>
</h3>
<br>
</header>
<?php
require("conexao.php");

$id = $_GET['id_in'];

if ($result = mysqli_query($link, "SELECT * FROM cad_check_in where Id LIKE '$id'")){
        while($user = mysqli_fetch_assoc($result)){
			
				
echo'		
<div class="container-cadastro w3-container w3-white">
<form action="acess.php?link=editar.php&id_in='.$user['Id'].'" method="post">
<div class="w3-container w3-border w3-round-large">
<p>
<label> CPF </label>
<input name="cpf" class="w3-input w3-border w3-round-large" type="text"  id="cpf" value="'.$user['cpf'].'" size="11" maxlength="11"  style="width:138px;"/>
<span class="w3-third w3-xlarge w3-border w3-center w3-teal w3-round-large" style="margin-top:-45px; margin-left:350px"> Apartamento:'.$user['ap'].' </span>
</p>
<p>
<div class="w3-small w3-text-red" id="cad_cliente" style="margin-top:-13px"><br></div>
</div>
</p>
<div class="w3-third" style="width:586px"> 
<div class="w3-container" >
<p>
<label> Nome do cliente </label>
<input name="nome" id="nome" type="text" value="'.$user['nome'].'" class="w3-input w3-border w3-round-large" />
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Fone </label>
<input name="fone" id="fone" type="text"  value="'.$user['fone'].'"class="w3-input w3-border w3-round-large"  maxlength="11"  />
</p>
</div>
</div>

<div class="w3-third" style="width:126px"> 
<div class="w3-container" >
<p>
<label>CEP </label>
<input name="cep" id="cep" type="text" value="'.$user['cep'].'" class="w3-input w3-border w3-round-large"  onblur="pesquisacep(this.value);" value="" maxlength="8"  />
</p>
</div>
</div>

<div class="w3-third" style="width:308px">
<div class="w3-container">
<p>
<label> Endereço </label>
<input name="rua" id="rua" type="text" value="'.$user['rua'].'" class="w3-input w3-border w3-round-large"  size="60"/>
</p>
</div>
</div>
<div class="w3-third" style="width:156px">
<div class="w3-container">
<p>
<label> Cidade </label>
<input name="cidade" id="cidade" type="text" value="'.$user['cidade'].'" class="w3-input w3-border w3-round-large"  />
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Estado </label>
<input  name="uf" id="uf"  type="text" value="'.$user['uf'].'" class="w3-input w3-border w3-round-large w3-center"  size="2" maxlength="2"  style="width:70px" />
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Acompanhantes </label>
<textarea name="acompanhantes" id="acompanhantes" class="text_area w3-input w3-border w3-round-large"   cols="30" rows="7">'.$user['acompanhantes'].'</textarea>
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Data entrada </label>
<input name="data_in" id="data_in" type="text" class="w3-input w3-border w3-round-large"  style="width:110px" value="'.$user['data_in'].'" maxlength="10"  />
</p>
</div>
</div>

<div class="w3-third" style="width:70px; margin-left:-150px" >
<div class="w3-container">
<p>
<label> Dias </label>
<input name="dia" id="dia" type="text" class="w3-input w3-border w3-round-large w3-center" value="'.$user['dia'].'" size="2" maxlength="2" onblur="pesquisadia(this.value);" placeholder="01"/>
</p>
</div>
</div>


<div class="w3-third" style="margin-left:-60px" >
<div class="w3-container">
<p>
<label> Data saída </label>
<input name="data_out" id="data_out" type="text" value="'.$user['data_out'].'" class="w3-input w3-border w3-round-large" maxlength="10" style="width:110px; "/>
</p>

</div>
</div>

<div class="w3-third" style="margin-left:-120px; width:100px" >
<div class="w3-container">
<p>
<label> Horário </label>
<input type="text" name="hora" id="hora" value="'.$user['horas'].'" class="w3-input w3-border w3-round-large w3-center" value="<?php echo $horas;?>" maxlength="5"/>
</p>
</div>
</div>



<div class="w3-third">
<label> Opção </label>
<div class="w3-container w3-border w3-round-large" style="width:280px">

  <input class="w3-radio" type="radio" name="situacao" id="situacao" value="Reservado"/>
  <label>Reservar</label>
  <p>
  <input class="w3-radio w3-container" checked="checked" type="radio" name="situacao" id="situacao" value="Check-In"/>
  <label>Check-In</label></p>
</div>
</div>

<div class="w3-third">
<label > Situação do Pagamento </label>
<div class="w3-container w3-border w3-round-large" style="width:280px">

  <input class="w3-radio" type="radio" name="pago" value="Sim" disabled="disabled" >
  <label>Sim esta pago</label>
  <p>
  <input class="w3-radio w3-border" type="radio" name="pago" value="Não" disabled="disabled">
  <label>Não esta pago</label></p>
  <input type="hidden" name="ap" id="ap" value="'.$user['ap'].'"/>
  <input type="hidden" name="soma" id="soma" value="1" />  
  <input type="hidden" name="id" id="id" value="'.$user['Id'].'" />  
</div>
</div>
</div>
 <br>

';
	}
		 }
?>
<footer class="w3-light-grey w3-center">
<br>
 <button class="btn-form_in-voltar" onclick="history.back()"><i class="fa-solid fa-rotate-left" aria-hidden="true"></i> Voltar</button>
 <button class="btn-form_in-cadastrar"> Atualizar</button>
      
 <!--<button class="w3-button w3-border w3-round-large"><i class="fa fa-sign-in" aria-hidden="true"></i> Cadastrar</button>-->
 <br><br />
</footer>
    </form>
    </div>
  </div>
</div>
<script src="con_cpf.js"></script>
</body>
</html>
