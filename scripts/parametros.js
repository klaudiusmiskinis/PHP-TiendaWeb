if (document.title == 'Login' || document.title == 'Register'){
    let url = window.location.search.substring(1);
    let parametro = url.split('=')[1];
    if(parametro == 'incorrecto'){
        let error = '<div class="alert alert-info border-0 shadow mt-2" role="alert">' +
                        'Datos incorrectos.' +
                    '</div>';
        document.getElementById('frase-login').insertAdjacentHTML('afterend', error);
    } else if (parametro == 'existe') {
        $('#container-login').hide();
        $('#container-register').slideDown("slow");
        let error = '<div class="alert alert-info border-0 shadow mt-2" role="alert">' +
                        '<p>La cuenta de correo introducida ya esta registrada.</p>' +
                    '</div>';
        document.getElementById('frase-register').insertAdjacentHTML('afterend', error);
    } else if (parametro == 'correcto') {
        $('#container-register').hide();
        $('#container-login').slideDown("slow");
        let error = '<div class="alert alert-info border-0 shadow" role="alert">' +
                        '<p>La cuenta de correo se ha creado correctamente.</p>' +
                    '</div>';
        document.getElementById('frase-login').insertAdjacentHTML('afterend', error);
    }
}