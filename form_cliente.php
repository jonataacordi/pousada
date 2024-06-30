<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charSet="utf-8"/>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cliente</title>
<script src="con_cep.js"></script>
<!-- <script src="validaTelefone.js"></script> -->

</head>
<body>
<?php
date_default_timezone_set('America/Sao_Paulo');
$horas = date("H:m");
$data = date('d/m/Y');
$ap = $_GET['ap'];
$cpfc = $_GET['cpf'];
?>

<div class="w3-container" style="width:950px">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3>CADASTRO DE CLIENTE
<a href="?link=ap.php" class="w3-bar-item w3-button w3-right" style="margin-right:15px"><i class="fa fa-times" aria-hidden="true"></i></a>
</h3>
<br>
</header>
<div class="container-cadastro w3-container w3-white">
<!-- <form method="post" action="?link=cad_cliente.php&ap=<?php echo $ap;?>"> -->
<form method="post" action="?link=cad_cliente.php">
<div class="w3-container w3-border w3-round-large">
<p>
<label> CPF </label>
<input name="cpf" class="w3-input w3-border w3-round-large" type="text"  id="cpf" size="11" maxlength="11" value="<?php echo $cpfc; ?>" style="width:138px;" oninput="validateCPFInput(this)" readonly required/>
<span class="w3-third w3-xlarge w3-border w3-center w3-teal w3-round-large" style="margin-top:-45px; margin-left:350px" required> Apartamento: <?php echo $ap;?> </span>
</p>
<p>
<div class="w3-small w3-text-red" id="cad_cliente" style="margin-top:-13px"><br></div>
</div>
</p>
<div class="w3-third" style="width:586px"> 
<div class="w3-container" >
<p>
<label> Nome do cliente </label>
<input name="nome" type="text" class="w3-input w3-border w3-round-large" id="nome"  required/>
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Fone </label>
<input name="fone" id="fone" type="text" class="w3-input w3-border w3-round-large"  maxlength="11" oninput="validateFone(this)" onblur="pesquisaFone(this.value);" required/>
</p>
</div>
</div>

<div class="w3-third" style="width:126px"> 
<div class="w3-container" >
<p>
<label>CEP </label>
<input name="cep" type="text" class="w3-input w3-border w3-round-large" id="cep" value="" maxlength="8" onblur="pesquisacep(this.value);"  required/>
</p>
</div>
</div>

<div class="w3-third" style="width:308px">
<div class="w3-container">
<p>
<label> Endereço </label>
<input name="rua" type="text" class="w3-input w3-border w3-round-large" id="rua" size="60" required/>
</p>
</div>
</div>
<div class="w3-third" style="width:156px">
<div class="w3-container">
<p>
<label> Cidade </label>
<input name="cidade" type="text" class="w3-input w3-border w3-round-large" id="cidade" required/>
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Estado </label>
<input  name="uf" type="text" class="w3-input w3-border w3-round-large w3-center" id="uf"  size="2" maxlength="2"  style="width:70px" required/>
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Acompanhantes </label>
<textarea name="acompanhantes" class="text_area  w3-input w3-border w3-round-large" id="acompanhantes"  cols="30" rows="7" disabled="disabled"></textarea>
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Data entrada / Horas</label>
<input name="data_in" type="text" class="w3-input w3-border w3-round-large" id="data_in" value="<?php echo $data. ' '.$horas; ?>" style="width:170px"  disabled="disabled" />
</p>
</div>
</div>

<div class="w3-third" style="width:70px; margin-left:-90px" >
<div class="w3-container">
<p>
<label> Dias </label>
<input name="dia" type="text" class=" w3-input w3-border w3-round-large w3-center" id="dia" value="" size="2" maxlength="2"  onblur="pesquisadia(this.value);" placeholder="01" disabled="disabled" required/>
</p>
</div>
</div>


<div class="w3-third">
<div class="w3-container">
<p>
<label> Data saída / Horas</label>
<input name="data_out" type="text" class="w3-input w3-border w3-round-large" id="data_out" style="width:170px" disabled="disabled"/>
</p>

</div>
</div>
<div class="w3-third">
<label> Opção </label>
<div class="w3-container w3-border w3-round-large" style="width:280px">

  <input class="w3-radio" type="radio" name="situacao" value="Reservado" disabled="disabled" >
  <label>Reservar</label>
  <p>
  <input class="w3-radio w3-container" type="radio" name="situacao" value="Check-In" disabled="disabled">
  <label>Check-In</label></p>
</div>
</div>

<div class="w3-third">
<label > Situação do Pagamento </label>
<div class="w3-container w3-border w3-round-large" style="width:280px">

  <input class="w3-radio" type="radio" name="pago" value="Sim" disabled="disabled">
  <label>Sim esta pago</label>
  <p>
  <input class="w3-radio w3-border" type="radio" name="pago" value="Não" disabled="disabled">
  <label>Não esta pago</label></p>
  <input type="hidden" name="ap" id="ap" value="<?php echo $ap;?>"/>
  <input type="hidden" name="horas" id="horas" value="<?php echo $horas;?>" disabled="disabled"/>
</div>
</div>
</div>
 <br>
