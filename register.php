<!DOCTYPE html>
<html lang="pt-br">

<head>

	<?php require "template/includes/head.php" ?>
	<title>Login</title>
</head>

<body>
	<main class="register">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6">
					<img class="m-auto" src="template/imgs/register-image.png" alt="" width="100%">
				</div>
				<div class="col-lg-5 content-form-register">
					<h2>Cadastro</h2>
					<form action="" id="frm-register">
						<div class="form-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group my-2">
										<label for="">Nome</label>
										<span class="input-login">
											<i class="fas fa-user"></i>
											<input type="text" class="" name="" id="register-name" placeholder="Name">
										</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group my-2">
										<label for="">CPF</label>
										<span class="input-login">
											<i class="fas fa-id-card"></i>
											<input type="text" class="" name="cpf" id="register-cpf" placeholder="000.000.000-00">
										</span>
									</div>
								</div>
							</div>
							<div class="form-group my-2">
								<label for="">Email</label>
								<span class="input-login">
									<i class="fas fa-at"></i>
									<input type="email" class="" name="email" id="register-email" placeholder="Email">
								</span>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group my-2">
										<label for="">Telefone</label>
										<span class="input-login">
											<i class="fas fa-mobile-alt"></i>
											<input id="register-telefone" type="tel" class="" name="telefone" placeholder="(00) 00000-0000">
										</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group my-2">
										<label for="">Data de Nascimento</label>
										<span class="input-login">
											<i class="fas fa-calendar-alt"></i>
											<input type="text" class="" name="data-nascimento" id="register-data-nascimento" placeholder="00/00/0000">
										</span>
									</div>
								</div>
							</div>
							<div class="form-group my-2">
								<label for="">Senha</label>
								<span class="input-login">
									<i class="fas fa-lock"></i>
									<input type="password" class="input-password" name="senha" id="register-senha" placeholder="Senha">
									<i class="far fa-eye-slash" id="toggle-password"></i>
								</span>
							</div>
							<div class="form-group my-2">
								<label for="">Confirmar Senha</label>
								<span class="input-login">
									<i class="fas fa-lock"></i>
									<input type="password" class="input-password-confirm" id="" placeholder="Confirmar senha">
								</span>
							</div>
						</div>
						<div class="form-next-page">
							<div class="form-group my-2">
								<label for="">Endereço</label>
								<span class="input-login">
									<i class="fas fa-map-marker-alt"></i>
									<input id="register-endereco" type="text" class="input-endereco" id="" placeholder="Endereço">
								</span>
							</div>
						</div>
					</form>
					<div class="my-3 form-step-1">
						<button id="form-next" class="primary-btn btn" type="button">Próximo</button>
					</div>
					<div class="my-3 form-step-2">
						<button id="btn-register" class="primary-btn btn" type="button">Registar</button>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php require 'template/includes/footer.php' ?>

	<script>
		const input_password = document.querySelector('.input-password');
		const input_password_confirm = document.querySelector('.input-password-confirm');
		$("i.far.fa-eye-slash").click(function() {
			$(this).toggleClass("fa-eye-slash fa-eye");
			console.log("teste de click");
			input_password.getAttribute('type') === 'password' ?
				input_password.setAttribute('type', 'text') :
				input_password.setAttribute('type', 'password');
		});
	</script>


	<?php require("./template/includes/footer.php") ?>
	<script src="./template/js/register.js"></script>
</body>

</html>