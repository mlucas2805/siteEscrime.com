
var opacity = 1;
var lastScrollTop = 0;

$(window).scroll(function()
{
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

$( "#btn_deco" ).click(function()
{
    alert( "Vous êtes bien déconnecté, merci de votre visite, à bientôt !" );
});

$(document).ready(function()
{
    $('[data-toggle="popover"]').popover();
});


// ______________ BOUTONS DE PARTAGE RESEAUX SOCIAUX

$(window).scroll(function(){
    if ($(this).scrollTop() > 50) //niveau d'apparution au scroll
    {
        $('#socialMedia').fadeIn(300); // vitesse d'apparution
    }
    else
    {
        $('#socialMedia').fadeOut(300); // vitesse de disparution
    }
});

// _______________FOOTER lien vers le haut

$('a[href="#top"]').on('click', function(e)
{
    e.preventDefault();
    window.scroll(0,0);
    return false;
});