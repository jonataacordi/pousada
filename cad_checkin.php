<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<?php
include "conexao.php";
include_once "form_in.php";

$nome = isset($_POST['nome'])? $_POST['nome']:null;
$fone = isset($_POST['fone'])? $_POST['fone']:null;
$cidade = isset($_POST['cidade'])? $_POST['cidade']:null;
$uf = isset($_POST['uf'])? $_POST['uf']:null;
$rua = isset($_POST['rua'])? $_POST['rua']:null;
$cpf = isset($_POST['cpf'])? $_POST['cpf']:null;
$acompanhantes = isset($_POST['acompanhantes'])? $_POST['acompanhantes']:null;
$data_in = isset($_POST['data_in'])? $_POST['data_in']:null;
$data_out = isset($_POST['data_out'])? $_POST['data_out']:null;
$pago = isset($_POST['pago'])? $_POST['pago']:null;
$ap = isset($_POST['ap'])?$_POST['ap']:null;
$situacao = isset($_POST['situacao'])? $_POST['situacao']:null;
$cep = isset($_POST['cep'])? $_POST['cep']:null;
$horas = isset($_POST['hora'])? $_POST['hora']:null;
$dia = isset($_POST['dia'])? $_POST['dia']:null;
$soma = 1;

 if (empty($nome) || empty($fone) || empty($rua) || empty($situacao)){

echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
echo'<script>
 document.addEventListener("DOMContentLoaded", function() {
         Swal.fire({
             icon: "error",
            title: "Formulário em branco!",
            text: "Favor preencher os dados corretamente.",
            showConfirmButton: false,
            timer: 5000
        }).then(function() {
            // Redireciona para a página form_in.php
            window.location.href = "?link=form_in.php&ap=$ap";
        });
    });

//history.go(-1);
</script>
';
	
	
} else {

if ($acompanhantes == ""){
	
	$acompanhantes = "Sem acompanhante..!";
};



$cadastro ="INSERT INTO cad_check_in (nome, fone, cpf, cep, rua, cidade, uf, data_in, data_out, acompanhantes, ap, situacao, pago, horas, dia, soma) VALUES ('$nome','$fone','$cpf','$cep','$rua','$cidade','$uf','$data_in','$data_out','$acompanhantes','$ap','$situacao','$pago','$horas','$dia','$soma')";

mysqli_query($link, $cadastro) or die("Erro ao tentar cadastrar registro");


// Adiciona mensagem de sucesso
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Cadastro Checkin Cliente',
            html: '<div class=\"cad_check_in_cliente\" style=\"text-align: left; line-height: 29px\"><i class=\"bi bi-person bi-2x\" aria-hidden=\"true\"></i> $nome<br><i class=\"bi bi-phone bi-2x\" aria-hidden=\"true\"></i> $fone<br><i class=\"bi bi-person-vcard bi-2x\" aria-hidden=\"true\"></i> $cpf<br><i class=\"bi bi-door-open bi-2x\" aria-hidden=\"true\"></i> $ap<br><i class=\"bi bi-calendar-check bi-2x\" aria-hidden=\"true\"></i> $dia</div>',
            footer: '<a href=\"acess.php?link=ap.php\" style=\"border: solid 1px #ccc; border-radius: 5px; padding: 5px;\">Legenda: <i class=\"bi bi-person bi-2x\"> Nome</i> | <i class=\"bi bi-phone bi-2x\"> Phone</i> | <i class=\"bi bi-person-vcard bi-2x\"> CPF</i> | <i class=\"bi bi-door-open bi-2x\"> AP</i> | <i class=\"bi bi-calendar-check bi-2x\"> Dias</i></a>',
            confirmButtonText: '<i class=\"bi bi-house-door bi-2x\" aria-hidden=\"true\"></i> Finalizar',
                customClass: {
                        confirmButton: 'my-custom-button'
                }
        }).then(function() {
            // Redireciona para a página editar_dados.php
            //window.location.href = '?cam=editar_dados.php&nome=$nome';
            window.location.href = 'acess.php?link=ap.php';
        });
    });
</script>";
}



                        

/*
echo '<div class="w3-card-4 w3-white w3-center" style="width: 950px">
  <div class="w3-container w3-dark-gray">
    <h2>Cadastro Cliente</h2>
  </div>';
echo'<p class="w3-tiny"">Nome: '.$nome.'</p>';
echo'<p class="w3-tiny">Fone: '.$fone.'</p>';
echo'<p class="w3-tiny">CPF: '.$cpf.'</p>';
echo'<p class="w3-tiny">Apartamento: '.$ap.'</p>';
echo '<p>Cadastro '.$situacao.' efetuado com sucesso..!</p>';
echo '<p> Finalizar <br><a href="?link=ap.php">Clique aqui</a></p>';
echo '</div>';
}
//mysqli_close($link);



// Adiciona mensagem de sucesso
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Cadastro Checkin Cliente',
            html: '<div class=\"cad_check_in_cliente\" style=\"text-align: left; display: flex; line-height: 29px\">Nome: $nome<br>Fone: $fone<br>CPF: $cpf<br>Apartamento: $ap</div>',
            confirmButtonText: '<i class=\"bi bi-house-door bi-2x\" aria-hidden=\"true\"></i> Finalizar',
            footer: '<a href=\"acess.php?link=ap.php\" style=\"border: solid 1px #ccc; border-radius: 5px; padding: 5px;\"><i class=\"bi bi-house-door bi-2x\" aria-hidden=\"true\"></i> Página principal</a>',
                customClass: {
                        confirmButton: 'my-custom-button'
                }
        }).then(function() {
            // Redireciona para a página editar_dados.php
            //window.location.href = '?cam=editar_dados.php&nome=$nome';
            window.location.href = 'acess.php?link=ap.php';
        });
    });
</script>";
*/

?>
