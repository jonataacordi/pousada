<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
include_once "conexao.php";
include_once "form_cliente.php";

$nome = isset($_POST['nome'])? $_POST['nome']:null;
$fone = isset($_POST['fone'])? $_POST['fone']:null;
$cidade = isset($_POST['cidade'])? $_POST['cidade']:null;
$uf = isset($_POST['uf'])? $_POST['uf']:null;
$rua = isset($_POST['rua'])? $_POST['rua']:null;
$cpf = isset($_POST['cpf'])? $_POST['cpf']:null;
$cep = isset($_POST['cep'])? $_POST['cep']:null;
$ap = isset($_POST['ap'])? $_POST['ap']:null;
 if (empty($nome) || empty($fone) || empty($rua)){

echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";    
	echo'
 <script>   
 document.addEventListener("DOMContentLoaded", function() {
         Swal.fire({
             icon: "error",
            title: "Formulário em branco!",
            text: "Favor preencher os dados corretamente.",
            showConfirmButton: false,
            timer: 5000
        }).then(function() {
            // Redireciona para a página form_in.php
            window.location.href = "?link=form_in.php";
        });
    });

//history.go(-1);
</script>';
	
	
} else {



try {
    //$result_usuario = "INSERT INTO cadastro (Id, nome, end, capa) VALUES ('$id','$nome','$end','$capa')";
     $result_usuario = "INSERT INTO cad_cliente (nome, fone, cidade, uf, rua, cpf, cep) VALUES ('$nome', '$fone' ,'$cidade', '$uf', '$rua', '$cpf', '$cep')";
    mysqli_query($link,$result_usuario) or die("Erro ao tentar cadastrar registro");

    // Adiciona mensagem de sucesso
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";

    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
         Swal.fire({
                icon: 'success',
                title: 'Cliente \"' + " . json_encode($nome) . " + '\", cadastrado com sucesso!',
                text: 'Clique abaixo para retornar a página de checkin',
                footer: '<a href=\"acess.php?link=ap.php\" style=\"border: solid 1px #ccc; border-radius: 5px; padding: 5px;\"><i class=\"bi bi-house-door bi-2x\" aria-hidden=\"true\"></i> Página principal</a>'
                }).then(function() {
            // Redireciona para a página editar_dados.php
            //window.location.href = '?cam=editar_dados.php&nome=$nome';
            window.location.href = 'acess.php?link=form_in.php&cpf=' + " . json_encode($cpf) . " + '&ap=' + " . json_encode($ap) . ";
        });
    });
    </script>";
} catch (Exception $e) {
    // Adiciona mensagem de erro
echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
            icon: 'error',
            title: 'Erro ao tentar cadastrar registro',
            text: '{$e->getMessage()}',
            showConfirmButton: true,
        }).then(function() {uf
            // Redireciona para a página editar_dados.php
            //window.location.href = '?cam=editar_dados.php&nome=$nome';
            //window.location.href = '?link=form_in.php&ap=$ap';
        });
    });
    </script>";
    }
}
?>
