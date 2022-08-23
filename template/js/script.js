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
}