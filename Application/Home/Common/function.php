<?php
function getRequest($url){
    // 初始化请求
    $ch = curl_init();
    // 设置请求的地址
    curl_setopt($ch, CURLOPT_URL,$url);
    // 设置请求时,不适用ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    // 执行请求
    $str = curl_exec($ch);
    // 关闭请求
    curl_close($ch);
    print_r($str);
}
