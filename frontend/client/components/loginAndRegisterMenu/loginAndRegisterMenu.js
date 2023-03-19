console.log('test');

isLoginMenuOpen = true;

openRegisterMenu = (event) => {
	if (!isLoginMenuOpen) {
		return;
	}

	document.querySelector('#register-switch').classList.add('switch-selected');
	document.querySelector('#login-switch').classList.remove('switch-selected');

	document.querySelector('#login-form').classList.add('hide');
	document.querySelector('#register-form').classList.remove('hide');

	document.querySelector('#submit-button').innerHTML = 'Register';
	document.querySelector('#header-text').innerHTML = 'Register';

	isLoginMenuOpen = !isLoginMenuOpen;
};

openLoginMenu = (event) => {
	if (isLoginMenuOpen) {
		return;
	}

	document.querySelector('#login-switch').classList.add('switch-selected');
	document.querySelector('#register-switch').classList.remove('switch-selected');

	document.querySelector('#register-form').classList.add('hide');
	document.querySelector('#login-form').classList.remove('hide');

	document.querySelector('#submit-button').innerHTML = 'Log in';
	document.querySelector('#header-text').innerHTML = 'Log in';

	isLoginMenuOpen = !isLoginMenuOpen;
};

myFunction = (event) => {
	var x = document.getElementById('myInput');
	if (x.type === 'password') {
		x.type = 'text';
	} else {
		x.type = 'password';
	}
};
