$(document).ready(function() {
    /* Paralax */
	function isInViewport(node) {
        var rect = node.getBoundingClientRect()
        return (
          (rect.height > 0 || rect.width > 0) &&
          rect.bottom >= 0 &&
          rect.right >= 0 &&
          rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.left <= (window.innerWidth || document.documentElement.clientWidth)
        )
    }

    // Animation paralax
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop()
        $('.slick-slide').each(function(index, element) {
        var initY = $(this).offset().top
        var height = $(this).height()
        var endY  = initY + $(this).height()

        // Check if the element is in the viewport.
        var visible = isInViewport(this)
        if(visible) {
            var diff = scrolled - initY
            var ratio = Math.round((diff / height) * 64)
            $(this).css('background-position','center ' + parseInt(-(ratio * 2) + 164) + 'px')
        }
        });
    });

    // O Nas paralax
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop()
        $('.about-us').each(function(index, element) {
        var initY = $(this).offset().top
        var height = $(this).height()
        var endY  = initY + $(this).height()

        // Check if the element is in the viewport.
        var visible = isInViewport(this)
        if(visible) {
            var diff = scrolled - initY
            var ratio = Math.round((diff / height) * 264)
            $(this).css('background-position','100px ' + parseInt(-(ratio * 2) - 116) + 'px')
        }
        });
    });

    // Nasze realizacje paralax
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop()
        $('.offer').each(function(index, element) {
        var initY = $(this).offset().top
        var height = $(this).height()
        var endY  = initY + $(this).height()

        // Check if the element is in the viewport.
        var visible = isInViewport(this)
        if(visible) {
            var diff = scrolled - initY
            var ratio = Math.round((diff / height) * 104)
            $(this).css('background-position','center ' + parseInt(-(ratio * 2) - 116) + 'px')
        }
        });
    });

    // Stopka paralax
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop()
        $('.offer').each(function(index, element) {
        var initY = $(this).offset().top
        var height = $(this).height()
        var endY  = initY + $(this).height()

        // Check if the element is in the viewport.
        var visible = isInViewport(this)
        if(visible) {
            var diff = scrolled - initY
            var ratio = Math.round((diff / height) * 104)
            $(this).css('background-position','center ' + parseInt(-(ratio * 2) - 116) + 'px')
        }
        });
    });
});