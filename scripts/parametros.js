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
                            '<p>La cuenta de correo introducida ya esta registrada.</p>' +
                            '<i class="bi bi-x-circle-fill"></i>' +
                        '</div>';
            document.getElementById('frase-register').insertAdjacentHTML('afterend', error);
        } else if (parametro == 'correcto') {
            $('#container-register').hide();
            $('#container-login').slideDown("slow");
            let error = '<div class="alert alert-dark mt-2" role="alert">' +
                            '<p>La cuenta de correo se ha creado correctamente.</p>' +
                            '<i class="bi bi-check2"></i>' +
                        '</div>';
            document.getElementById('frase-login').insertAdjacentHTML('afterend', error);
        }
}