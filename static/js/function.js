// Ancla deslizante

$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});

var $contenido      = $("#contenido");
var $ver_contenido  = $("#ver_contenido");


//Ocultar-mostrar contenido desayuno

function mostrarContenido(){
    $contenido.slideToggle();
    return false;
}

$ver_contenido.click(mostrarContenido);