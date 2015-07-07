function Validar(){

	var User=document.F1.User.value;
	var Pass=document.F1.Pass.value;
	// var Cel=document.Form1.TxtCelular.value;
	 var Div=document.getElementById("Resultado");
	// var Ec=document.Form1.TxtEstado.value;

	

	 if(User === '' || Pass === ''){
	 	alert("faltan datos");

     } else {
			
			document.F1.submit();
	}
}
function Validar1(){

	var Nombre=document.F2.TxtNombre.value;
	var Apellido=document.F2.TxtApellido.value;
	var Cedula=document.F2.NumCedula.value;
	var Edad=document.F2.Edad.value;
	var Email=document.F2.Mail.value;
	var Trabajo=document.F2.TxtEstado.value;

	 if(Nombre === '' || Apellido === ''  || Cedula==='' || Edad==='' 
	 	|| Email==='' || Trabajo=='99'){
	 	alert("Recuerde llenar todos los campos");

     } else {
			
			document.F2.submit();
	}
}
function Validar2(){

	
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
