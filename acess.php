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

<?php 
require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $log = isset($_POST['log']) ? $_POST['log'] : null;
    $pass = isset($_POST['pass']) ? $_POST['pass'] : null;

    if ($log && $pass) {
        setcookie('funcionario', $user['nome'], time() + (6 * 3600));
    
    } 
} 
?>

<style> a{text-decoration: none;} </style>

<body class="w3-responsive">

<header class="cabecalho-topo" style="display: flex">
      <!--1 - Parte = Elementos Header esquerda-->
      <div class="info-header">
        <!-- Container pai dos elementos a esquerda do header-->
        <div class="logo">
          <!--Logo Elementos Header esquerda-->
          <a class="link" href="?link=ap.php">
          <h3>Dashboard</h3>
          </a>
        </div>
        <div class="icons-header">
          <!-- Div class Elementos Header esquerda-->
          <i class="fa-solid fa-magnifying-glass icone-ativo" id="searchIcon"></i>
            <div class="content-search">
                <i class="fa-solid fa-magnifying-glass "></i>
                <input type="text" id="searchInput" placeholder="Buscar nome ou CPF" class="input-searchInput desativado" oninput="fetchResults()" style="outline: 0;">
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
        <!-- Icone Elementos Header direita
        <?php echo 'User: ' . $log; ?> -->
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
                        <a class="link" href="?link=ap.php">
                            <span class="icon"><i class="bi bi-house-door bi-2x" aria-hidden="true"></i>
                            <span class="txt-link">Dashboard</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="?link=check_in.php&in=Check_In">
                            <span class="icon"><i class="bi bi-building-check" aria-hidden="true"></i>
                            <!--<span class="icon"><i class="fa fa-inbox fa-2x" aria-hidden="true"></i></span>-->
                            <span class="txt-link">Checkin</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="?link=check_out.php&in=Check_Out">
                            <span class="icon"><i class="bi bi-building-x aria-hidden="true"></i>
                            <!--<span class="icon"><i class="fa fa-cubes fa-2x" aria-hidden="true"></i></span>-->
                            <span class="txt-link">Checkout</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="?link=reservas.php&in=Reservado">
                            <span class="icon"><i class="bi bi-journal-minus" aria-hidden="true"></i>
                            <!--<span class="icon"><i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i></span>-->
                            <span class="txt-link">Reservas</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a class="link" href="?link=list_hospedes.php">
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
    setcookie('funcionario', $user['nome'], time() + (6 * 3600));
}

//include $cam;

$total = 15;
$res = isset($res) && $res >= 0 ? $res : 0;
$ins = isset($ins) && $ins >= 0 ? $ins : 0;
$qtos = $total - $ins - $res;

// Garantir que qtos não seja negativo
if ($qtos < 0) {
    $qtos = 0;
}


echo'
<br><div class="content-dashbord-info"><p><samp>
 <div class="box-info">
        <div class="box-info-first ">
            <div class="info-text">
                <h3 class="h3-info-text"><i class="bi bi-bar-chart-line-fill"></i><span class="ativar-info-qntd">'.$total.'</span><span class="span-h3-info-text"> Quartos: '.$total.'</span></h3>
            </div>
        </div>
        <div class="box-info-second">
            <div class="info-text">
                <h3 class="h3-info-text"><i class="bi bi-door-open-fill"></i><span class="ativar-info-disp">'.$qtos.'</span><span class="span-h3-info-text"> Disponível: '.$qtos.'</span></h3>
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
                    <!--<p>
                        <a href="?cam=atualizar_dados.php" style="text-decoration: none"><i class="bi bi-house-door"></i>
                        </a> <i class="bi bi-slash-lg"></i> <i class="bi bi-columns-gap"></i> Dashboard
                    </p>-->
                </div>
            
            <div class="categoria" id="categoria">
                
<?php 
include $cam;

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



/*
function fetchResults() {
  const query = document.getElementById('searchInput').value;

  if (query.length > 0) {
    fetch('search.php?q=' + encodeURIComponent(query))
      .then(response => response.json())
      .then(data => {
        const suggestionsDiv = document.getElementById('suggestions');
        suggestionsDiv.innerHTML = '';

        if (data.length > 0) {
          data.forEach(item => {
            const div = document.createElement('div');
            div.className = 'suggestion-item';
            div.innerHTML = `Nome: ${item.nome} - CPF: ${item.cpf}`;
            div.onclick = () => selectSuggestion(item);
            suggestionsDiv.appendChild(div);
          });
        } else {
          suggestionsDiv.innerHTML = '<div class="suggestion-item">Nenhum resultado encontrado</div>';
        }
        suggestionsDiv.style.display = 'block';
      })
      .catch(error => console.error('Erro:', error));
  } else {
    document.getElementById('suggestions').style.display = 'none';
  }
}

function selectSuggestion(item) {
  document.getElementById('searchInput').value = `Nome: ${item.nome} - CPF: ${item.cpf}`;
  document.getElementById('suggestions').style.display = 'none';
}*/
</script>


<script>
/*Ação de quando clica para abrir o campo de pesquisar*/
document.getElementById('searchIcon').addEventListener('click', function() {
  const searchIcon = document.getElementById('searchIcon');
  const contentSearch = document.querySelector('.content-search');
  var inputSearchInput = document.getElementsByClassName('input-searchInput');

  if (searchIcon.classList.contains('icone-ativo')) {
    searchIcon.classList.remove('icone-ativo');
    contentSearch.classList.add('ativo');
    inputSearchInput[0].classList.remove('desativado')
 
  } else {
    searchIcon.classList.add('icone-ativo');
    contentSearch.classList.remove('ativo');
    
  }
});

/*Ação de quando clica para fechar o campo de pesquisar*/
document.addEventListener('click', function(event) {
  const searchIcon = document.getElementById('searchIcon');
  const contentSearch = document.querySelector('.content-search');
  const searchInput = document.getElementById('searchInput');
  var inputSearchInput = document.getElementsByClassName('input-searchInput');

  if (!contentSearch.contains(event.target) && event.target !== searchIcon && !searchInput.contains(event.target)) {
    searchIcon.classList.add('icone-ativo');
    contentSearch.classList.remove('ativo');
    document.getElementById('suggestions').style.display = 'none';
    inputSearchInput[0].classList.add('desativado');

  }
});
</script>
</body>
</html>

