// Funciones

var matricula
var pass




document.getElementById("login-btn").addEventListener( "click", function () {
	matricula = document.getElementById("input-matricula").value; 
pass = document.getElementById("input-pass").value; 
console.log("MATRICULA"+matricula+" PASS"+pass)

if(matricula == "padrino" && pass == "george") {
	
	alert('correcto'); 
} 
	
});  
	

