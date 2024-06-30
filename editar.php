<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

<head>
<style>
        
        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: initial;
            background-color: #2778c4;
            color: #fff;
            font-size: 1em;
        }
        .my-custom-button {
            background-color: #4CAF50; /* Verde */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
    

        /*Hover do button*/
        .my-custom-button:hover {
            background-color: #0773d9;
            border: none;
            color: white;
        }

        .my-custom-footer a {
            border: solid 1px #ccc; 
            border-radius: 5px; 
            padding: 5px;
            text-decoration: none;
            color: #007BFF; /* Cor do link */
        }

        .my-custom-footer a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<?php
include_once "conexao.php";


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
$id = isset($_POST['id'])? $_POST['id']:null;

include_once "form_editar_in.php";

try {
    //$result_usuario = "INSERT INTO cadastro (Id, nome, end, capa) VALUES ('$id','$nome','$end','$capa')";
    // Primeiro UPDATE
   $query1 = "UPDATE cad_check_in SET 
        nome = '$nome', 
        situacao = '$situacao', 
        fone = '$fone', 
        cidade = '$cidade', 
        uf = '$uf', 
        rua = '$rua', 
        cpf = '$cpf', 
        acompanhantes = '$acompanhantes', 
        data_in = '$data_in', 
        data_out = '$data_out', 
        ap = '$ap', 
        cep = '$cep', 
        horas = '$horas', 
        dia = '$dia'  
        WHERE Id = $id";

    $result1 = mysqli_query($link, $query1);

    $query2 = "UPDATE cad_cliente SET 
        nome = '$nome', 
        fone = '$fone', 
        cidade = '$cidade', 
        uf = '$uf', 
        rua = '$rua', 
        cpf = '$cpf', 
        cep = '$cep' 
        WHERE cpf = '$cpf'";

    $result2 = mysqli_query($link, $query2);

    if ($result1 && $result2) {
            //echo '<script>alert("Dados atualizados com sucesso!")</script>';
            // Adiciona mensagem de sucesso
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                        icon: 'success',
                        title: 'Check-in realizado com sucesso!',
                        text: 'Continuar editando, clique abaixo!',
                        confirmButtonText: '<i class=\"bi bi-pencil-square\" aria-hidden=\"true\"></i> Editar',
                        footer: '<a href=\"acess.php?link=ap.php\" style=\"border: solid 1px #ccc; border-radius: 5px; padding: 5px;\"><i class=\"bi bi-house-door bi-2x\" aria-hidden=\"true\"></i> Página principal</a>',
                        customClass: {
                            confirmButton: 'my-custom-button'
                        }
                        }).then(function() {
                    // Redireciona para a página editar_dados.php
                    //window.location.href = '?cam=editar_dados.php&nome=$nome';
                    window.location.href = 'acess.php?link=form_editar_in.php&id_in=$id';
                });
            });
            </script>";
    } else {
            echo "Erro ao atualizar dados: " . mysqli_error($link);
      }

} catch (Exception $e) {
    // Adiciona mensagem de erro

    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
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



<!-- REALIZA A ATUALIZAÇÃO DAS TABELAS DE (cad_check_in) e (cad_cliente)
// Iniciar uma transação
include_once "form_editar_in.php";

try {
    //$result_usuario = "INSERT INTO cadastro (Id, nome, end, capa) VALUES ('$id','$nome','$end','$capa')";
    $result_usuario =("UPDATE cad_check_in SET nome = '$nome', situacao = '$situacao', fone = '$fone', cidade = '$cidade', uf = '$uf', rua = '$rua', cpf = '$cpf', acompanhantes = '$acompanhantes', data_in = '$data_in', data_out = '$data_out', ap = '$ap', cep = '$cep', horas = '$horas', dia = '$dia'  WHERE Id = $id");
    mysqli_query($link,$result_usuario) or die("Erro ao tentar cadastrar registro");

    // Adiciona mensagem de sucesso
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
         Swal.fire({
                icon: 'success',
                title: 'Check-in realizado com sucesso!',
                text: 'Para continuar editando, clique abaixo!',
                footer: '<a href=\"acess.php?link=ap.php\" style=\"border: solid 1px #ccc; border-radius: 5px; padding: 5px;\"><i class=\"bi bi-house-door bi-2x\" aria-hidden=\"true\"></i> Página principal</a>'
                }).then(function() {
            // Redireciona para a página editar_dados.php
            //window.location.href = '?cam=editar_dados.php&nome=$nome';
              window.location.href = 'acess.php?link=form_editar_in.php&id_in=$id';
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
-->
