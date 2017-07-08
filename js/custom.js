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
    $('.all-videos').wrapAll("<div class='sidebar' />");
});

$.ajax({
    dataType: 'html',
    url: 'https://www.gofundme.com/hope-for-silas',
    success: function(response) {

        console.log(response);

        //jQuery( "#page-title" ).load( "STR?fr_id=2333&pg=personal&px=3682468&pgwrap=n .span8 strong.heading" );


    }
});
