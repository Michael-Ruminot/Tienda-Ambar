$(document).ready(function(){

    $('#enviar').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#nombre').val() == '' ){
            errores += '<p>Nombre</p>';
        }

        // Validado Telefono ==============================
        if( $('#telefono').val() == '' ){
            errores += '<p>Teléfono</p>';
        } 

        // Validado Correo ==============================
        if( $('#correo').val() == '' ){
            errores += '<p>Correo electrónico</p>';
        }

        // Validado Mensaje ==============================
        if( $('#mensaje').val() == '' ){
            errores += '<p>Mensaje</p>';
        }

        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Debes ingresar</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
