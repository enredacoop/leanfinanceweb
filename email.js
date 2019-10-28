$(function(){
	$(".download-link").on('click', function(event){
		event.preventDefault();
		$("input#form-download").val( this.getAttribute("data-download") );
		$("#alert-download-ok").addClass("d-none");
		$("#alert-download-ko").addClass("d-none");
	});
});


function sendEmail() {
	nombre = $("#form-name").val();
	email = $("#form-email").val();
	telefono = $("#form-phone").val();
	mensaje = $("#form-message").val();
	body = nombre + " ha rellenado el formulario de contacto de la web, los datos son los siguientes.<br><br><p><strong>Nombre:</strong> " + nombre + "</p><p><strong>Email:</strong> " + email + "</p><p><strong>Teléfono:</strong> " + telefono + "</p><br><p><strong>Motivo de la consulta:</strong><br> " + mensaje + "</p>";

	var template_params = {
	   "reply_to": email,
	   "message_html": body
	}

	var service_id = "default_service";
	var template_id = "plantilla_contacto";

	emailjs.send(service_id, template_id, template_params, "user_0t6pKfOxfc5URBHNxCPaU")
		.then(function(response) {
       console.log('SUCCESS!', response.status, response.text);
      $("#alert-ok").removeClass("d-none");
			document.getElementById("form-leanfinance").reset();
			// Redireccionamos a la página de Gracias
			window.location = "http://leanfinance.es/gracias";
    }, function(error) {
       console.log('FAILED...', error);
      $("#alert-ko").removeClass("d-none");
    });
}

function sendEmailEnisa() {
	nombre = $("#form-name").val();
	email = $("#form-email").val();
	phone = $("#form-phone").val();
	body = nombre + " ha rellenado el formulario de solicitud de ayuda sobre Enisa. Los datos son los siguientes.<br><br><p><strong>Nombre:</strong> " + nombre + "</p><p><strong>Email:</strong> " + email + "</p><p><strong>Teléfono:</strong> " + phone + "</p>";

	var template_params = {
	   "reply_to": email,
	   "message_html": body
	}

	var service_id = "default_service";
	var template_id = "plantilla_contacto";

	emailjs.send(service_id, template_id, template_params, "user_0t6pKfOxfc5URBHNxCPaU")
		.then(function(response) {
       console.log('SUCCESS!', response.status, response.text);
      $("#alert-ok").removeClass("d-none");
			document.getElementById("form-leanfinance-enisa").reset();
			// Redireccionamos a la página de Gracias
			window.location = "http://leanfinance.es/gracias";
    }, function(error) {
       console.log('FAILED...', error);
      $("#alert-ko").removeClass("d-none");
    });
}

function sendEmailAndDownload() {
	email = $("#form-download-email").val();
	download = $('input#form-download').val();
	download_file = "";
	switch(download){
		case "1" : download_file = "CALCULADORA_GASTOS_ FINANCIEROS.xlsx"; break;
		case "2" : download_file = "cap_table.xlsx"; break;
		case "3" : download_file = "Investor_Deck.pptx"; break;
		case "4" : download_file = "PROYECCIONES_FINANCIERAS_4_ AÑOS.xlsx"; break;
	}
	body = "<strong>" + email + "</strong> ha descargado el archivo <strong>" + download_file + "</strong>";

	var template_params = {
	   "reply_to": email,
	   "message_html": body
	}

	var service_id = "default_service";
	var template_id = "plantilla_descarga";

	emailjs.send(service_id, template_id, template_params, "user_0t6pKfOxfc5URBHNxCPaU")
		.then(function(response) {
      $("#alert-download-ok").removeClass("d-none");
      
      //document.getElementById("download-file-start").src = 'descargas/' + download_file;
      downloadLink(download_file);

			document.getElementById("form-download-leanfinance").reset();
			// Redireccionamos a la página de Gracias
			window.open("https://leanfinance.es/gracias");
    }, function(error) {
      $("#alert-download-ko").removeClass("d-none");
    });
}

function downloadLink(download_file) {
	window.open('https://leanfinance.es/herramientas/descargas/' + download_file);

	/*var ajaxOptions = {
		url: 'https://leanfinance.es/herramientas/descargas/' + download_file
    };
    
    var res = $.ajax(ajaxOptions);
    
    function onAjaxDone(data) {
    		location.href = 'https://leanfinance.es/herramientas/descargas/' + download_file;
    }
    
    function onAjaxFail() {
    	alert('Se ha producido un error. Intenta la descarga más tarde.');
    }
    
    res
    	.done(onAjaxDone)
        .fail(onAjaxFail)
    ;*/
}