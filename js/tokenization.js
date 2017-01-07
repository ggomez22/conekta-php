Conekta.setPublicKey(""); //Send public API Key

var errorResponseHandler, successResponseHandler, tokenParams;

$(function () {
  $("#card-form").submit(function(event) {
    tokenParams = $(this);

    // Previene hacer submit más de una vez
    tokenParams.find("button").prop("disabled", true);

    /*tokenParams = {
    	"card": {
    		"number": "4242424242424242",
    		"name": "Javier Pedreiro",
    		"exp_year": "2021",
    		"exp_month": "12",
    		"cvc": "123",
    		"address": {
    			"street1": "Calle 123 Int 404",
    			"street2": "Col. Condesa",
    			"city": "Ciudad de Mexico",
    			"state": "Distrito Federal",
    			"zip": "12345",
    			"country": "Mexico"
    		}
    	}
    };*/

    /* Después de tener una respuesta exitosa, envía la información al servidor */

    var conektaTokenId;
    successResponseHandler = function(token) {
    	tokenParams = $("#card-form");

  		/* Inserta el token_id en la forma para que se envíe al servidor */
  		tokenParams.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
 
  		/* and submit */
  		tokenParams.get(0).submit();

    	console.log(token.id);
    	/*return $.post('/index.php?token_id=' + conektaTokenId, function() {
    		return document.location = 'payment_succeeded';
    	});*/
    };

    /* Después de recibir un error */

    errorResponseHandler = function(error) {
    	return console.log(error.message);
    	tokenParams = $("#card-form");
  
  		/* Muestra los errores en la forma */
  		tokenParams.find(".card-errors").text(response.message_to_purchaser);
  		tokenParams.find("button").prop("disabled", false);
    };

    Conekta.Token.create(tokenParams, successResponseHandler, errorResponseHandler);
   
    // Previene que la información de la forma sea enviada al servidor
    return false;
  });
});