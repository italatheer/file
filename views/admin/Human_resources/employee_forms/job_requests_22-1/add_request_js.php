


<script type="text/javascript">
    $(document).ready(function() {
        var oTable_usergroup = $('#js_table').DataTable({
            dom: 'Bfrtip',
            "ajax": '<?php echo base_url(); ?>human_resources/employee_forms/job_requests/Job_request/display_data',



            aoColumns:[
                { "bSortable": true },
              //  { "bSortable": true },
                { "bSortable": true },
                { "bSortable": true },
                { "bSortable": true },
                { "bSortable": true }



            ],

            buttons: [
                'pageLength',
                'copy',
                'excelHtml5',
                {
                    extend: "pdfHtml5",
                    orientation: 'landscape'
                },

                {
                    extend: 'print',
                    exportOptions: { columns: ':visible'},
                    orientation: 'landscape'
                },
                'colvis'
            ],
            colReorder: true



        });
    });
</script>




