$( document ).ready(function() {
    var pageWidth = $(window).width();
    verticalMenuLeftControl();
    openTasks();
    moveChevron(); 

    $(window).resize(function() {
    	removeAtributeMenu();	
	});

    //open vertical menu
    function verticalMenuLeftControl(){
		$( "#openMenu" ).click(function() {
			OpenCloseBigScreen();
		});
		$('#OpenMenuSmall').click(function() {
			OpenCloseSmallScreen();
		});
	}

	function removeAtributeMenu(){
		if(pageWidth > 767){
	    	$('#vertical-menu-left').removeAttr("style");
	    }
	}
});

//open menu tasks
function openTasks(){
	$('#openAlerts').click(function(){
		$(this).parent().toggleClass('open');
		$('#alertBox').animate({width:'toggle'},350);
	});
}

//open chevron dropdown menus
function moveChevron(){
	$("[data-toggle='collapse']").click(function(){
		$(this).find('.chevron').toggleClass('in');
	});
}	

//Open Close Big Screen
function OpenCloseBigScreen(){

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
}

//Open Close Small Screen
function OpenCloseSmallScreen(){	
	$('#vertical-menu-left').animate({width:'toggle'},350);
}



