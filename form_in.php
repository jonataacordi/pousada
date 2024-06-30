<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charSet="utf-8"/>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="con_cep.js"></script>
<script src="validaTelefone.js"></script>
<script src="data_out.js"></script>


<title>Documento sem título</title>
</head>

<body>
<?php
date_default_timezone_set('America/Sao_Paulo');
$horas = date("H:m");
$data = date('d/m/Y');
$ap = $_GET['ap'];
$cpf = isset($_GET['cpf'])? $_GET['cpf']:null;
?>

<div class="w3-container" style="margin-top:px; width:950px">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3>CADASTRO DE CHECK-IN
<a href="?link=ap.php" class="w3-bar-item w3-button w3-right" style="margin-right:15px"><i class="fa fa-times" aria-hidden="true"></i></a>
</h3>
<br>
</header>

<div class="container-cadastro w3-container w3-white">
<form id="cadastroForm" action="?link=cad_checkin.php" method="post">
<div class="w3-container w3-border w3-round-large">
<p>
 <label for="cpf" class="cpf">CPF</label>
<input name="cpf" class="w3-input w3-border w3-round-large" type="text"  id="cpf" value="<?php echo $cpf; ?>" size="11" maxlength="11" oninput="validateCPFInput(this)" onblur="pesquisacpf(this.value);" style="width:138px;" required/>
<span class="w3-third w3-xlarge w3-border w3-center w3-teal w3-round-large" style="margin-top:-45px; margin-left:350px"> Apartamento: <?php echo $ap;?> </span>
</p>
<p>
<div class="w3-small w3-text-red" id="cad_cliente" style="margin-top:-13px"><br></div>
</div>
</p>
<div class="w3-third" style="width:586px"> 
<div class="w3-container" >
<p>
<label> Nome do cliente </label>
<input name="nome" id="nome" type="text" class="w3-input w3-border w3-round-large" required/>
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
<input name="cep" id="cep" type="text" class="w3-input w3-border w3-round-large"  onblur="pesquisacep(this.value);" maxlength="8" required/>
</p>
</div>
</div>

<div class="w3-third" style="width:308px">
<div class="w3-container">
<p>
<label> Endereço </label>
<input name="rua" id="rua" type="text" class="w3-input w3-border w3-round-large"  size="60" required/>
</p>
</div>
</div>
<div class="w3-third" style="width:156px">
<div class="w3-container">
<p>
<label> Cidade </label>
<input name="cidade" id="cidade" type="text" class="w3-input w3-border w3-round-large" required/>
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Estado </label>
<input  name="uf" id="uf"  type="text" class="w3-input w3-border w3-round-large w3-center"  size="2" maxlength="2"  style="width:70px" required/>
</p>
</div>
</div>

<div class="w3-third">
<div class="w3-container">
<p>
<label> Acompanhantes </label>
<textarea name="acompanhantes" id="acompanhantes" class="text_area w3-input w3-border w3-round-large" cols="30" rows="7"></textarea>
</p>
</div>
</div>

<div class="w3-third">
<div class="w3-container">
<p>
<label> Data entrada </label>
<input name="data_in" id="data_in" type="text" class=" w3-input w3-border w3-round-large"  style="width:110px" value="<?php echo $data; ?>" maxlength="10"  />
</p>
</div>
</div>

<div class="w3-third" style="width:70px; margin-left:-150px" >
<div class="w3-container">
<p>
<label> Dias </label>
<input name="dia" id="dia" type="text" class="w3-input w3-border w3-round-large w3-center" value="" size="2" maxlength="2" onblur="pesquisadia(this.value);" placeholder="01"/>
</p>
</div>
</div>


<div class="w3-third" style="margin-left:-60px" >
<div class="w3-container">
<p>
<label> Data saída </label>
<input name="data_out" id="data_out" type="text" class="w3-input w3-border w3-round-large" maxlength="10" style="width:110px; "/>
</p>
</div>
</div>

<div class="w3-third" style="margin-left:-120px; width:100px" >
<div class="w3-container">
<p>
<label> Horário </label>
<input type="text" name="hora" id="hora" class="w3-input w3-border w3-round-large w3-center" value="<?php echo $horas;?>" maxlength="5"/>
</p>
</div>
</div>



<div class="w3-third">
<label> Opção </label>
<div class="w3-container w3-border w3-round-large" style="width:280px">

  <input class="w3-radio" type="radio" name="situacao" id="situacao" value="Reservado"/>
  <label>Reservar</label>
  <p>
  <input class="w3-radio w3-container" type="radio" name="situacao" id="situacao" value="Check-In"/>
  <label>Check-In</label></p>
</div>
</div>

<div class="w3-third">
<label > Situação do Pagamento </label>
<div class="w3-container w3-border w3-round-large" style="width:280px">

  <input class="w3-radio" type="radio" name="pago" value="Sim" >
  <label>Sim esta pago</label>
  <p>
  <input class="w3-radio w3-border" type="radio" name="pago" value="Não">
  <label>Não esta pago</label></p>
  <input type="hidden" name="ap" id="ap" value="<?php echo $ap;?>"/>
  <input type="hidden" name="soma" id="soma" value="1" />  
</div>
</div>
</div>
 <br>
<footer class="w3-light-grey w3-center">
<br>
 <button class="btn-form_in-voltar" onclick="history.back()"><i class="fa-solid fa-rotate-left" aria-hidden="true"></i> Voltar</button>
 <button class="btn-form_in-cadastrar"> Cadastrar</button>
 <button class="btn-form_in-limpar" onclick="limpa_formulario()"> Limpar</button>
 <!--<button class="w3-button w3-border w3-round-large"><i class="fa fa-sign-out" aria-hidden="true"></i> Cadastrar entrada</button>-->
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
          confirmButtonColor: '#1A8973',
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
          document.getElementById('nome').setAttribute('readonly', true);
          document.getElementById('fone').setAttribute('readonly', true);
          document.getElementById('cidade').setAttribute('readonly', true);
          document.getElementById('uf').setAttribute('readonly', true);
          document.getElementById('rua').setAttribute('readonly', true);
          //document.getElementById('nome').value = "...";
          //document.getElementById('fone').value = "...";
          //document.getElementById('cidade').value = "...";
          //document.getElementById('uf').value = "...";
          //document.getElementById('rua').value = "...";

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