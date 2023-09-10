<script type="text/javascript">
    $(document).ready(function () {

        $('[data-mask]').inputmask()

        $("#tbl_clientes").DataTable({
            "responsive": true, 
            "lengthChange": false, 
            "autoWidth": false,
        }).buttons().container().appendTo('#tbl_clientes_wrapper .col-md-6:eq(0)');


        $("#btn_save_credito").click(function(){


            var Nombre_         = $("#txtNombre_Municipio").val();   
            var Departamento    = $("#selDepartamento option:selected").val();  
            
            Nombre_             = isValue(Nombre_,'N/D',true)
            Departamento        = isValue(Departamento,'N/D',true)


            if(Nombre_ === 'N/D' || Departamento === 'N/D'){
                Swal.fire("Oops", "Datos no Completos", "error");
            }else{

                $.ajax({
                url: "SaveNewMunicipio",
                type: 'post',
                data: {
                    Nombre_   : Nombre_,
                    Departamento:Departamento,
                    _token  : "{{ csrf_token() }}" 
                },
                async: true,
                success: function(response) {

                    if(response){
                        Swal.fire({
                        title: 'Correcto',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }   
                        })
                    }
                },
                error: function(response) {
                    Swal.fire("Oops", "No se ha podido guardar!", "error");
                }
            }).done(function(data) {
                //location.reload();
            });

                
            }

            
        });


      

    })

    function rmMunicipio(idMuni) {
        Swal.fire({
            title: 'Eliminar este Municipio',
            text: "¿Desea eliminar este Municipio?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Si, eliminar',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            Swal.fire("Removido", "con exito", "success");
        if (result.value) {
            $.getJSON("rmMunicipio/"+idMuni, function(json) {
                if (json) {
                    location.reload();
                }
            })
        }
        })
    }

    function isValue(value, def, is_return) {
        if ( $.type(value) == 'null'
            || $.type(value) == 'undefined'
            || $.trim(value) == '(en blanco)'
            || $.trim(value) == ''
            || ($.type(value) == 'number' && !$.isNumeric(value))
            || ($.type(value) == 'array' && value.length == 0)
            || ($.type(value) == 'object' && $.isEmptyObject(value)) ) {
            return ($.type(def) != 'undefined') ? def : false;
        } else {
            return ($.type(is_return) == 'boolean' && is_return === true ? value : true);
        }
    }

</script>