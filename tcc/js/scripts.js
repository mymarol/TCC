 function isInputNumber(evt){
	var ch = String.fromCharCode(evt.which);
	if(!(/[0-9]/.test(ch))){
		evt.preventDefault();
	}   
}          
function testMat(matricula){
	var regex = /^(([0-9]{3}\.[0-9]{3}\.[0-9]{3})|([0-9]{8})|([0-9]{9}))$/;
	if (!regex.test(matricula.value)){
		window.alert('Número de matrícula inválido.');
	} 
}

