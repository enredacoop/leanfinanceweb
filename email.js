$(function(){
	$(".download-link").on('click', function(){
		$("input#form-download").val( this.getAttribute("data-download") );
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

	emailjs.init("user_0t6pKfOxfc5URBHNxCPaU");
	emailjs.send(service_id, template_id, template_params, "user_0t6pKfOxfc5URBHNxCPaU")
		.then(function(response) {
       /*console.log('SUCCESS!', response.status, response.text);*/
       $("#alert-ok").removeClass("d-none");
			document.getElementById("form-leanfinance").reset();
    }, function(error) {
       /*console.log('FAILED...', error);*/
       $("#alert-ko").removeClass("d-none");
			document.getElementById("form-leanfinance").reset();
    });
}

function sendEmailAndDownload() {
	email = $("#form-email").val();
	download = $('input#form-download').val();
	download_file = "";
	switch(download){
		case "1" : download_file = "CALCULADORA_GASTOS_FINANCIEROS.xlsx"; break;
		case "2" : download_file = "cap_table.xlsx"; break;
		case "3" : download_file = "Investor_Deck.pptx"; break;
		case "4" : download_file = "Proyecciones_2018-2022.xlsx"; break;
	}
	body = "<strong>" + email + "</strong> ha descargado el archivo <strong>" + download_file + "</strong>";

	var template_params = {
	   "reply_to": email,
	   "message_html": body
	}

	var service_id = "default_service";
	var template_id = "plantilla_descarga";

	emailjs.init("user_0t6pKfOxfc5URBHNxCPaU");
	emailjs.send(service_id, template_id, template_params, "user_0t6pKfOxfc5URBHNxCPaU")
		.then(function(response) {
       /*console.log('SUCCESS!', response.status, response.text);*/
       $("#alert-download-ok").removeClass("d-none");
			document.getElementById("form-download-leanfinance").reset();
    }, function(error) {
       /*console.log('FAILED...', error);*/
       $("#alert-download-ko").removeClass("d-none");
       //location.href = 'docs/descarga/' + download_file;

       var ajaxOptions = {
    		url: 'descargas/' + download_file
        };
        $.ajax(ajaxOptions);


			document.getElementById("form-download-leanfinance").reset();
    });
}