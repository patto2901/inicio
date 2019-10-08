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

$("#img_detalles").click(function(){
	$("#img-full").show("slow");
});
$("#img-full").click(function(){
	$("#img-full").fadeOut("slow");
});
$(".detalles-producto").click(function(){
	$("#producto-modal").modal("show");
});
});
