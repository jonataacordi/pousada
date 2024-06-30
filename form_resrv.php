<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<title>empregado</title>
</head>

<body>
<div class="w3-container">
<div class="w3-card-4 w3-white" style="width:100%">
<header class="w3-light-grey w3-center">

<h3>CADASTRO EMPREGADO</h3>
<a href="?link=ap.php" class="w3-bar-item w3-button w3-right"style="margin-top:-44px"><i class="fa fa-times" aria-hidden="true"></i></a>
<br>
</header>
<div class="w3-container  w3-white">
<form action="cad_estoque.php" method="post">

<label> Nome </label>
<input type="text" class="w3-input w3-border w3-round-large" name="Nome" />

<div class="w3-third">
<label> Fone </label>
<input type="text" class="w3-input w3-border w3-round-large" name="fone" style="width:160px" />
</div>

<div class="w3-third">
<label> Login </label>
<input type="text" class="w3-input w3-border w3-round-large" name="login" style="width:100px" />
</div>

<div class="w3-third">
<label> Senha </label>
<input type="text" class="w3-input w3-border w3-round-large" name="senha"  style="width:100px"/>
</div>
    </div><br>
<footer class="w3-light-grey w3-center">
<br>
 <button class="w3-button w3-border w3-round-large">Cadastrar</button>
 <br><br />
</footer>
    </form>
    </div>
  </div>
</div>

</body>
</html>