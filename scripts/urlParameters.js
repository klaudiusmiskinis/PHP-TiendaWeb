if (document.title == 'Login' || document.title == 'Register'){
        let url = window.location.search.substring(1);
        let parametro = url.split('=')[1];
        if(parametro == 'incorrecto'){
            let error = '<div class="alert alert-dark mt-2" role="alert">' +
                            '¡Vaya! Datos incorrectos.' +
                        '</div>';
            document.getElementById('frase-login').insertAdjacentHTML('afterend', error);
        } else if (parametro == 'existe') {
            $('#container-login').hide();
            $('#container-register').slideDown("slow");
            let error = '<div class="alert alert-dark mt-2" role="alert">' +
                            'El usuario ya existe.' +
                        '</div>';
            document.getElementById('frase-register').insertAdjacentHTML('afterend', error);
        }
}