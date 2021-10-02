$(document).ready(function(){

        //Modal perfil
        $(document).on("click","#updateprofile",function(){
            var url=$(this).attr("data-url");
            var usu_id=$("#usu_id").val();
            var fName=$("#fname").val();
            var sName=$("#sname").val();
            var ltName=$("#ltname").val();
            var typeDoc=$("#typedoc").val();
            var numDoc=$("#numDoc").val();
            var dataString= 'usu_nombre='+fName+'&usu_nombre2='+sName+'&usu_apellido='+ltName+'&cod_tipo_doc='+typeDoc+'&usu_ndocumento='+numDoc;
             $.ajax({
                url:url,
                data:dataString,
                type:"GET",
                success:function(datos){
                    location.reload(false);
                }
            });
        });
        //Fin modal perfil

    $(document).on("click","#cambioDeImagen",function(){
        var ruta=$("#imagen").attr("src");

        $("#cambiarImagen").html("<input id='contact_form_message' required='required' data-error='Complete este campo.' type='file' name='img_noticia'>");
        $("#cambiarImagen").append("<input type='hidden' name='img_vieja' value='"+ruta+"'>");
    });

    $(document).ready(function(){
        $(document).on("click","#cambioDeImagenOf",function(){
            var ruta=$("#imagenOf").attr("src");
    
            $("#cambiarImagenOf").html("<input id='contact_form_message' required='required' data-error='Complete este campo.' type='file' name='imag_oferta'>");
            $("#cambiarImagenOf").append("<input type='hidden' name='imag_vieja' value='"+ruta+"'>");
        });
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


        //Modal tipo de tipo pqrsf 
        $(document).on("click","#InsertTpqrs",function(){
            var url=$(this).attr("data-url");
            $.ajax({
                url:url,
                
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



        //Modal respuesta QPRSF
        $(document).on("click","#MoreRes",function(){
            var url=$(this).attr("data-url");
            var id=$(this).attr("data-moreRes");
    
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

            //MODAL FORO
    $(document).on("click","#modalUpdateForo",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-id_foro");
        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalDeleteForo",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-id_foro");
        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalDetails",function(){
        alert("Hola");
       /*  var url=$(this).attr("data-url");
        var id=$(this).attr("data-id_foro");
        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        }); */
    });

    $(document).on("click","#cambioImagenForo",function(){
        var ruta=$("#imagen").attr("src");

        $("#cambiarImagenForo").html("<div class='jumbotron'><input type='file' id='file' name='imag_nueva'></div>");
        $("#cambiarImagenForo").append("<input type='hidden' name='imag_vieja' value='"+ruta+"'>");
    });

       // modal programas
    $(document).on("click","#insertPrograma",function(){
         var url=$(this).attr("data-url");
        $.ajax({
            url:url,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        }); 
    });


    $(document).on("click","#editPrograma",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-progEd");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#deletePrograma",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-progDel");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });


      // modal Linea Tecnologica
      $(document).on("click","#insertLinTec",function(){
        var url=$(this).attr("data-url");
       $.ajax({
           url:url,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       }); 
   });


   $(document).on("click","#editLinTec",function(){
       var url=$(this).attr("data-url");
       var id=$(this).attr("data-LinTecEd");

       $.ajax({
           url:url,
           data:"id="+id,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       });
   });

   $(document).on("click","#deleteLinTec",function(){
       var url=$(this).attr("data-url");
       var id=$(this).attr("data-LinTecDel");

       $.ajax({
           url:url,
           data:"id="+id,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       });
   });
   
    // MODALES PROGRAMA NIVEL
    $(document).on("click","#insertProgNiv",function(){
        var url=$(this).attr("data-url");
       $.ajax({
           url:url,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       }); 
   });


   $(document).on("click","#editProgNiv",function(){
       var url=$(this).attr("data-url");
       var id=$(this).attr("data-ProgNivEd");

       $.ajax({
           url:url,
           data:"id="+id,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       });
   });

   $(document).on("click","#deleteProgNiv",function(){
       var url=$(this).attr("data-url");
       var id=$(this).attr("data-ProgNivDel");

       $.ajax({
           url:url,
           data:"id="+id,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       });
   });

   
       // MODALES PROGRAMA AREA
       $(document).on("click","#insertProgArea",function(){
        var url=$(this).attr("data-url");
       $.ajax({
           url:url,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       }); 
   });

    
    $(document).on("click","#editProgArea",function(){
       var url=$(this).attr("data-url");
       var id=$(this).attr("data-ProgAreaEd");
    
       $.ajax({
           url:url,
           data:"id="+id,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       });
    });
    
    $(document).on("click","#deleteProgArea",function(){
       var url=$(this).attr("data-url");
       var id=$(this).attr("data-ProgAreaDel");
    
       $.ajax({
           url:url,
           data:"id="+id,
           success:function(datos){
               $("#contenedor").html(datos);
               $("#exampleModalCenter").modal("show");
           }
       });
    });
    




   // MODALES COMPETENCIA
   $(document).on("click","#insertCompetencia",function(){
    var url=$(this).attr("data-url");
   $.ajax({
       url:url,
       success:function(datos){
           $("#contenedor").html(datos);
           $("#exampleModalCenter").modal("show");
       }
   }); 
});


$(document).on("click","#editCompetencia",function(){
   var url=$(this).attr("data-url");
   var id=$(this).attr("data-CompEd");

   $.ajax({
       url:url,
       data:"id="+id,
       success:function(datos){
           $("#contenedor").html(datos);
           $("#exampleModalCenter").modal("show");
       }
   });
});

$(document).on("click","#deleteCompetencia",function(){
   var url=$(this).attr("data-url");
   var id=$(this).attr("data-CompDel");

   $.ajax({
       url:url,
       data:"id="+id,
       success:function(datos){
           $("#contenedor").html(datos);
           $("#exampleModalCenter").modal("show");
       }
   });
});



    //Modales del crud oferta

    $(document).on("click","#MoreOfer",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-moreOfer");

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

    $(document).on("click","#modalViewOfer",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-oferV");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#insertOferta",function(){
        var url=$(this).attr("data-url");
        $.ajax({
            url:url,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });




    $(document).on("click","#editOferta",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-oferE");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#DeleteOferta",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-oferD");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });


    //Modales del crud tipo de pqrsf

    $(document).on("click","#Responder",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-pqrsRes");

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

    $(document).on("click","#Detalles",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-Pqm");

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




    //Modales crud Tipo de noticia
    $(document).on("click","#InsertTnoti",function(){
        var url=$(this).attr("data-url");
       

        $.ajax({
            url:url,
            
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#Morenoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-TnotiM");

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

    $(document).on("click","#modalViewnoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-notiV");

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





    
 //Modal usuario
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

    //Modal usuario perfil
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


    //Modales Foro
    $(document).on("click","#modalUpdateForo",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-foro_id");
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