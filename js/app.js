$(document).ready(function(){
   
});
function cargarPanelConfiguracion(identificador){
   $("#tablaCampo").html("<div class='alert alert-warning'>"+identificador+"</div>");
   $("#formularioPersonalizado").load("view/formularioNumerico.php");
   
}
function mostrarOcultar(num,tabla){
   if($("#tabla"+num).css('display')=='none'){
		$("#tabla"+num).css({    
            display:"show"
        });
        $("#NombreTabla").html(tabla);
        $("#divtabla").load("view/form.php",{tablaactual:tabla});
	}else{
		$("#tabla"+num).css({    
            display:"none"
        });
	}
}
function cargarConfiguracionTipo(){
   var elegido=$("#formularioTipoOrigen").val();
   switch (elegido){
      case "archivo":
         $("#opcionconfiguracion").load("view/formfile.html");
         break;
      case "tabla":
         $("#opcionconfiguracion").load("view/formTabla.php");
         break;
      case "lista":
         $("#opcionconfiguracion").load("view/lista.html");
         break;
   }
}

function cargarContenidoTexto(){
   var archivo =$("#archivo")[0].files[0];//$( '#anexo' )[0].files[0])
      var datoDoc=new FormData();
      datoDoc.append("archivo",archivo);
      $.ajax({
          type: "POST",
          url:"controller/procesaFile.php",
          enctype:'multipart/form-data',
          data: datoDoc,
          cache: false,
          contentType: false,
          processData: false,
          mimeType: 'multipart/form-data',
          success: function(data){
            $("#contenidogenerar").text(data);
            bootbox.alert(data, function() {

            });
          },
          error: function(){
            $("#mensajeUploadDoc").text("error")
          }
      });
}




