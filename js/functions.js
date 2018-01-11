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

});


