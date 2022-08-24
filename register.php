<!DOCTYPE html>
<html lang="pt-br">

<head>

	<?php require "template/includes/head.php" ?>
	<title>Login</title>
</head>

<body>
	<main class="register">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<img src="template/imgs/register-image.png" alt="" width="100%">
				</div>
				<div class="col-lg-8 form-register">
					<h2>Cadastro</h2>
					<form action="">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group my-2">
									<label for="">Nome</label>
									<span class="input-login">
										<i class="fas fa-user"></i>
										<input type="text" class="" name="" id="" placeholder="Name">
									</span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group my-2">
									<label for="">CPF</label>
									<span class="input-login">
										<i class="fas fa-id-card"></i>
										<input id="cadastro-cpf" type="text" class="" name="cpf" id="" placeholder="000.000.000-00">
									</span>
								</div>
							</div>
						</div>
						<div class="form-group my-2">
							<label for="">Email</label>
							<span class="input-login">
								<i class="fas fa-at"></i>
								<input type="email" class="" name="email" id="" placeholder="Email">
							</span>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group my-2">
									<label for="">Telefone</label>
									<span class="input-login">
										<i class="fas fa-mobile-alt"></i>
										<input id="cadastro-telefone" type="tel" class="" name="telefone" id="" placeholder="(00) 00000-0000">
									</span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group my-2">
									<label for="">Data de Nascimento</label>
									<span class="input-login">
										<i class="fas fa-calendar-alt"></i>
										<input id="cadastro-data-aniversario" type="text" class="" name="data-nascimento" id="" placeholder="00/00/0000">
									</span>
								</div>
							</div>
						</div>
						<div class="form-group my-2">
							<label for="">Senha</label>
							<span class="input-login">
								<i class="fas fa-lock"></i>
								<input type="password" class="input-password" name="senha" id="" placeholder="Password">
								<i class="far fa-eye-slash" id="toggle-password"></i>
							</span>
						</div>
						<div class="form-group my-2">
							<label for="">Confirmar Senha</label>
							<span class="input-login">
								<i class="fas fa-lock"></i>
								<input type="password" class="input-password-confirm" id="" placeholder="Confirm the Password">
							</span>
						</div>
						<div class="my-3">
							<button class="primary-btn btn" type="submit">Registar</button>
						</div>
					</form>
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
				input_password.setAttribute('type','text')
				: input_password.setAttribute('type','password');
		});
	</script>

</body>

</html>