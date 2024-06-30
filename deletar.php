<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<?php
require("conexao.php");
$ida = isset($_GET['id'])? $_GET['id']:null;

try {
     $sqlInsert = "DELETE FROM cad_check_in WHERE Id = '$ida'";   
     $deletaPost = mysqli_query($link,$sqlInsert);
//require "reservas.php";

     // Adiciona mensagem de sucesso
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                        icon: 'success',
                        title: 'Reserva cancelada!',
                        text: 'Verificar mais alguma reserva, clique abaixo!',
                        confirmButtonText: '<i class=\"bi bi-calendar-check\" aria-hidden=\"true\"></i> Reserva',
                        footer: '<a href=\"acess.php?link=ap.php\" style=\"border: solid 1px #ccc; border-radius: 5px; padding: 5px;\"><i class=\"bi bi-house-door bi-2x\" aria-hidden=\"true\"></i> Página principal</a>',
                        customClass: {
                            confirmButton: 'my-custom-button'
                        }
                        }).then(function() {
                    // Redireciona para a página editar_dados.php
                    //window.location.href = '?cam=editar_dados.php&nome=$nome';
                    window.location.href = 'acess.php?link=reservas.php&in=Reservado';
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
                title: 'Erro ao tentar cancelar a reserva',
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
$result_usuario =("UPDATE cad_check_in SET situacao = '$situacao' WHERE Id = $id");
mysqli_query($link,$result_usuario) or die("Erro ao tentar cadastrar registro");

    include "reservas.php";

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




 echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Deseja cancelar a reserva?',
                text: 'Se cancelar, a reserva será excluída!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, cancelar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                    title: 'Cancelar Reserva?',
                    text: 'Reserva cancelada.',
                    icon: 'success'
                    });
                    window.location.href = '?link=reservas.php&in=Reservado';
                }
            });
        </script>";
        try {
     $sqlInsert = "DELETE FROM cad_check_in WHERE Id = '$ida'";   
     $deletaPost = mysqli_query($link,$sqlInsert);
//require "reservas.php";

     // Adiciona mensagem de sucesso
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won t be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                        if (result.isConfirmed) {
       
                            Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                            });
                        }
                    });
            });
        </script>';
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
-->