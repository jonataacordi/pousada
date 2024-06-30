<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="192x192" href="images/icons/android-chrome-512x512.png">
    <link rel="apple-touch-icon" sizes="192x192" href="images/icons/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
    <link rel="manifest" href="images/icons/site.webmanifest">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="styles/booking.css">
<!--=============================================================================================== background-color: #cccccc-->
<style> a{text-decoration: none;} 
body {
    //background-color: darkgray;
    //background-image: url("../images/backgound_login.png");
}

</style>
<title>Pousada Quinta do Ypuã - login</title>
</head>
<body>
	 
    
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic">
                <!--<div class="login100-pic js-tilt" data-tilt>-->
					<img src="images/logo-pousada-quinta-do-ypua.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="index.php">
					<span class="login100-form-title">
						Quinta do Ypuã 
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="log" placeholder="usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
                       
                        <!-- <input type="hidden" name="pass" value="$pass">-->
                        <!-- <input type="hidden" name="pass"><a href='?link=ap.php'></input>-->
					</div>

					
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<?php
include "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $log = isset($_POST['log']) ? $_POST['log'] : null;
        $pass = isset($_POST['pass']) ? $_POST['pass'] : null;

          $result = mysqli_query($link, "SELECT * FROM cad_funcionario WHERE nome = '$log' AND senha = '$pass'");

        if ($result) {
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                setcookie('funcionario', $user['nome'], time() + (6 * 3600));
                
                echo '<form id="hiddenForm" method="POST" action="acess.php?link=ap.php">
                        <input type="hidden" name="log" value="' . $user['nome'] . '">
                        <input type="hidden" name="pass" value="' . $pass . '">
                    </form>

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 5000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "success",
                            title: "login sucesso"
                            });
                        });

                        document.getElementById("hiddenForm").submit();
                    </script>';
            } else {
                echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 5000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "login ou senha incorretos"
                            });
                        });

                        document.getElementById("hiddenForm").submit();
                    </script>';
            }
        } else {
            echo '<script>alert("Erro ao conectar ao banco de dados.");</script>';
        }
}
?>

<br>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
</body>
</div>
</div>
 </div>
  </div>