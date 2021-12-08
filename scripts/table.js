$(document).ready( function () {
    $('table.display').DataTable();
    $('input[type=search]').addClass('mb-1 form-control');
    $('select').addClass('mb-1 form-control');
    $('input').addClass('bg-light');
    $('select').addClass('bg-light');
    $('#usuarios_filter').addClass('text-color');
    $('#categorias_filter').addClass('text-color');
    $('.paginate_button').addClass('btn btn-color');
    $('.dataTables_info').addClass('float-start');
    $('.current').addClass('mx-1');
    $('#usuarios_length').hide();
    $('#usuarios_info').hide();
    $('#categorias_length').hide();
    $('#categorias_info').hide();
    $('#usuarios_paginate').show();
    $('#tabla-responsive').on('DOMSubtreeModified', function(){
        $('#usuarios_paginate').show();
        $('#categorias_paginate').show();
        $('.paginate_button').addClass('btn btn-color');
        $('.dataTables_paginate').addClass('pagination pagination-sm float-end');
        $('.dataTables_paginate').removeClass('dataTables_paginate paging_simple_numbers');
        $('.dataTables_info').addClass('float-start');
        $('.current').addClass('mx-1');
    });
});

