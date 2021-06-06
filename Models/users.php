<?php

// ユーザーデータを処理

function createUser(array $data)
{
    /**
    *ユーザーを作成
    * @param array $data
    * @return bool
    */
    
    
    
    // define('DB_HOST', 'localhost');
    // define('DB_USER', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'twitter_clone');
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // 接続チェック
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました。 :' . $mysqli->connect_error ."\n";
        exit;
    }

    // 新規登録のSQLの作成
    $query = 'INSERT INTO users (email, name, nickname, password) VALUES (?, ?, ?, ?)';
    $statement = $mysqli->prepare($query);

    // パスワードをハッシュタグ値に変換
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    // ？の部分にセットする内容
    // 第一引数のsは変換の型を指定(s=string)
    $statement->bind_param('ssss', $data['email'], $data['name'], $data['nickname'], $data['password']);

    // 処理を実行
    $response = $statement->execute();
    if ($response === false) {
        echo 'エラーメッセージ:' . $mysqli->error . "\n";
    }

    // 接続を解放
    $statement->close();
    $mysqli->close();

    return $response;
}