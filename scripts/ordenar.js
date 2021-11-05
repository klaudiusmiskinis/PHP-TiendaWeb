$(document).ready(function() {
    $('#usuarios').DataTable();
    estiloDataTable('usuarios');
});

function estiloDataTable(id) {
    $('#' + id + '_length').hide();
    $('#' + id + '_wrapper').addClass('p-2');
    $('#' + id + '_info').addClass('text-center');
    $('#' + id + '_filter').addClass('mb-3 d-flex')
    $('#' + id + '_paginate').addClass('mt-2 text-center');
    $('input[type="search"]').addClass('form-control');
    $('.current').addClass('mx-2');
    $('.paginate_button').addClass('mx-2');
}