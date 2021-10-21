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

document.onreadystatechange = function(e) {
    if (document.readyState === 'complete') {
        $('nav').invisible();
        $('#container-register').hide();
        $('#navegador').hide();
    };
};

window.onload = function(e) {
    $('#container-login').slideDown();
    $('#navegador').fadeIn(500, function(){
        $('nav').hide();
        $('nav').visible();
        $('nav').fadeIn(300);
    });
};


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
