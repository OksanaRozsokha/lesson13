$(document).ready(function () {

    var rotateItem = $('.features-list li');
    rotateItem.mouseover(function () {
        $(this).find('.rotate').css('transform','rotate(360deg)');
    });
    rotateItem.mouseout(function () {
        $(this).find('.rotate').css('transform','rotate(-360deg)');
    });


});