
$(document).ready(function() {
    /*Menu góra mobilne*/
    $(".menu-mobile__block__button").click(function(){
        $(this).toggleClass('menu-mobile__block__button__click');
        $(this).children().toggleClass('menu-mobile__block__button__burger__open');
        $(".menu-mobile__block__menu").toggleClass("menu-mobile__block__menu__click");
        $(".cms-container__content__main__col1").toggleClass("cms-container__content__main__col1__click");
    });
    $('.menu-mobile__block__menu__ul > li a, .menu-mobile__block__menu__ul > li span').click(function(){
        $(this).parent().children(".menu-mobilne-rozwijka-zawartosc").slideToggle();
    });
});