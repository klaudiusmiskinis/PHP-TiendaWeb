$(document).ready(function() {
    $('#usuarios').DataTable();
    estiloDataTable();
});

function estiloDataTable() {
    $('#usuarios_length').hide();
    $('.current').addClass('mx-2');
    $('.paginate_button').addClass('mx-2');
    $('#usuarios_wrapper').addClass('p-2');
    $('#usuarios_info').addClass('text-center');
    $('#usuarios_filter').addClass('d-flex mb-3')
    $('#usuarios_paginate').addClass('mt-2 text-center');
    $('input[type="search"]').addClass('form-control');
}