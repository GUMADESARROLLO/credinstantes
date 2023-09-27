<script type="text/javascript">
    $(document).ready(function () {
        InitTable();

        $("#btn-buscar-morosidad").click(function(){
            InitTable();
        })

   
        $('#dt-ini,#dt-end').datetimepicker({
            format: 'DD/MM/YYYY'
        });

        


        

    })

    function InitTable() {

        $("#tbl_clientes").DataTable({
            "responsive": true, 
            "lengthChange": false, 
            "destroy": true,
            "autoWidth": false,
            "info": false,
            "language": {
                "zeroRecords": "NO HAY COINCIDENCIAS",
                "paginate": {
                    "first": "Primera",
                    "last": "Última ",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },    
            },
            "ajax":{
                "url": "getMorosidad",
                "type": 'POST',
                'dataSrc': '',
                "data": {               
                    _token  : "{{ csrf_token() }}" 
                }
            },
            'columns': [
                { "title": "NOMBRE",              "data": "nombre" },
                { "title": "APELLIDOS",            "data": "apellidos" },
                { "title": "ESTADO",            "data": "Estado" },
            ],
        })
        $("#tbl_clientes_length").hide();
        $("#tbl_clientes_filter").hide();
    }


</script>