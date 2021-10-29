$(document).ready(function() {
    $('#usuarios').DataTable();
    $('#usuarios_filter').addClass('col-sm');
    $('#usuarios_length').addClass('col-sm');
    $('#usuarios_info').addClass('m-2');
    $('#usuarios_wrapper').addClass('p-2')
    $('#usuarios_previous').addClass('btn btn-light');
    $('#usuarios_next').addClass('btn btn-light');
    $('input[type="search"]').addClass('form-control');
    $('select').addClass('form-select');
    $('.paginate_button').addClass('mx-2');
});