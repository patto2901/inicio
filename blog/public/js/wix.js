$(document).ready(function() {
	$('#materias').click(function(){//selector cuando da click al objeto ejecuta la accon
//$(this).append("<li>Modelado Digital</li>");//agregar contenido append
$(this).fadeOut("slow")
});

$("#nombre").val("Escribe tu nombre");

$("#nombre").click(function(){
	$("#nombre").val("");
});
$("#boton").click(function(){
alert($("#nombre").val());
return false;
});
$("#agregar").click(function(){
$("form").append("<input type='text' name='nombre'><br>");
return false;
});
});