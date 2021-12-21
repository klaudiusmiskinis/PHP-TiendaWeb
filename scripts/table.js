$(document).ready( function () {
    /* INIT */
    $('table.display').DataTable();
    /* GENERAL */
    $('input[type=search]').addClass('mb-1 form-control');
    $('select').addClass('mb-1 form-control');
    $('input').addClass('bg-light');
    $('select').addClass('bg-light');
    $('.paginate_button').addClass('btn btn-color');
    $('.dataTables_info').addClass('float-start');
    $('.current').addClass('mx-1');
    /* USUARIOS */
    $('#usuarios_filter').addClass('text-color');
    $('#usuarios_length').hide();
    $('#usuarios_info').hide();
    $('#usuarios_paginate').show();
    /* PRODUCTOS */
    $('#productos_filter').addClass('text-color');
    $('#productos_length').hide();
    $('#productos_info').hide();
    $('#productos_paginate').show();
    /* CATEGORIAS */
    $('#categorias_filter').addClass('text-color');
    $('#categorias_length').hide();
    $('#categorias_info').hide();
    $('#categorias_paginate').hide();
    /* EventListener */
    $('#tabla-responsive').on('DOMSubtreeModified', function(){
        $('#usuarios_paginate').show();
        $('#categorias_paginate').show();
        $('#productos_paginate').show();
        $('.paginate_button').addClass('btn btn-color');
        $('.dataTables_paginate').addClass('pagination pagination-sm');
        $('.dataTables_paginate').removeClass('dataTables_paginate paging_simple_numbers');
        $('.current').addClass('mx-1');
    });
});

