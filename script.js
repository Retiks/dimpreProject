function verifierCaracteres(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;

    var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById('mon_input');
			
	var caracteres = '-';
			
	if(caracteres.indexOf(touche) == -1) {
		champ.value += touche;
	}			
}

function verifierCaracteres2(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;

    var touche = String.fromCharCode(keyCode);		

	var champ = document.getElementById('mon_input2');
			
	var caracteres = '-';
			
	if(caracteres.indexOf(touche) == -1) {
		champ.value += touche;
	}			
}
