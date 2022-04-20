
$(document).ready(function(){
    $(window).on('resize', function(){
        calHeightArt();
    }).resize()


})
// create and remove
function crLove(
        id,
        action = 'post',
        loveHtml = '<i class="ri-heart-fill"></i>'){

    $.ajax({
        data: {},
        type: action,
        url: `/museum/${id}/love/${action}`,
        success: function(result){
            $('.tool-icon-love').html(loveHtml)
        }
    });
}

// ---------------
function calHeightArt() {
    let headerHeight = $('.header').height();
    let screenHeight = $(window).height();

    $('.art').css({
        'height': (screenHeight - headerHeight) + 'px'
    })
}

