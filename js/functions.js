//Sidebar open
function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
    $(document).bind('mousewheel DOMMouseScroll', prevDefault);
}
function closeNav() {
    document.getElementById("mySidenav").style.left = "-255px";
    $(document).unbind('mousewheel DOMMouseScroll', prevDefault);
}
function prevDefault(e){
    e.preventDefault();
}

function checkStickyMenu(){
    var y_scroll_pos = window.pageYOffset;

    if(y_scroll_pos > 0) {
        $('.desktop-header').addClass('sticky');
        $('.desktop-header .header-nav').slideUp()
        $('#logo-sticky-desktop').fadeIn();
        $('#lang-switch-sticky').fadeIn();
    }
    else{
        $('.desktop-header').removeClass('sticky');
        $('.desktop-header .header-nav').slideDown()
        $('#logo-sticky-desktop').fadeOut();
        $('#lang-switch-sticky').fadeOut();
    }
}

/*********************************************************************/
$(window).on('resize', function() {
   $('.100vh').height(window.innerHeight);
});

/*********************************************************************/


$(window).on('load', function (){

	document.getElementById('openbtn').addEventListener('click', openNav);
	document.getElementById('closebtn').addEventListener('click', closeNav);

/*********************************************************************/
    $(".owl-carousel-hp").owlCarousel({
        items:1,
        nav:false,
        dots:true,
    });

/*********************************************************************/
	$('#back-to-top').on('click', function(){
		$('html, body').animate({
        	scrollTop: 0
	    }, 700);
	});

/*****************************************************************/
    $('#chevron').on('click', function(){
        $('html, body').animate({
            scrollTop: $('#chevron').offset().top + 32
        }, 700);
    });
/*****************************************************************/
    $(window).on('scroll', function() {
        checkStickyMenu();
    });
    $( window ).resize(function() {
      checkStickyMenu();
    });
    checkStickyMenu();
/*****************************************************************/
    $('.100vh').height(window.innerHeight);
    $('#hp-mobile-visuel').height(window.innerHeight - $("header").height());
});


