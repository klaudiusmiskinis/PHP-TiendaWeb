$(document).ready( function () {
    $('table.display').DataTable();
    $('input[type=search]').addClass('mb-1 form-control');
    $('select').addClass('mb-1 form-control');
    $('input').addClass('bg-light');
    $('select').addClass('bg-light');
    $('.dataTables_info').addClass('text-color');
    $('#usuarios_filter').addClass('text-color');
    $('#usuarios_length').addClass('text-color');
    $('.paginate_button').addClass('btn btn-color');
    $('.dataTables_paginate').addClass('pagination pagination-sm float-end');
    $('.dataTables_paginate').removeClass('dataTables_paginate paging_simple_numbers');
    $('.dataTables_info').addClass('float-start');
    $('.current').addClass('mx-1');
});
