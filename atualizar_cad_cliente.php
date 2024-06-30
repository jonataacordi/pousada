<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</head>
<?php
include "conexao.php";
include_once "editar_cliente.php";

$cpf = $_GET['cpf'];
$nome = $_GET['nome'];
$fone = $_GET['fone'];
$cep = $_GET['cep'];
$rua = $_GET['rua'];
$cidade = $_GET['cidade'];
$uf = $_GET['uf'];

//$info = $_POST['info'];
//$info_sem_espacos = str_replace([";\r\n"], ';', $info);


try {
    $result_usuario = ("UPDATE cad_cliente SET nome='$nome', fone='$fone', cep='$cep', rua='$rua', cidade='$cidade', uf='$uf' WHERE cpf = '$cpf'");
    mysqli_query($link, $result_usuario) or die("Erro ao tentar cadastrar registro");

    // Adiciona mensagem de sucesso
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Dados atualizados com sucesso!',
            showConfirmButton: false,
            timer: 5000
        }).then(function() {
            // Redireciona para a página editar_dados.php
            //window.location.href = '?cam=editar_dados.php&nome=$nome';
            window.location.href = 'acess.php?link=ap.php';
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
            window.location.href = 'editar_cliente.php&cpf=$cpf&nome=$nome';
        });
    });
    </script>";
}

?>

</html>