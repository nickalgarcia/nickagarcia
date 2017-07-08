//SCROLLING

$(document).ready(function() {
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing');
    });
});

$(function() {
    //$('.videos div').first().addClass('latest-video').removeClass('all-videos');
    $('.all-videos' ).wrapAll( "<div class='sidebar' />");
});
