<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
include_once "conexao.php";


$situacao = isset($_GET['situacao'])? $_GET['situacao']:null;
$id = isset($_GET['id'])? $_GET['id']:null;

try {
//$result_usuario = "INSERT INTO cadastro (Id, nome, end, capa) VALUES ('$id','$nome','$end','$capa')";
$result_usuario =("UPDATE cad_check_in SET situacao = '$situacao' WHERE Id = $id");
mysqli_query($link,$result_usuario) or die("Erro ao tentar cadastrar registro");

    // Adiciona mensagem de sucesso
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'CHECK-IN COM SUCESSO...!',
                showConfirmButton: false,
                timer: 5000
            }).then(function() {
                // Redireciona para a página editar_dados.php
                window.location.href = '?link=reservas.php&in=Reservado';
            });
        });
        </script>";

    } catch (Exception $e) {
        echo $e->getMessage();
         // Adiciona mensagem de erro
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Erro ao tentar cadastrar registro',
                text: '{$e->getMessage()}',
                showConfirmButton: true,
            }).then(function() {
                // Redireciona para a página editar_dados.php
                //window.location.href = '?link=form_out.php&id=$id';
                window.location.href = '?link=reservas.php&in=Reservado';
            });
        });
        </script>";
    }

?>



<!-- 


try {
//$result_usuario = "INSERT INTO cadastro (Id, nome, end, capa) VALUES ('$id','$nome','$end','$capa')";
$result_usuario =("UPDATE cad_check_in SET situacao = '$situacao', valor = '$valor', pago = '$pago' WHERE Id = $id");
mysqli_query($link,$result_usuario) or die("Erro ao tentar cadastrar registro");

include "form_out.php";

    // Adiciona mensagem de sucesso
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'CHECK-OUT FINALIZADO ',
                showConfirmButton: false,
                timer: 5000
            }).then(function() {
                // Redireciona para a página editar_dados.php
                window.location.href = '?link=check_in.php&in=Check_In';
            });
        });
        </script>";
    } catch (Exception $e) {
        echo $e->getMessage();
         // Adiciona mensagem de erro
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Erro ao tentar cadastrar registro',
                text: '{$e->getMessage()}',
                showConfirmButton: true,
            }).then(function() {
                // Redireciona para a página editar_dados.php
                //window.location.href = '?link=form_out.php&id=$id';
                window.location.href = '?link=check_in.php&in=Check_In';
            });
        });
        </script>";
}
?>

-->