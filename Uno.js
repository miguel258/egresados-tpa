function Validar(){

	var User=document.F1.User.value;
	var Pass=document.F1.Pass.value;
	// var Cel=document.Form1.TxtCelular.value;
	 var Div=document.getElementById("Resultado");
	// var Ec=document.Form1.TxtEstado.value;

	alert(User);
	alert(Pass);

	 if(User === '' || Pass === ''){
	 	alert("faltan datos");

     } else {
			alert("paso por aca?");
			document.F1.submit();
	}

// 	var F=parseInt(document.f2.TxtFilas.value);
// 	var C=parseInt(document.f2.TxtCol.value);
// 	var r=document.getElementById("Resultado");
// 	var tabla="<table border=2 cellspacing=4 cellpadding=12>";
// 	var D=document.getElementById("Datos");
// 	var Al=0;
// 	var Tam=F*C;
// 	var Datos="";
// 	var Arreglo=[Tam];
// 	//td para columnas
// 	//tr para filas

// 	for(var i=0; i< F; i++){
// 		tabla+="<tr>";
// 			for(var j=0; j< C;j++){
// 				Al=Math.round(Math.random()*10);
// 					for (var K = 0; K< Arreglo.length; K++) {
// 						Arreglo[K]=Al;
// 						Datos+=Arreglo[K]+="-";
// 					};

// 			tabla+="<td>"+Al+"</td>";
// 		}
// 	tabla+="</tr>";
// }
// tabla+="</table><br><br><br><br><br>";
// r.innerHTML=tabla + "Datos : " + Datos;


}
