if (document.title == 'Login' || document.title == 'Register'){
        let url = window.location.search.substring(1);
        let parametro = url.split('=')[1];
        console.log(url, parametro);
        if(parametro == 'incorrecto'){
            console.log('B', parametro);
            let error = '<div class="alert alert-dark mt-2" role="alert">' +
                            '¡Vaya! Datos incorrectos.' +
                        '</div>';
            document.getElementById('frase-login').insertAdjacentHTML('afterend', error);
        } else if (parametro == 'existe') {
            console.log('ASD')
            $('#container-login').hide();
            $('#container-register').slideDown("slow");
            let error = '<div class="alert alert-dark mt-2" role="alert">' +
                            'La cuenta de correo introducida ya esta registrada.' +
                        '</div>';
            document.getElementById('frase-register').insertAdjacentHTML('afterend', error);
        }
}