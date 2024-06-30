<!DOCTYPE html>
<html>
<title>Pousada Quinta do Ypuã</title>
<meta charSet="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="apple-touch-icon" sizes="192x192" href="images/icons/android-chrome-512x512.png">
<link rel="apple-touch-icon" sizes="192x192" href="images/icons/android-chrome-192x192.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
<link rel="manifest" href="images/icons/site.webmanifest">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="con_cep.js"></script>
<!--<script src="validaTelefone.js"></script>-->
<script>
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

      } 
    }

        /*------------------ Valida Fone -----------------------*/

      function validateFone(input) {
      // Remove caracteres não numéricos
      input.value = input.value.replace(/\D/g, '');

      // Limita a 11 caracteres
      if (input.value.length > 11) {
        input.value = input.value.slice(0, 11);
      }
    }

    function pesquisaFone(valor) {
      // Nova variável "fone" somente com dígitos.
      var fone = valor.replace(/\D/g, '');
      
      // define a variável fone como global
      window.fone = fone; 

      // Verifica se campo fone possui valor informado.
      if (fone != "") {
        // Expressão regular para validar o telefone.
        var validaFone = /^[0-9]{11}$/;
        
        } 
      } 
    
</script>

<style> a{text-decoration: none;} </style>

<body class="w3-responsive">

<header class="cabecalho-topo" style="display: flex">
      <!--1 - Parte = Elementos Header esquerda-->
      <div class="info-header">
        <!-- Container pai dos elementos a esquerda do header-->
        <div class="logo">
          <!--Logo Elementos Header esquerda-->
          <a class="link" href="acess.php?link=ap.php">
          <h3>Dashboard</h3>
          </a>
        </div>
        <div class="icons-header">
          <!-- Div class Elementos Header esquerda-->
          <i class="fa-solid fa-magnifying-glass icone-ativo" id="searchIcon"></i>
            <div class="content-search">
                <i class="fa-solid fa-magnifying-glass "></i>
                <input type="text" id="searchInput" placeholder="Buscar nome ou CPF" class="input-searchInput" oninput="fetchResults()" style="outline: 0;">
                <!-- Campo de pesquisa Elementos Header esquerda-->
                <!-- Icone Elementos Header esquerda-->
            </div>
                <!-- DIV que retorna os nomes do campo de busca
                <div id="suggestions" class="suggestions"></div>-->
                <div id="suggestions" class="suggestions "></div>
        </div>
      </div>

      <!--2 - Parte = Elementos Header direita-->
      <div class="info-header" style="align-items: center">
        <!-- Container pai dos elementos a direita do header-->
        <i class="fa-solid fa-envelope"></i>
        <!-- Icone Elementos Header direita-->
        <i class="fa-solid fa-bell"></i>
        <!-- Icone Elementos Header direita-->
        <img src="https://www.aprender21.com/images/colaboradores/secretaria.webp" alt="avatar-header"/>
        <!-- Avatar Elementos Header esquerda-->
      </div>
    </header>
    <!--FIM HEADER-->

<section class="main">

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
<div class="container-logo">
  <!-- <a href="http://pousada.rf.gd/acess.php?link=ap.php"><img src="https://static.wixstatic.com/media/b87f83_9f4625b043a944daaf5fddefc7d73d0e~mv2.png/v1/fill/w_80,h_80,al_c,q_85,enc_auto/logo-pousada-quinta-do-ypua.png" width="90" class="w3-center" style="margin-left:100px; margin-top:15px"> </a>-->
  <a class="link-logo" href="https://pousada.wuaze.com/acess.php?link=ap.php"><img class="logo-sidebar" src="../images/logo-pousada-quinta-do-ypua.png"> </a>
</div>
 
            <nav class="sidebar-left"><!--Responsável por guardar as barras ao expandir o menu-->
                <!--Ícone resposnável por fechar e expandir o menu-->
                
                <!--<div class="btn-expandir">
                    <i class="bi bi-list" id="btn-expandir"></i>
                </div>-->
                
                <!--Links menu-->
                <ul class="container-ul">
                    <li class="item-menu ativo">
                        <a class="link" href="acess.php?link=ap.php">
                            <span class="icon"><i class="bi bi-house-door bi-2x" aria-hidden="true"></i>
                            <span class="txt-link">Dashboard</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="acess.php?link=check_in.php&in=Check_In">
                            <span class="icon"><i class="bi bi-building-check" aria-hidden="true"></i>
                            <!--<span class="icon"><i class="fa fa-inbox fa-2x" aria-hidden="true"></i></span>-->
                            <span class="txt-link">Checkin</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="acess.php?link=check_out.php&in=Check_Out">
                            <span class="icon"><i class="bi bi-building-x aria-hidden="true"></i>
                            <!--<span class="icon"><i class="fa fa-cubes fa-2x" aria-hidden="true"></i></span>-->
                            <span class="txt-link">Checkout</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="acess.php?link=reservas.php&in=Reservado">
                            <span class="icon"><i class="bi bi-journal-minus" aria-hidden="true"></i>
                            <!--<span class="icon"><i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i></span>-->
                            <span class="txt-link">Reservas</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="acess.php?link=list_hospedes.php">
                            <span class="icon"><i class="bi bi-people"" aria-hidden="true"></i>
                            <!--<span class="icon"><i class="fa fa-id-badge fa-2x" aria-hidden="true"></i></span>-->
                            <span class="txt-link">Hóspedes</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="index.php">
                            <span class="icon"><i class="bi bi-box-arrow-left" aria-hidden="true"></i></span>
                            <!--<span class="icon"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></span>-->
                        
                            <span class="txt-link">Sair</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <br />
            <hr class="quebra-linha-sidebarLeft">
            <br />
