
var windowWidth = window.innerWidth;
var screenHeight = screen.height;

var banner = $(".banner");

function bannerNormal(){
    banner.css("margin-bottom", function (){
        var alturaBanner = $(this).height();
        var areaVisible = alturaBanner - ((windowWidth * 145) / 768);
        return -Math.abs(areaVisible);
    })
}

bannerNormal();

// FECHAR O BANNER
$(".banner_close").one("click", function (){
    banner.css("margin-bottom", -5000)
})

// SUBIR BANNER
$(".banner_up").on("click", function (){
    banner.css("margin-bottom", 0);
    $(this).hide();
    $(".banner_down").show();
});

// DESCER BANNER
$(".banner_down").on("click", function (){
    bannerNormal();
    $(this).hide();
    $(".banner_up").show();
})