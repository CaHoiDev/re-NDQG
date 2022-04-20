$(document).ready(function(){
    $('input[name="search"]').on('input', function(){
        search()
    })
})

function search(delayTime = 800) {
    let value = $('input[name="search"]').val()
    let keyword = value === '' || value === ' ' ? 'default' : value

    $('.museum-container').html('loading...')
    clearTimeout(this.delay)
    this.delay = setTimeout(function(){
        $.ajax({
            data: "",
            type: "get",
            url: "museum/search/" + keyword,
            success: function(result){
                renderResult(result)
            }
        });
    }.bind(this), delayTime);
}

function renderResult(result) {
    let resultHtml = ""
    let container = $('.museum-container')

    if (result.length === 0) {
        container.html("there are no result")
        return
    }

    $.each(result, function(index, art){
        resultHtml += artComponent(art)

    })
    container.html(resultHtml)
}

function artComponent(art) {
    return `
        <div class="museum__item">
            <img src="${art.artImage}" alt="">
            <div class="museum__item__des">
                <div class="art__date">
                    ${art.publicationDate}
                </div>
                <div class="art__name">
                    ${art.artName}
                </div>
                <a href="/museum/${art.artId}" class="discover-btn">
                    discover
                </a>
            </div>
        </div>
            `
}

function removeKeyword() {
    $('input[name="search"]')
        .val("")
        .focus()

    search(0)
}
