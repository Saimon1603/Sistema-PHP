<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">
</head>

<body class="img js-fullheight" style="background-image: url(images/bg2.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<!---->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<form class="signin-form" method="POST" action="login.php">
							<!--Iniciando a conexão php-->
							<!--Mensagem caso o usuario e senha seja recebido como errado-->
							<?php
								if (isset($_SESSION['nao_autenticado'])) :
							?>
								<div class="notification is-danger">
									<p>ERRO: Usuário ou senha inválidos.</p>
								</div>
							<?php
								endif;
								unset($_SESSION['nao_autenticado']);
							?>
							<!---->
							<div class="form-group">
								<input name="usuario" type="text" class="form-control" placeholder="Email" required>
							</div>
							<!---->
							<div class="form-group">
								<input name="senha" id="password-field" type="password" class="form-control" placeholder="Password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<!---->
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Lembre de mim
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Esqueceu sua senha ?</a>
								</div>
							</div>
						</form>
						<p class="w-100 text-center">&mdash; Seguir com &mdash;</p>
						<div class="social d-flex text-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>Facebook</a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>Instagram</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>