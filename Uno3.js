function Validar(){

	
	var Cedula=document.F3.User.value;
	var Fnac=document.F3.FNac.value;
	
	// var Cel=document.Form1.TxtCelular.value;
	 //var Div=document.getElementById("Resultado");
	// var Ec=document.Form1.TxtEstado.value;

	

	 if( Cedula==='' || Fnac===''){
	 	alert("Recuerde llenar todos los campos");

     } else {
			
			document.F3.submit();
	}
}