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

    $('.all-videos img').click(function() {
        var d = $(this).data('video-id');
        console.log(d);
    });

    $(document).on('click', '.all-videos', function(event) {
        var change = $(this).find("img").attr("src").split("/");
        $(".video-container > iframe").attr("src", "https://www.youtube.com/embed/" + change[4]);
        $('.video-description').addClass('hide');
        $('.latest-video h4').addClass('hide');
        $('#current-video').removeClass('hide');

    });

    $('#current-video img').click(function() {
        $('.video-description').removeClass('hide');
        $('.latest-video h4').removeClass('hide');
        $('#current-video').addClass('hide');
    });

});