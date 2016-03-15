
var opacity = 1;
var lastScrollTop = 0;
$(window).scroll(function(){
    var st = $(this).scrollTop();
    if(st == 0)
        $('#header_bar').css('opacity','1');

    if (opacity > 0.5 && (st > lastScrollTop)){
        $('#header_bar').css('opacity','-=0.02');
        opacity -= 0.02;
    }
    else if(opacity < 1)
    {
        $('#header_bar').css('opacity','+=0.02');
        opacity += 0.02;
    }
    lastScrollTop = st;
});

$( "#btn_deco" ).click(function() {
    alert( "Vous êtes bien déconnecté, merci de votre visite, à bientôt !" );
});