<?php
    require ("suzuri_token.php");//別ファイルに保存した，アクセストークンを読み込み
    $base_url = 'https://suzuri.jp/api/v1/products?userName=';
    $store_name = 'yukyu_konpeki_dou';//自分のSUZURIでのID
    $curl = curl_init($base_url.$store_name);
    $option = [
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_RETURNTRANSFER => true,//curlの結果を自動で表示させない
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer '.$token,  //アクセストークン
        'Content-Type: application/json',
        ],
    ];
    curl_setopt_array($curl, $option);
    $result = curl_exec($curl);
    echo $result;
    curl_close($curl);
?>
