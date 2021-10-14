$('#container-register').hide();
$('#container-login').hide();
$('#container-login').slideDown("slow");

//CLICK FUNCIONES
$("#btn-to-register").click(function() {
    $('#container-login').slideUp("slow");
    $('#container-register').slideDown("slow");
});

$("#btn-to-login").click(function() {
    $('#container-register').slideUp("slow");
    $('#container-login').slideDown("slow");
});