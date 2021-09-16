$(document).ready(function(){
    $(document).on("click","#cambioDeImagen",function(){
        var ruta=$("#imagen").attr("src");

        $("#cambiarImagen").html("<input type='file' name='img_noticia'>");
        $("#cambiarImagen").append("<input type='hidden' name='img_vieja' value='"+ruta+"'>");
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

    //Modales del crud tipo de pqrsf

    $(document).on("click","#InsertTpqrs",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-Tpqrs");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#DeleteTpqrs",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-TpqrsD");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#EditTpqrs",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-TpqrsE");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });




    //Modales crud Tipo de noticia
    $(document).on("click","#InsertTnoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-Tnoti");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#DeleteTnoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-TnotiD");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#EditTnoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-TnotiE");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    //Modales crud tipo de documento
    $(document).on("click","#InsertDocu",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-docu");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#DeleteDocu",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-docuD");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#EditDocu",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-docuE");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });
    //Modales crud del rol
    $(document).on("click","#InsertRol",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-rolIn");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#DeleteRol",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-rolD");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#EditRol",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-rol");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

//Modal crud de estados
    $(document).on("click","#InsertEstado",function(){
        var url=$(this).attr("data-url");
        $.ajax({
            url:url,
            
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#DeleteEstado",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-estaD");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
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

    //Modales crud de Pqrsf
    $(document).on("click","#modalInsertPqrs",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-pqrs");

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
    //Modales de crud configuracion 
    $(document).on("click","#insertConfi",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-confiIn");

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

    $(document).on("click","#EditConfi",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-confiE");

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

    $(document).on("click","#DeleteConfi",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-confiD");

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
    //Modales de crud de noticias
    $(document).on("click","#modalInsertnoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-notiIn");

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


    $(document).on("click","#modalDeletenoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-notid");

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

    $(document).on("click","#modalnoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-noti");

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

    
    $(document).on("click","#modal",function(){
        var url=$(this).attr("data-url");

        $.ajax({
            url:url,
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