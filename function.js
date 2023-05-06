$(function(){
	$('nav.mobile').click(function(){
		//O que vai acontecer quando clicar
		var listaMenu = $('nav.mobile ul');
		listaMenu.slideToggle();
	});

	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html, body').animate({scrollTop:divScroll}, 2000);
	}


});