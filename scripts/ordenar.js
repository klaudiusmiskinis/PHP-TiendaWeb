$(document).ready(function() {
    $('#usuarios').DataTable();
    $('#usuarios_wrapper').addClass('p-2')
    $('#usuarios_info').addClass('text-center');
    $('#usuarios_next').addClass('btn btn-light');
    $('#usuarios_previous').addClass('btn btn-light');
    $('input[type="search"]').addClass('form-control');
    $('.paginate_button').addClass('mx-2');
    $('select').addClass('form-select');
    $('#usuarios_paginate').addClass('mt-2 text-center');
}, function() {
    document.getElementById("usuarios_wrapper").insertAdjacentHTML("beforestart", "<div id='usuarios_cabecera' class='row bg-danger'>");
    document.getElementById("usuarios_filter").insertAdjacentHTML("afterend", "</div>");
});