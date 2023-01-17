$(document).ready(function() {
    $(window).scroll(() => {
        scroll = $(window).scrollTop();
        let headerTop = $('.header-data').offset().top + 36;
        if(scroll >= headerTop){
            $('.header-main').addClass('sticky');
        }
        else{
            $('.header-main').removeClass('sticky');
        }
    });
});