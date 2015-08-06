$( document ).ready(function() {
	/*Controla lista e novo exame--*/
	$('.exames-control').click(function(){
		$('#novoExame').toggleClass('hidden');
		$('#listaExames').toggleClass('hidden');
	})

	// Javascript to controlar as abas de acordo com a url da página
	var url = document.location.toString();
	if (url.match('#')) {		
	    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
	    window.scrollTo(0, 0);
	} 

	// Mantem a aba selecionada quando a mesma é recarregada
	$('.nav-tabs a').on('shown.bs.tab', function (e) {	
	    window.location.hash = e.target.hash;
	    window.scrollTo(0, 0);
	});

	$('#slider-index').carousel({
		interval: false,
		cycle: true,
	});

	/*$( window ).resize(function() {
		var tamanhoColuna = $('.scroll-container').parent().width();
		$('.scroll-container').width(tamanhoColuna);
	});*/
});





