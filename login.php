<?php require 'template/includes/head.php' ?>
<?php require 'template/includes/funcoes.php' ?>
<?php $conn->conectar(); ?>
<body>

	<main class="login">
		<div class="container">
			<div class="row d-flex flex-row align-items-center justify-content-center">
				<div class="col-lg-8 col-sm-12 text-center">
					<img width="70%" src="template/imgs/login.png" alt="">
				</div>
				<div class="col-lg-4 col-sm-12">
					<h2>Login</h2>
					<form method="POST">
						<div class="form-group my-3">
							<label for="">Email</label>
							<span class="input-login">
								<i class="fas fa-user"></i>
								<input type="email" placeholder="Email" name="email">
							</span>
						</div>
						<div class="form-group my-3">
							<label for="">Senha</label>
							<span class="input-login">
								<i class="fas fa-key"></i>
								<input type="password" id="input-password" placeholder="Senha" name="senha">
								<i class="far fa-eye-slash" id="toggle-password"></i>
							</span>
						</div>
						<p>Esqueceu sua senha? <a href="" class="link-primary">Clique aqui.</a> </p>
						<div class="my-3">
							<button class="form-button btn w-100" type="submit">Entrar</button>
						</div>
					</form>
					<p>Não tem uma conta ? <a class="link-primary" href="register.php">Cadastre-se agora.</a></p>
				</div>
			</div>
		</div>
	</main>

	<?php require 'template/includes/footer.php' ?>

	<script>
		$("i.far.fa-eye-slash").click(function() {
			$(this).toggleClass("fa-eye-slash fa-eye")
		});
	</script>

	<script>
		$.ajax({
			type: "POST",
			url: "",
			dataType: "json",
		})
	</script>

</body>

</html>