<footer class="w3-light-grey w3-center">
<br>
 <button class="btn-form_in-voltar" onclick="history.back()"><i class="fa-solid fa-rotate-left" aria-hidden="true"></i> Voltar</button>
 <button class="btn-form_in-cadastrar"> Cadastrar</button>
 <!--<a href="?link=form_in.php&ap=<?php echo $ap?>"><button class="btn-form_in-voltar"><i class="fa-solid fa-rotate-left" aria-hidden="true"></i> Voltar</button></a>-->
 <!--<button class="w3-button w3-border w3-round-large">Cadastrar</button>-->
 <br><br />
</footer>
    </form>
    </div>
  </div>
</div>



<!--<script src="con_cpf.js"></script>-->
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<script>
    function limpa_formulario() {
      // Limpa valores do formulário de cep.
      document.getElementById('cpf').value = ("");
      document.getElementById('nome').value = ("");
      document.getElementById('fone').value = ("");
      document.getElementById('cep').value = ("");
      document.getElementById('rua').value = ("");
      document.getElementById('cidade').value = ("");
      document.getElementById('uf').value = ("");
      document.getElementById('acompanhantes').value = ("");
      document.getElementById('data_out').value = ("");
      document.getElementById("cad_cliente").innerHTML = "<br>";
      document.getElementById('ap').value = ("");
    }

    function limpa_formulario_cpf() {
      // Limpa valores do formulário de cep.
      document.getElementById('nome').value = ("");
      document.getElementById('fone').value = ("");
      document.getElementById('cidade').value = ("");
      document.getElementById('uf').value = ("");
      document.getElementById('rua').value = ("");
      document.getElementById('acompanhantes').value = ("");
      document.getElementById('data_out').value = ("");
      document.getElementById("cad_cliente").innerHTML = "<br>";
      document.getElementById('ap').value = ("");
    }

    function cpf_callback(conteudo) {
      if (!("erro" in conteudo)) {
        // Atualiza os campos com os valores.
        document.getElementById('nome').value = (conteudo.nome);
        document.getElementById('fone').value = (conteudo.fone);
        document.getElementById('cidade').value = (conteudo.cidade);
        document.getElementById('uf').value = (conteudo.uf);
        document.getElementById('rua').value = (conteudo.rua);
        document.getElementById('cpf').value = (conteudo.cpf);
        document.getElementById('cep').value = (conteudo.cep);
        document.getElementById('cad_cliente').innerHTML = "<br>";
        var input = document.querySelector("#nome");
        var input2 = document.querySelector("#fone");
        input.disabled = false;
        input2.disabled = false;
      } else {
        // CPF não Encontrado.
        var apc = document.getElementById('ap').value;

        Swal.fire({
          title: 'CPF não encontrado!',
          text: "Deseja cadastrar um novo cliente?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim, cadastrar!',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            var apc = document.getElementById('ap').value;
            window.location.href = '?link=form_cliente.php&cpf=' + cpf + '&ap=' + '<?php $ap = $_GET['ap']; echo $ap?>'
            //window.location.href = '?link=form_cliente.php&cpf=' + window.cpf + '&ap=' + window.apc;                       
          }
        });
      }
    }

      function validateCPFInput(input) {
      // Remove caracteres não numéricos
      input.value = input.value.replace(/\D/g, '');

      // Limita a 11 caracteres
      if (input.value.length > 11) {
        input.value = input.value.slice(0, 11);
      }
    }

    function pesquisacpf(valor) {
      // Nova variável "CPF" somente com dígitos.
      var cpf = valor.replace(/\D/g, '');
      
      // define cpf como global
      window.cpf = cpf; 

      // Verifica se campo cep possui valor informado.
      if (cpf != "") {
        // Expressão regular para validar o CPF.
        var validacpf = /^[0-9]{11}$/;

        // Valida o formato do CPF.
        if (validacpf.test(cpf)) {
          // Preenche os campos com "..." enquanto consulta webservice.
          document.getElementById('nome').value = "...";
          document.getElementById('fone').value = "...";
          document.getElementById('cidade').value = "...";
          document.getElementById('uf').value = "...";
          document.getElementById('rua').value = "...";

          var input = document.querySelector("#nome");
          var input2 = document.querySelector("#fone");
          input.disabled = true;
          input2.disabled = true;
          var apc = document.getElementById('ap');
          /*document.getElementById("cad_cliente").innerHTML = 'Cliente não cadastrado! <a href="?link=form_cliente.php&cpf=' + cpf + '&ap=' + apc.value + '" class="w3-botton w3-red w3-border w3-round-large w3-small">&nbsp;<span class="w3-tiny"> Cadastrar </span>&nbsp; </a>';*/

          // Cria um elemento javascript.
          var script = document.createElement('script');

          // Sincroniza com o callback.
          script.src = 'json_cpf.php?Cpf=' + cpf + '&callback=cpf_callback';

          // Insere script no documento e carrega o conteúdo.
          document.body.appendChild(script);

        } else {
          // CPF é inválido.
          limpa_formulario_cpf();
          /*alert("Formato do CPF inválido.\r favor digitar só os numeros!");*/
        }
      } else {
        // CPF sem valor, limpa formulário.
        limpa_formulario_cpf();
      }
    }
</script>
</body>
</html>