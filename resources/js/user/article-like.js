export function ArticleLike(element) {

    const clickedBtn = $(element)
    const clickedBtnChildren = $(element).children()
    const articleId = clickedBtn.data('article-id')
    const loadingEl = '<span class="animate-spin h-5 w-5 border-4 border-white-500 rounded-full border-t-transparent "></span>'
    const isLiked = clickedBtn.hasClass('liked');

    console.log(isLiked)

    clickedBtn.html(loadingEl)

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const data = {
        article_id   : articleId,
    }

    if (isLiked) {
        $.ajax({
            url : `/remove-like`,
            type: "POST",
            data: data,
        }).then((res) => {
            console.log(clickedBtn)
            clickedBtn.css('color', '#9ca3af')
            clickedBtn.html(clickedBtn);
            clickedBtn.append(clickedBtnChildren)
        }).catch((error) => {
            console.log(error.status)
            console.log(error)
        })
    } else {
        $.ajax({
            url : `/like`,
            type: "POST",
            data: data,
        }).then((res) => {
            console.log(clickedBtn)
            clickedBtn.css('color', '#ff367f')
            clickedBtn.html(clickedBtn);
            clickedBtn.append(clickedBtnChildren)
        }).catch((error) => {
            console.log(error.status)
            console.log(error)
        })
    }
}
