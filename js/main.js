$(document).ready(function(){

	    $('#llamar').click(function() {

          var telefono =$("#telefono").val().length;
          var pais =$("#pais").val();

      if ($('#nombre').val() == '' || pais == null) {

        alertify.set('notifier','position', 'top-right');
        alertify.error('Rellene todos los campos');

          return false;

			}else if (telefono < 9 || telefono > 9){

        alertify.set('notifier','position', 'top-right');
        alertify.error('NO DEBE SER MENOR O MAYOR A 9 DIGITOS');

          return false;

    	}else if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {

        alertify.set('notifier','position', 'top-right');
        alertify.error('CORREO ELECTRONICO INGRESADO NO ES CORRECTO');

        	return false;

      }else{

          var telefono  =$("#telefono").val();
          var nombre    =$("#nombre").val();
          var email     =$("#email").val();

          var datos = {nombre, pais, telefono, email};

	        $.ajax({
	            type: "POST",
	            url: "includes/call.php",
	            data: datos,

              success: function(a) {
console.log(a);
                if (a == 1){

                  $(".llamar").modal("hide");
                  alertify.set('notifier','position', 'top-right');
                  alertify.success('Espere un momento te estamos llamando');

                }

              }



	        });
	    }

    });
                                      	});
