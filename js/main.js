$(document).ready(function () {

    $('.markers-list > li').on('click', function () {
        var markerItem = $(this).index();
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        $('.slider-list .slider-text').slideUp();
        $('.slider-list .slider-text').eq(markerItem).slideDown();
    });

    var rotateItem = $('.features-list li');
    rotateItem.mouseover(function () {
        $(this).find('.rotate').css('transform','rotate(360deg)');
    });
    rotateItem.mouseout(function () {
        $(this).find('.rotate').css('transform','rotate(-360deg)');
    });

    $('.jq-btn').on('click', function () {
        var pVisible = $('.jq-tab p');
        $(this).text(pVisible.is(':visible') ? 'view more' : 'show less');
        $(this).parent().find('p').toggle(300);
        $(this).parent().find('h2').toggleClass('active-title');
    });

    $('.title-wrap').on('click', function () {
        $('.title-wrap').animate({width:'+=1050px'}, 'slow');
    });
});
