<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <meta name="description" content="検索画面です">
    <title>検索画面 Twitterクローン</title>
</head>
<body class="home search text-center">
    <div class="container">
        <?php  include_once('../Views/common/side.php'); ?>
        <div class="main">
            <div class="main-header">
                <h1>検索</h1>
            </div>
            <form action="search.php" method="get">
                <div class="search-area">
                    <input type="text" class="form-control" placeholder="キーワード検索" name="keyword" value="<?php echo htmlspecialchars($view_keyword); ?>">
                    <button type="submit" class="btn">検索</button>
                </div>
            </form>
            <div class="ditch"></div>
            <?php if(empty($view_tweets)) :?>
                <p class="p-3">該当のツイートがまだありません</p>
            <?php else : ?>
                <div class="tweet-list">
                    <?php foreach ($view_tweets as $view_tweet) :?>
                        <?php  include('../Views/common/tweet.php'); ?>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </div>
    <?php  include('../Views/common/foot.php'); ?>
</body>
</html>