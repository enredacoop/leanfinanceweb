var item_blog = "";

$(document).ready( function() {
	initializeGA();

	var url = new URL( window.location.href);
	var hash = url.searchParams.get("hash");

	if( hash && hash != "" ) {
		item_blog = decodeURI( hash );
	}

});

/* Función para mostrar modal con el contenido de la entrada del blog */
function showModalContent(){
	$('#jsonContent > div').click( function(){
		var number = $(this).attr("item-blog");
		var content = $("#item-" + number + "-description")[0].innerHTML;
		var title = $("#item-" + number + "-title")[0].innerHTML;

		$("#modal-content").html(content);
		$("#modal-title").html(title);

		setLinksSocialNetworks(title);
		gaOpenItemBlog(title);


		$('#blog-modal').modal('show');
	});	
}
function loadModalContent(id){
		var number = $("#jsonContent > #" + id).attr("item-blog");
		var content = $("#item-" + number + "-description")[0].innerHTML;
		var title = $("#item-" + number + "-title")[0].innerHTML;

		$("#modal-content").html(content);
		$("#modal-title").html(title);

		setLinksSocialNetworks(title);
		gaOpenItemBlog(title);


		$('#blog-modal').modal('show');
}

function clearTitle( title ){
	//debugger;
	var title = title.replace(/[&\/\\#,+()$~%.'":*?¿¡!<>{}]/g,'')
	title = title.split(" ").join("_");
	return title;
}


/* Función para cambiar los enlaces de los iconos de compartir en redes sociales */
function setLinksSocialNetworks( title ) {
	var url_blog = "https://leanfinance.es/blog";
	title_url = clearTitle( title.substr( 0, title.length-1) );
	//debugger

	var url_facebook = "https://facebook.com/sharer/sharer.php?u=" + url_blog + "?hash=" + title_url;
	var url_twitter = "https://twitter.com/intent/tweet/?text=" + title + "&amp;url=" + url_blog + "?hash=" + title_url;
	var url_linkedin = "https://www.linkedin.com/sharing/share-offsite/?title=" + title + "&url=" + url_blog + "?hash=" + title_url;
	var url_whatsapp = "whatsapp://send?text=" + title + "%20" + url_blog + "?hash=" + title_url;
	var url_telegram = "https://telegram.me/share/url?text=" + title + "&url=https%3A%2F%2Fleanfinance.es%2Fblog" + "?hash=" + title_url;

	$("#bs-facebook").attr("href", url_facebook );
	$("#bs-twitter").attr("href", url_twitter );
	$("#bs-linkedin").attr("href", url_linkedin );
	$("#bs-whatsapp").attr("href", url_whatsapp );
	$("#bs-telegram").attr("href", url_telegram );
}


/* Función para enviar evento a Google Analytics */
function gaOpenItemBlog(title) {
	ga('send', 'event', 'Blog', 'item', title);
}
/* Función para inicializar Google Analytics */
function initializeGA() {
	window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
	ga('create', 'UA-114307569-1', 'auto');
	ga('send', 'pageview');
}