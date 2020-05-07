<?php

// 受け取れず表示されてしまう
function test1($url)
{
  // セッションを初期化
  $conn = curl_init();
  // リクエスト先urlをセット
  curl_setopt($conn, CURLOPT_URL, $url);
  // リクエストを実行
  curl_exec($conn);
  // セッションを閉じる
  curl_close($conn);
}

function test2($url)
{
  // cURLを初期化して使用可能にする
  $curl = curl_init();
  // オプションにURLを設定する
  curl_setopt($curl, CURLOPT_URL, $url);
  // 文字列で結果を返させる
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  // URLにアクセスし、結果を文字列として返す
  $result = curl_exec($curl);
  // cURLのリソースを解放する
  curl_close($curl);
  // 返却
  return $result;
}

function p($a)
{
  echo $a . '<br>';
}

function main()
{

  p(test2('http://yuzuntu.com:10080/php-pre-challenge3/index.php?target=5'));
  p(test2('http://yuzuntu.com:10080/php-pre-challenge3/index.php?target=6'));
}

main();
