// fixed-top

$(window).scroll(function () {
	if (window.scrollY > 60) {
		$("#header").addClass("fixed-top");
	} else {
		$("#header").removeClass("fixed-top");
	}
});


const btnTogglePassword = document.querySelector('#toggle-password');

const inputPassword = document.querySelector('#input-password');
btnTogglePassword.onclick = () => {
	inputPassword.getAttribute('type') === 'password' ?
		inputPassword.setAttribute('type','text')
		: inputPassword.setAttribute('type','password');
};

// Máscara para o input da Página - Register
$(document).ready( function() {
	$('#register-data-nascimento').mask('00/00/0000');
	$('#register-telefone').mask('(00) 00000-0000');
	$('#register-cpf').mask('000.000.000-00');
} );
