export function ArticleLike(element) {

    const clickedBtn = $(element)
    const clickedBtnChildren = $(element).children()
    const articleId = clickedBtn.data('article-id')
    const loadingEl = '<span class="animate-spin h-5 w-5 border-4 border-white-500 rounded-full border-t-transparent "></span>'


    clickedBtn.html(loadingEl)

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const data = {
        article_id   : articleId,
    }

    $.ajax({
        url : `/like`,
        type: "POST",
        data: data,
    }).then((res) => {
        console.log(clickedBtn)
        clickedBtn.css('color', '#FF367F')
        clickedBtn.html(clickedBtn);
        clickedBtn.append(clickedBtnChildren)
    }).catch((error) => {
        if (error.status === 422) {
            alert('エラー：タイトルと本文は必須です。')
        }
        console.log(error.status)
        console.log(error)
        $(this).html('下書き保存/更新')
    })
}
