$(document).ready(function() {
    /*Animation*/
    $('.animation-container__mid__main__slider').slick({
        dots: true,
        infinite: true,
        arrows:true,
        speed: 800,
        autoplaySpeed: 6000,
        fade: true,
        autoplay: true,
        cssEase: 'linear'
    });

    $('#animacja-pause').click(function() {
      $('.animacja-slider').slick('slickPause');
      $(this).hide();
      $('#animacja-play').show();
    });
    $('#animacja-play').click(function() {
      $('.animacja-slider').slick('slickPlay');
      $(this).hide();
      $('#animacja-pause').show();
    });
});