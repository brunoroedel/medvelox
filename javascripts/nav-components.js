$( document ).ready(function() {
    verticalMenuLeftControl(); 

    function verticalMenuLeftControl(){
		$( "#openMenu" ).click(function() {
			$('body').toggleClass('menu-open');
			var statusMenu = $('body').hasClass('menu-open');
			if(!statusMenu){
			  	$('#pageContent').animate({marginLeft: '80px'}, 500);
			  	$('#vertical-menu-left').animate({width: '80px'}, 500);
			}
			else
			{
			  	$('#pageContent').animate({marginLeft: '260px'}, 500);
			  	$('#vertical-menu-left').animate({width: '260px'}, 500);
			} 
		});
	}		
});

