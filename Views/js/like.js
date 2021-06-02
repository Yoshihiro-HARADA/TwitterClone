// いいね！用のJavascript

$(function() {
    $('.js-like').click(function() {
        // いいねがクリックされたとき
        const this_obj = $(this);
        const like_id = $(this).data('like-id');
        const like_count_obj = $(this).parent().find('.js-like-count');
        let like_count = Number(like_count_obj.html());

        if (like_id) {
            // いいね！の取り消し
            like_count--;
            like_count_obj.html(like_count);
            this_obj.data('like-id',null);

            // いいね！ボタンの色をグレーに変更
            $(this).find('img').attr('src','../Views/img/icon-heart.svg');
        } else {
            // いいね！の付与
            like_count++;
            like_count_obj.html(like_count);
            this_obj.data('like-id',true);

            // いいね！ボタンの色をグレーに変更
            $(this).find('img').attr('src','../Views/img/icon-heart-twitterblue.svg');
        }
    })
})