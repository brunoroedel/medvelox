$( document ).ready(function() {
    verticalMenuLeftControl();
    openTasks();

    function verticalMenuLeftControl(){
		$( "#openMenu" ).click(function() {
			$('body').toggleClass('menu-open');
			var statusMenu = $('body').hasClass('menu-open');
			if(!statusMenu){
			  	$('#pageContent').animate({marginLeft: '80px'}, 500);
			  	$('#vertical-menu-left').animate({width: '80px'}, 500);
			  	$('#vertical-menu-left .label').fadeOut(500);
			  	$('#vertical-menu-left .chevron').fadeOut(250);
			}
			else
			{
			  	$('#pageContent').animate({marginLeft: '260px'}, 500);
			  	$('#vertical-menu-left').animate({width: '260px'}, 500);
			  	$('#vertical-menu-left .label').fadeIn(500);
			  	$('#vertical-menu-left .chevron').fadeIn(250);
			} 
		});
	}

	function openTasks(){
		$('#openAlerts').click(function(){
			$(this).parent().toggleClass('open');
			$('#alertBox').animate({width:'toggle'},350);
		});
	}
});

