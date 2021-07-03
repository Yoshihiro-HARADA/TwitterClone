<div class="side">
    <div class="side-inner">
        <ul class="nav flexcolum">
            <li class="nav-item"><a href="home.php" class="nav-link"></a><img src="<?php echo HOME_URL; ?>Views/img/logo-twitterblue.svg" alt="" class="icon"></li>
            <li class="nav-item"><a href="home.php" class="nav-link"></a><img src="<?php echo HOME_URL; ?>Views/img/icon-home.svg" alt=""></li>
            <li class="nav-item"><a href="search.php" class="nav-link"></a><img src="<?php echo HOME_URL; ?>Views/img/icon-search.svg" alt=""></li>
            <li class="nav-item"><a href="notification.php" class="nav-link"></a><img src="<?php echo HOME_URL; ?>Views/img/icon-notification.svg" alt=""></li>
            <li class="nav-item"><a href="profile.php" class="nav-link"></a><img src="<?php echo HOME_URL; ?>Views/img/icon-profile.svg" alt=""></li>
            <li class="nav-item"><a href="post.php" class="nav-link"></a><img src="<?php echo HOME_URL; ?>Views/img/icon-post-tweet-twitterblue.svg" alt="" class="post-tweet"></li>
            <li class="nav-item my-icon"><img src="<?php echo htmlspecialchars($view_user['image_path']); ?>" class="js-popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="<a href='profile.php'>プロフィール</a><br><a href='sign-out.php'>ログアウト</a>" data-bs-html="true"></li>
        </ul>
    </div>
</div>