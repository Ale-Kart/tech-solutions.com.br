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
				<div class="col-lg-6">
					<img src="template/imgs/register-image.png" alt="" width="100%">
				</div>
				<div class="col-lg-6 form-register">
					<h2>Cadastro</h2>
					<form action="">
						<div class="form-group my-2">
							<label for="">Nome</label>
							<span class="input-login">
								<i class="fas fa-user"></i>
								<input type="text" class="" name="" id="" placeholder="Name">
							</span>
						</div>
						<div class="form-group my-2">
							<label for="">Email</label>
							<span class="input-login">
								<i class="fas fa-at"></i>
								<input type="email" class="" name="email" id="" placeholder="Email">
							</span>
						</div>
						<div class="form-group my-2">
							<label for="">Telefone</label>
							<span class="input-login">
								<i class="fas fa-mobile-alt"></i>
								<input type="tel" class="" name="telefone" id="" placeholder="Telephone">
							</span>
						</div>
						<div class="form-group my-2">
							<label for="">Data de Nascimento</label>
							<span class="input-login">
								<i class="fas fa-calendar-alt"></i>
								<input type="date" class="" name="data-nascimento" id="" placeholder="00/00/0000">
							</span>
						</div>
						<div class="form-group my-2">
							<label for="">CPF</label>
							<span class="input-login">
								<i class="fas fa-id-card"></i>
								<input type="number" class="" name="cpf" id="" placeholder="000.000.000-00">
							</span>
						</div>
						<div class="my-2">
							<button class="form-button btn" type="submit">Registar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>

	<?php require 'template/includes/footer.php' ?>


</body>

</html>