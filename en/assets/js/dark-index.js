

$(document).on('scroll',function(){
    var scroll = $(window).scrollTop();
    if(scroll>2)
    {
        $(".headerLogo").attr('src','assets/images/logo.png');
        $(".navbar").addClass('navbar-fixed-top');
        $("#TopBtn").fadeIn();
    }else
    {
        $(".headerLogo").attr('src','assets/images/logo-white.png');
        $(".navbar").removeClass('navbar-fixed-top');
        $("#TopBtn").fadeOut();
    }
});


