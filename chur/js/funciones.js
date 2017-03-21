/****************************************************************************/
//*** Este Codigo permite Validar que sea un campo Numerico
function Solo_Numerico(variable){
    Numer=parseInt(variable);
    if (isNaN(Numer)){
        return "";
    }
    return Numer;
}
function ValNumero(Control){
    Control.value=Solo_Numerico(Control.value);
}

/****************************************************************************/
//*** Este Codigo permite Validar RFC
function ValidaRfc(rfcStr) {
	var strCorrecta;
	strCorrecta = rfcStr;	
	if (rfcStr.length == 12){
	var valid = '^(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
	}else{
	var valid = '^(([A-Z]|[a-z]|\s){1})(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
	}
	var validRfc=new RegExp(valid);
	var matchArray=strCorrecta.match(validRfc);
	if (matchArray==null) {
		alert('RFC Incompleto');
		document.cliente.rfc.focus();
		return false;
	}		
}
/****************************************************************************/
//*** Este Codigo permite Validar 

//onkeyup="javascript:this.value=this.value.toUpperCase();" que verdaderamente reemplaza el texto a mayúsculas y es enviado en mayúsculas.
//style="text-transform:uppercase;" 
//onClick="window.location='crear.php';"