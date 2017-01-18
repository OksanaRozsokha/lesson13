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
        $(this).find('.rotate').css('transform','rotate(0deg)');
    });

    $('.jq-btn').on('click', function () {
        var pVisible = $('.jq-tab p');
        $(this).text(pVisible.is(':visible') ? 'view more' : 'show less');
        $(this).parent().find('p').toggle(500);
        $(this).parent().find('h2').toggleClass('active-title');
    });

    $('#jq-block').mouseover(function () {
        var hoverBlock =  $('#jq-hover');
        hoverBlock.fadeIn(500);
        $('#hover-btn').css('transform','rotate(360deg)').text('show less');
    });
    $('#jq-block').mouseout(function () {
        var hoverBlock =  $('#jq-hover');
        hoverBlock.fadeOut(500);
        $('#hover-btn').css('transform','rotate(90deg)').text('view more');
    });

    // $('#hover-btn').on('click', function () {
    //     $('#jq-hover').toggle(200);
    //     $('#hover-btn').text('#jq-hover'.is(':visible') ? 'view more' : 'show less');
    // });


});