</div><!--sidebar-->

            <div class=" content" id="menu-hamburger">
                <div class="titulo-secao">
                    <h2><i class="bi bi-house-door"></i> Pousada Quinta do Ypuã</h2>
                    <hr>
<?php
 require "conexao.php";
 $res = 0;
$ins = 0;
$inv = 0;
 $x = "";
 $sql = mysqli_query($link, "SELECT * FROM cad_check_in WHERE ap LIKE '%$x'") or die( 
  mysqli_error($link) //caso haja um erro na consulta 
);
while ($users = mysqli_fetch_array($sql)){
     
     $inv = $users['soma'];
	 
}
 
 $resultadoin = mysqli_query($link, "SELECT sum($inv) FROM cad_check_in WHERE situacao LIKE 'Check-In'");
     $chin = mysqli_num_rows($resultadoin);
       while($ckin = mysqli_fetch_array($resultadoin)){
     
	 $ins = $ckin['sum('.$inv.')'];
}

$resultado = mysqli_query($link, "SELECT sum($inv) FROM cad_check_in WHERE situacao LIKE 'Reservado'");
     $linhas = mysqli_num_rows($resultado);
       while($linhas = mysqli_fetch_array($resultado)){
     
	 $res = $linhas['sum('.$inv.')'];
}
 
 
$cam=isset($_GET['link'])? $_GET['link']:null;

if($cam==""){
	$cam="login.php";
}

//include $cam;

$qtos = 15-$ins-$res;

if($res == ""){
    $res = 0;
    
}if($ins == ""){
    $ins = 0;
}if($qtos == ""){
    $qtos = 0;
}

echo'
<br><div class="content-dashbord-info"><p><samp>
 <div class="box-info">
        <div class="box-info-first">
            <div class="info-text">
                <h3 class="h3-info-text"><i class="bi bi-bar-chart-line-fill"></i><span class="ativar-info-qntd">15</span><span class="span-h3-info-text">Quartos: 15</span></h3>
            </div>
        </div>
        <div class="box-info-second">
            <div class="info-text">
                <h3 class="h3-info-text"><i class="bi bi-door-open-fill"></i><span class="ativar-info-disp">'.$qtos.'</span><span class="span-h3-info-text">Disponível: '.$qtos.'</span></h3>
            </div>
        </div>
        <div class="box-info-third ">
            <div class="info-text">
                <h3 class="h3-info-text"><i class="fa fa-bed"></i><span class="ativar-info-ocpd">'.$ins.'</span><span class="span-h3-info-text">Ocupado: '.$ins.'</span></h3>
            </div>
        </div>
        <div class="box-info-fourth">
            <div class="info-text">
                <h3 class="h3-info-text"><i class="bi bi-calendar-check-fill"></i><span class="ativar-info-reser">'.$res.'</span><span class="span-h3-info-text">Reservado: '.$res.'</span></h3>
            </div>
        </div>
 </div>
 </samp>
<!--
<span class="dashbord-info w3-light-grey w3-border w3-round-large ">&nbsp; Total Quartos: 15 &nbsp;</span> &nbsp;<span class="dashbord-info w3-teal w3-round-large ">&nbsp; Disponível: '.$qtos.' &nbsp; </span>&nbsp; <span class="dashbord-info w3-red w3-round-large ">&nbsp; Ocupado: '.$ins.' &nbsp;</span>&nbsp; <span class="dashbord-info w3-orange w3-round-large ">&nbsp; Reservado: '.$res.' &nbsp;</span></samp></p>-->
</div>

';
?>                  
                </div>         
            <div class="categoria" id="categoria">
            <!-- Páginas que ficarão abaixo do Dashboard de informações -->
                
