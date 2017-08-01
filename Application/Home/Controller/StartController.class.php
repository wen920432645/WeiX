<?php
namespace Home\Controller;
use Think\Controller;
class StartController extends Controller
{
    public function comment()
    {
        $arr['initid']=session('openid');
        $arr['name']=I('post.name');
        $arr['wish']=I('post.wish');
        $arr['class']=I('post.grade');
        $arr['create_time']=time();
        $resurt=M('collect')->add($arr);
        if($resurt){
            $zid=$resurt;
        }
        $data['message']=I('post.reply');
        $data['zid']=$zid;
        $data['uid']=session('openid');
        $data['create_time']=time();
        $comment=D('comment');
        $comment->add($data);
    }
    public function start()
    {
        $this->display();
    }
}
