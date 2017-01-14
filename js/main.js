$(document).ready(function () {
    //popup
    var popup = $('.wrap-popup');
    $('.popup-btn').on('click', function () {
        popup.fadeIn();
    });
    $('#close-popup').on('click', function () {
        popup.fadeOut();
    });
    //

    //clickable icons

$('.icons-list button').each(function(i){
        $(this).attr('data-tab', 'tab'+i);
    });
    $('.text-list li').each(function(i){
        $(this).attr('data-tab', 'tab'+i);
    });
    $('.icons-list button').on('click',function () {
        var dataTab = $(this).data('tab');
        var getWrapper = $(this).closest('.tab-wrapper');

        getWrapper.find('.icons-list button').removeClass('active');
        $(this).addClass('active');

        getWrapper.find('.text-list > li').removeClass('active');
        getWrapper.find('.text-list > li[data-tab='+dataTab+']').addClass('active');

    });
    //

    //menu
    $('.menu-btn').on('click', function () {
        $('.menu-list').slideToggle();
    });
    // $(window).on('scroll',function () {
    //     $('.menu-list').hide();
    // });
    //
});