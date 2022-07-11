/*
* Este JS maneja todo lo relacionado con los tags de noticias
* ej: buenosaires.gob.ar/tags/salud
*/
(function($){
    window.addEventListener('DOMContentLoaded', function(){
        let cards = $('.card-tags');
        cards.each(function(){
            $(this).on('click', function(){
                window.location.href = 'http://' + window.location.hostname +  $(this).find('.views-field-title a').attr('href');
            });
        });
    });
})(jQuery);