<?php 
  require 'conexao.php';

    $cpf = isset($_GET['cpf']) ? $_GET['cpf'] : '';
    $nome = isset($_GET['nome']) ? $_GET['nome'] : '';

    if ($cpf) {
      $result = mysqli_query($link, "SELECT * FROM cad_cliente WHERE cpf = '$cpf'");
    } elseif ($nome) {
      $result = mysqli_query($link, "SELECT * FROM cad_cliente WHERE nome = '$nome'");
    }

    if ($result && $user = mysqli_fetch_assoc($result)) {
      echo '

<div class="editar_check-in w3-container" style="margin-top:px; width:950px">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3>EDITAR CLIENTE
<a href="acess.php?link=ap.php" class="w3-bar-item w3-button w3-right" style="margin-right:15px"><i class="fa fa-times" aria-hidden="true"></i></a>
</h3>
<br>
</header>
      <div class="container-editar w3-container w3-white">
        <form action="atualizar_cad_cliente.php" method="get">
          <div class="w3-third" style="width:586px"> 
            <div class="w3-container">
              <p>
                <label> CPF </label> 
                <input name="cpf" class="w3-input w3-border w3-round-large" type="text" id="cpf" value="' . $user['cpf'] . '" size="11" maxlength="11" oninput="validateCPFInput(this)" onblur="pesquisacpf(this.value);" style="width:138px;"/>
              </p>
            </div>
          </div>
          <div class="w3-third" style="width:586px"> 
            <div class="w3-container">
              <p>
                <label> Nome do cliente </label>
                <input name="nome" id="nome" type="text" value="' . $user['nome'] . '" class="w3-input w3-border w3-round-large" />
              </p>
            </div>
          </div>
          <div class="w3-third">
            <div class="w3-container">
              <p>
                <label> Fone </label>
                <input name="fone" id="fone" type="text" value="' . $user['fone'] . '" class="w3-input w3-border w3-round-large" maxlength="11" oninput="validateFone(this)" onblur="pesquisaFone(this.value);"/>
              </p>
            </div>
          </div>
          <div class="w3-third" style="width:126px"> 
            <div class="w3-container">
              <p>
                <label>CEP </label>
                <input name="cep" id="cep" type="text" value="' . $user['cep'] . '" class="w3-input w3-border w3-round-large" onblur="pesquisacep(this.value);" maxlength="8" />
              </p>
            </div>
          </div>
          <div class="w3-third" style="width:308px">
            <div class="w3-container">
              <p>
                <label> Endereço </label>
                <input name="rua" id="rua" type="text" value="' . $user['rua'] . '" class="w3-input w3-border w3-round-large" size="60"/>
              </p>
            </div>
          </div>
          <div class="w3-third" style="width:156px">
            <div class="w3-container">
              <p>
                <label> Cidade </label>
                <input name="cidade" id="cidade" type="text" value="' . $user['cidade'] . '" class="w3-input w3-border w3-round-large" />
              </p>
            </div>
          </div>
          <div class="w3-third">
            <div class="w3-container">
              <p>
                <label> Estado </label>
                <input name="uf" id="uf" type="text" value="' . $user['uf'] . '" class="w3-input w3-border w3-round-large w3-center" size="2" maxlength="2" style="width:70px" />
              </p>
            </div>
          </div>

          <footer class="footer w3-light-grey w3-center">
            <br>
            <button class="btn-form_in-voltar" onclick="history.back()">
              <i class="fa-solid fa-rotate-left" aria-hidden="true"></i> Voltar
            </button>
            <button class="btn-form_in-cadastrar"> Atualizar</button>
            <br><br />
          </footer>
        </form>
      </div>
      ';
    }
?>
            </div>
        </div>

</section><!--main-->

<script src="./js/sidebarLeft.js"></script>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<script>
function fetchResults() {
  const query = document.getElementById('searchInput').value.trim();

  if (query.length > 0) {
    fetch(`search.php?q=${encodeURIComponent(query)}`)
      .then(response => response.json())
      .then(data => {
        
        const suggestionsDiv = document.getElementById('suggestions');
        suggestionsDiv.innerHTML = '';

        if (data.length > 0) {
          data.forEach(item => {
            const div = document.createElement('div');
            div.className = 'suggestion-item';
            div.textContent = `${item.nome} | ${item.cpf}`;
            div.onclick = () => selectSuggestion(item);
            suggestionsDiv.appendChild(div);
           
          });
        } else {
          suggestionsDiv.innerHTML = '<div class="suggestion-item">Nenhum resultado encontrado</div>';
        }
        suggestionsDiv.style.display = 'block';
      })
      .catch(error => console.error('Erro ao buscar sugestões:', error));
  } else {
    document.getElementById('suggestions').style.display = 'none';
  }
}

function selectSuggestion(item) {
  const cpf = item.cpf;
  const nome = item.nome;
  window.location.href = `editar_cliente.php?cpf=${cpf}&nome=${encodeURIComponent(nome)}`;
}

</script>

<script>
document.getElementById('searchIcon').addEventListener('click', function() {
  const searchIcon = document.getElementById('searchIcon');
  const contentSearch = document.querySelector('.content-search');

  if (searchIcon.classList.contains('icone-ativo')) {
    searchIcon.classList.remove('icone-ativo');
    contentSearch.classList.add('ativo');
  } else {
    searchIcon.classList.add('icone-ativo');
    contentSearch.classList.remove('ativo');
  }
});

document.addEventListener('click', function(event) {
  const searchIcon = document.getElementById('searchIcon');
  const contentSearch = document.querySelector('.content-search');

  if (!contentSearch.contains(event.target) && event.target !== searchIcon && !searchInput.contains(event.target)) {
    searchIcon.classList.add('icone-ativo');
    contentSearch.classList.remove('ativo');
    document.getElementById('suggestions').style.display = 'none';  
  }
});
</script>
</body>
</html>







