
$(document).ready(function(){
    $(window).on('resize', function(){
        calHeightArt();
    }).resize()
})

function sendComment(artId) {
    data = {
        'userName': $('input[name="userName"]').val(),
        'comment': $('input[name="comment"]').val()
    }
    $.ajax({
        data: data,
        type: 'post',
        url: `/museum/${artId}/comment`,
        success: function(result){
            $('input[name="comment"]').val("")
            $('#cmt-notify').css('display', 'none')
            $('.comment-shower').prepend(`
                <div class="comment-item">
                    <div class="comment-info">
                        <div class="userName">${data.userName}</div>
                        |
                        <div class="time">now</div>
                    </div>
                    <div class="comment-content">
                        ${data.comment}
                    </div>
                </div>
            `)
        }
    });
}

// create and remove
function crLove(
        id,
        action = 'post'){

    let opLoveHtml = 'delete';
    let opIcon = 'fill'

    switch (action){
        case 'post':
            break
        case 'delete':
            opLoveHtml = 'post';
            opIcon = 'line';
            break
    }

    $.ajax({
        data: {},
        type: action,
        url: `/museum/${id}/love/${action}`,
        success: function(result){
            $('.tool-icon-love').replaceWith(`
             <div class="tool-icon tool-icon-love"
             onClick="crLove(${id}, '${opLoveHtml}')">
             <i class="ri-heart-${opIcon}"></i></div>
            `)
            $('#love-amount').text(result == 0 ? '' : result)
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

