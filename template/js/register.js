$('#form-next').on('click', function (e) {
	$(".form-body").hide("");
	$(".form-next-page").show();
	$(".form-step-1").hide();
	/* * show button */
	$(".form-step-2").show();
});

$('#btn-register').on('click', function (e) {
	var current_values_insert = {
		name: $("#register-name").val(),
		cpf: $("#register-cpf").val(),
		email: $("#register-email").val(),
		dataNascimento: $("#register-data-nascimento").val(),
		telefone: $("#register-telefone").val(),
		senha: $("#register-senha").val(),
		endereco: $("#register-endereco").val(),
	};
	GetAddress(current_values_insert.endereco);
	// CreateUser(current_values_insert);
});
// todo : inserir os dados da api cep nos inputs
function GetAddress(user_cep) {
	fetch(`https://viacep.com.br/ws/${user_cep}/json/`)
		.then(res => res.json())
		.then(body => console.log(body))
}

/* Enviar para */
function CreateUser(new_user) {
	console.log("novo usuario => ", new_user);
}