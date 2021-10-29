$(document).ready(function() {
    $('#usuarios').DataTable();
    estiloDataTable();
});

function estiloDataTable() {
    $('#usuarios_wrapper').addClass('p-2');
    $('#usuarios_length').addClass('d-flex mb-2')
    $('#usuarios_filter').addClass('d-flex mb-2')
    $('#usuarios_info').addClass('text-center');
    $('#usuarios_next').addClass('btn btn-light');
    $('#usuarios_previous').addClass('btn btn-light');
    $('#usuarios_paginate').addClass('mt-2 text-center');
    $('input[type="search"]').addClass('form-control');
    $('.paginate_button').addClass('mx-2');
    $('select').addClass('form-select');
}