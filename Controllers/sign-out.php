<?php

// サインアウトコントローラー

// 設定を読み込む
include_once '../confing.php';
// 便利な関数を読み込む
include_once '../util.php';

// ユーザー情報をセッションから削除
deleteUserSession();

// ログインしていない
header('Location:' . HOME_URL . 'Controllers/sign-in.php');
exit;