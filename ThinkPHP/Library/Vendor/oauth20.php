<?php
// 获取code值
if($_GET['code']){ // 获取到code值得逻辑处理
    // 测试账号appid和secret
    $appId ='wx9c49a92f346fbe89';
    $secret = 'b2acabf175234d743bc62ff6b52c0065';
    // 获取用户授权成功之后的code码
    $code = $_GET['code'];
    /*获取access_token的链接*/
    $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appId}"
    . "&secret={$secret}&code={$code}&grant_type=authorization_code";
    // 发送我们的请求
     $data = file_get_contents($url);
     $data = json_decode($data,true);
     // 获取微信服务器返回的openid和secret
     $openId = $data['openid'];
     $token = $data['access_token'];
     /************获取授权用户的信息********************/
     // 获取用户基本信息的链接
     $url1 = "https://api.weixin.qq.com/sns/userinfo?access_token={$token}&openid={$openId}&lang=zh_CN ";
     // 发送请求获取用户的基本信息
     $info = file_get_contents($url1);
     $info['access_time']=time();
     $aa="http://www.baidu.com";
     header("location:$aa");
    }else{
    echo 'none';
}
