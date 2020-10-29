// Hide Header on on scroll down

console.log('scroll file working...');

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = '83';
/*var navbarHeight = jQuery('menu_bar').outerHeight();*/



jQuery(window).scroll(function(event){

    didScroll = true;
    console.log('scroll');
});

setInterval(function() {

    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {

    if( jQuery('.bt-menu-izq').hasClass('is-active') || jQuery('.bt-menu-dcha').hasClass('is-active') ){
        return;
    }


    var st = jQuery(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        jQuery('.menu_bar').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + jQuery(window).height() < jQuery(document).height()) {
            jQuery('.menu_bar').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}


/*jQuery(window).on('load',function(){

      jQuery(".menu-izq").mCustomScrollbar({
        theme:"minimal",
      });
      jQuery(".body").mCustomScrollbar({
        theme:"minimal",
      });

});*/