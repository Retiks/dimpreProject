function verifierCaracteres(event) {

	var keyCode = event.which ? event.which : event.keyCode;

	var touche = String.fromCharCode(keyCode);

	var champ = document.getElementById('mon_input');

	var caracteres = '-';

	if (caracteres.indexOf(touche) == -1) {
		champ.value += touche;
	}
}

function verifierCaracteres2(event) {

	var keyCode = event.which ? event.which : event.keyCode;

	var touche = String.fromCharCode(keyCode);

	var champ = document.getElementById('mon_input2');

	var caracteres = '-';

	if (caracteres.indexOf(touche) == -1) {
		champ.value += touche;
	}
}

function check() {
	var string = document.getElementById('mon_input')
	var string2 = string.value

	const suite = string2.replaceAll('-', '')
	document.getElementById('mon_input').value = suite;
}

function check2() {
	var string = document.getElementById('mon_input2')
	var string2 = string.value

	const suite = string2.replaceAll('-', '')
	document.getElementById('mon_input2').value = suite;
}