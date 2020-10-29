//dsipara un evento cuando la ventana se redimensiona con el raton
//lo dispara cuando se suelta el raton

console.log('resize working');
jQuery(window).resize(function() {
   if(this.resizeTO) clearTimeout(this.resizeTO);
   this.resizeTO = setTimeout(function() {
      jQuery(this).trigger('resizeEnd');
   }, 500);
});
jQuery(window).bind("resizeEnd", function() {
   // Acción
   console.log('ventana redimensionada');


});
