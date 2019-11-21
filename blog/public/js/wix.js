$(document).ready(function() {
	$('#materias').click(function(){//selector cuando da click al objeto ejecuta la accon
//$(this).append("<li>Modelado Digital</li>");//agregar contenido append
$(this).fadeOut("slow")
});
      $("#Cantidad").change(function(){
         var stock=$("#stock").text();
          var stock2=$("#stock2").text();
        var Cantidad=$("#Cantidad").val();
        var dif=stock-Cantidad;
if (Cantidad<0) {
 $("#Cantidad").addClass("is-invalid");
}else{
     if (dif>=0) {
           $("#Cantidad").removeClass("is-invalid");
        }else{
            $("#Cantidad").addClass("is-invalid");
        }  
}
       
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
	//var producto=$(this).parent().parent().find(".producto-nombre").text();
	//$("#modal-titulo").text(producto); pasa al modal lo que esta en el <tr>
	$(this).parent().parent().find("td").each(function(i){
       switch(i){
       	case 1:
       	$("#modal-img").attr("src",$(this).children().attr("src"));
       	$("#modal-descripcion").text($(this).children().attr("alt"));
       	break;
       	case 2:
       	$("#modal-titulo").text($(this).text());
       	break;
       	default:
       	break;
       	//MUESTRA TODO EN UN MODAL
       }
	});

	$("#producto-modal").modal("show");
    });

});
