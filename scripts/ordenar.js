$(document).ready(function() {
    $('#usuarios').DataTable();
    estiloDataTable();
});

function estiloDataTable() {
    $('#usuarios_wrapper').addClass('p-2');
    $('#usuarios_length').hide();
    $('#usuarios_filter').addClass('d-flex mb-3')
    $('#usuarios_info').addClass('text-center');
    $('.next').addClass('btn btn-light');
    $('.previous').addClass('btn btn-light');
    $('.current').addClass('mx-2');
    $('#usuarios_paginate').addClass('mt-2 text-center');
    $('input[type="search"]').addClass('form-control');
    $('.paginate_button').addClass('mx-2');
    $('select').addClass('form-select');
}