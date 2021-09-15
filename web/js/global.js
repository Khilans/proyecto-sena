$(document).ready(function(){
    $(document).on("click","#cambioDeImagen",function(){
        var ruta=$("#imagen").attr("src");

        $("#cambiarImagen").html("<input type='file' name='img_noticia'>");
        $("$cambiarImagen").append("<input type='hidden' name='img_vieja' value='"+ruta+"'>");
    });

  
   
    $('#tabla').DataTable({
        responsive: true,
            language:{
                "decimal":          "",
                "emptyTable":       "Sin datos",
                "info":             "Consultando _START_ a _END_ de _TOTAL_ registros",   
                "infoEmpty":        "Consultado 0 a 0 de 0 registros", 
                "infoFiltered":     "(Filtrado de _MAX_ registros totales)",
                "thousands":        ".",
                "lengthMenu":       "Buscar _MENU_ registros",
                "loadingRecords":   "Cargando registros...",
                "processing":       "Procesando",
                "search":           "Buscar",
                "zeroRecords":      "No se encontraron resultados",
                "paginate":{
                    "previous":     "Anterior",
                    "next":         "Siguiente",
                }

            },

    });
 
    $(document).on("click","#EditEstado",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-esta");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modal",function(){
        var url=$(this).attr("data-url");
       
        

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#deletecomment",function(){
        var url=$(this).attr("data-url");
    });



    $(document).on("click","#modalnoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-noti");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalUpdate",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-usu_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalUpdateConfiguracion",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-comp_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalInsertConfiguracion",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-comp_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalDelete",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-usu_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalProfile",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-usu_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $("#alerta").delay(5000).fadeOut();

    $(document).on("click","#agregar",function(){
        var select=$("#copy").html();
        $("#contenido").append(
            "<div class=' row col-md-4 form-group'>"
                +"<label class='mx-3'>Categoria</label>"
                +"<div class='col-md-10'>"
                    +"<select class='form-control' name='cat_id[]'>"+select+"</select>"
                +"</div>"
                +"<div>"
                    +"<button type='button' class='btn btn-danger' id='quitar'>-</button>"
                +"</div>"
            +"</div>"
        );
    });

    $(document).on("click","#quitar",function(){
        $(this).parent().parent().remove();
    });


});