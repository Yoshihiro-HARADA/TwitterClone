
// いいね！用のJavascript

$(function() {
    $('.js-like').click(function() {
        // いいねがクリックされたとき
        const this_obj = $(this);
        const tweet_id = $(this).data('tweet-id');
        const like_id = $(this).data('like-id');
        const like_count_obj = $(this).parent().find('.js-like-count');
        let like_count = Number(like_count_obj.html());

        if (like_id) {
            // いいね！の取り消し
            $.ajax({
                url: 'like.php',
                type:'POST',
                data:{
                    'like_id': like_id
                },
                timeout:10000
            })
            // 取り消しが成功
            .done(() => {
                // いいね！カウントを減らす
                like_count--;
                like_count_obj.html(like_count);
                this_obj.data('like-id',null);

                // いいね！ボタンの色をグレーに変更
                $(this).find('img').attr('src','../Views/img/icon-heart.svg');
            })
            .fail((data) => {
                alert('処理中にエラーが発生しました。');
                console.log(data);
            });
        } else {
            // いいね！の付与
            $.ajax({
                url: 'like.php',
                type:'POST',
                data:{
                    'tweet_id': tweet_id
                },
                timeout:10000
            })
            // いいね！が成功
            .done((data) => {
                // いいね！カウントを増やす
                like_count++;
                like_count_obj.html(like_count);
                this_obj.data('like-id',true);

                // いいね！ボタンの色を青色に変更
                $(this).find('img').attr('src','../Views/img/icon-heart-twitterblue.svg');
            })
            .fail((data) => {
                    alert('処理中にエラーが発生しました。');
                    console.log(data);
                });
        }
    })
})