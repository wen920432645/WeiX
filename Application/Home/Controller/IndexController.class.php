<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
      $appid =C('APPID');
      $url=urlEncode("http://www.hiloth.com/wx/index.php/home/index/oauth2");
      $url1="https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$url}&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect";
      header("location:$url1");
    }
    //获取用户的基本信息
    public function oauth2()
    {
      if($_GET['code'])
      {
        $appid =C('APPID');
        $secret =C('SECRET');
        // 获取用户授权成功之后的code码
        $code = $_GET['code'];
        /*获取access_token的链接*/
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appid}"
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
         $arr=json_decode($info,true);
          $usrmodel=M('user');
          $openid=$arr['openid'];
          $info=$usrmodel->where("openid='$openid'")->find();
          if(!(bool)$info){
              $usrmodel->add($arr);
          }
         $aa="http://www.hiloth.com/wx/index.php/home/start/start?openid=$openid";
         header("location:$aa");
       }else{
          echo 'none';
       }
    }
}
