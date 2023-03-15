$(document).ready(function(){
    configurarInicio();
    $('.myicono').click(function(e){

        $('#navbar ul').toggleClass('listapq');

    })	

    function configurarInicio(){
        var urlPath = window.location.pathname;
        $('nav a').each(function(){					
            var href = $(this).attr('href');
            var indice = urlPath.length - href.length;			
            if(urlPath.substring(indice) === href){
                $(this).closest('li').addClass('active');
            }				
        })
    }
})

