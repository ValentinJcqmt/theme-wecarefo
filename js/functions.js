//Sidebar open
function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
}
function closeNav() {
    document.getElementById("mySidenav").style.left = "-255px";
}
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
});


