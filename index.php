<?php

function p($a)
{
  echo $a . '<br>';
}

function mycurl($url)
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

function callPhpPreChallenge3($targetNum)
{
  $url = 'http://yuzuntu.com:10080/php-pre-challenge3/index.php?target=' . $targetNum;
  return mycurl($url);
}


function main()
{
  for ($i = 1; $i <= 40; $i++) {
    p($i . ' => ' . callPhpPreChallenge3($i));
  }
}

main();
