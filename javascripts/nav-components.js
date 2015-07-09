$( document ).ready(function() {
    var pageWidth = $(window).width();
    
    verticalMenuLeftControl();
    openTasks();
    moveChevron(); 
    removeAtributeMenu();

    $(window).resize(function() {
    	var pageWidth = $(window).width();
    	if(pageWidth < 767){
    		removeAtributeMenu();
    	}	
	});

    //open vertical menu
    function verticalMenuLeftControl(){
		$( "#openMenu" ).click(function() {
			OpenCloseBigScreen();
		});
		
		//small screens
		$('#OpenMenuSmall').click(function() {
			OpenSmallScreen();
		});
		$('#CloseMenuSmall').click(function() {
			CloseSmallScreen();
		});
		$('#OpenSmallAlerts').click(function() {
			OpenSmallScreenTasks();
		});
		$( "#CloseSmallAlerts" ).click(function() {
			CloseSmallScreenTasks();
		});	
	}

	function removeAtributeMenu(){	
	    $('#vertical-menu-left').removeAttr("style");
	    $('#vertical-menu-left ul li .label').removeAttr("style");
	}
});

//open menu tasks alerts
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

//Open or Close Small Screen vertical left menu
function OpenSmallScreen(){		
	$('#vertical-menu-left').removeClass('animated bounceOutDown');
	$('#vertical-menu-left').addClass('animated bounceInUp');
}

//Close Vertical left Menu on Mobile screens vertical left menu
function CloseSmallScreen(){	
	$('#vertical-menu-left').removeClass('animated bounceInUp');
	$('#vertical-menu-left').addClass('animated bounceOutDown');
}

//Open or Close Small Screen task box alerts
function OpenSmallScreenTasks(){		
	$('#alertBox').removeClass('animated bounceOutDown');
	$('#alertBox').addClass('animated bounceInUp');
}

//Close Vertical left Menu on Mobile screens task box alerts
function CloseSmallScreenTasks(){	
	$('#alertBox').removeClass('animated bounceInUp');
	$('#alertBox').addClass('animated bounceOutDown');
}



