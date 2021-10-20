$('#container-register').hide();
$('#container-login').hide();
$('#container-login').slideDown('slow');

//CLICK FUNCIONES
$('#btn-to-register').on('click', function() {
    $('#container-login').slideUp('slow');
    $('#container-register').slideDown('slow');
});

$('#btn-to-login').on('click', function() {
    $('#container-register').slideUp('slow');
    $('#container-login').slideDown('slow');
});

$('#nav-nombre').on('click', function() {
    $('#nav-nombre').animate("slide", {direction: "left"}, 1000);
})
