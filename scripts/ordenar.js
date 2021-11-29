$(document).ready( function () {
    $('table.display').DataTable( {
        "language": {
            "slengthMenu": "Mostrando _MENU_",
            "szeroRecords": "No hay datos que coincidan",
            "sinfo": "Mostrando pagina _PAGE_ de _PAGES_",
            "sinfoEmpty": "No hay datos disponibles",
            "sinfoFiltered": "(filtrados _MAX_ registros)",
            "sInfoEmpty": "Mostrando 0 entradas",
            "sNext":"▶",
            "sPrevious":"◀"
        }
    });

    $('input[type=search]').addClass('mb-1 form-control');
    $('select').addClass('mb-1 form-control');
    $('input').addClass('bg-light');
    $('select').addClass('bg-light');
    $('.dataTables_info').addClass('text-color');
    $('#usuarios_filter').addClass('text-color');
    $('#usuarios_length').addClass('text-color');
    $('.paginate_button').addClass('btn btn-primary');
    $('.dataTables_paginate').addClass('pagination pagination-sm float-end');
    $('.dataTables_paginate').removeClass('dataTables_paginate paging_simple_numbers');
    $('.dataTables_info').addClass('float-start');
    $('.current').addClass('mx-1');
    let config = $('.sorting')[5];
    config.removeAttribute("class");
    config.removeAttribute("aria-label")
    config.removeAttribute("aria-controls")
});
