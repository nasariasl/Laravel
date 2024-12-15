<?php


$url = 'https://enjoymovie.ir/';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$content = curl_exec($curl);

curl_close($curl);

// $content = file_get_contents(https://enjoymovie.ir/);

file_put_contents("app\Console\Tasks\my.txt", $content);
info('Command runs every minute.');
