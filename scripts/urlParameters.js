if (document.title == 'Login' || document.title == 'Register') {
        let error = '<div class="alert alert-dark mt-2" role="alert">' +
                        '¡Vaya! Datos incorrectos.' +
                    '</div>'
        let sPageURL = window.location.search.substring(1);
        let parametro = sPageURL.split('=')[1];
        if(parametro == 'incorrecto'){
            document.getElementById('frase-login').insertAdjacentHTML('afterend', error);
        }
}