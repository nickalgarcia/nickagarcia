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
    var value = $('#playlist .video-description').text();

    $('#playlist .video-description').html(value.replace(/\r?\n/g, '<br/>'));
    $($("#playlist .video-description").children('br').get(0).nextSibling).wrap('<div />');
});