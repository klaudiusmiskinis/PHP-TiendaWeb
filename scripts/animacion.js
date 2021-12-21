(function($) {
    $.fn.invisible = function() {
        return this.each(function() {
            $(this).css("opacity", "0");
        });
    };
    $.fn.visible = function() {
        return this.each(function() {
            $(this).css("opacity", "1");
        });
    };
}(jQuery));

$('#offcanvasWithBackdrop').on('click', function() {
    $('#offcanvasWithBackdrop').slideDown();
});

//CLICK FUNCIONES
$('#btn-to-register').on('click', function() {
    $('#container-login').slideUp('slow');
    $('#container-register').slideDown('slow');
});

$('#btn-to-login').on('click', function() {
    $('#container-register').slideUp('slow');
    $('#container-login').slideDown('slow');
});

//ANIMACIONES 
$('#nav-nombre').on('click', function() {
    $('#nav-nombre').fadeOut(800);
})