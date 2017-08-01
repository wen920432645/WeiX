<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>发起者</title>
    <link rel="stylesheet" href="/Public/Home/css/public.css"/>
    <link rel="stylesheet" href="/Public/Home/css/receiver.css"/>
    <script src="/Public/Home/js/width.js"></script>
    <script type="text/javascript">
        tools.setFontSize(18);
        window.onload=function(){
            window.onresize=function(){
                tools.setFontSize(18);
            }
        }
    </script>
</head>
<body>
<nav>
    <ul class="clearlr">
        <li><a href="javascript:history.go(-1)">返回</a></li>
        <li>教师节快乐</li>
        <li></li>
    </ul>
</nav>
<section class="clearlr">
    <form class="language clearlr" id="form">
        尊敬的<input type="text" placeholder="请输入名称" id="name"/>
        <input type="text" placeholder="愿您永远年轻" id="wish"/>
        <input type="text" placeholder="请输入班级信息" id="grade"/>
    </form>
    <div class="messageBoard">
        <div class="title clearlr">
            <div></div>
            <b>留言板</b>
            <div></div>
        </div>
    </div>
    <div class="footer clearlr">
        <img src="/Public/Home/images/voice.png" alt=""/>
        <input type="text" placeholder="回复全部" id="send" />
        <button onclick="send()">发送</button>
    </div>
</section>
</body>
<script src="/Public/Home/js/jquery-3.2.1.min.js"></script>
<script src="/Public/Home/js/layer/layer.js"></script>
<script>
    function send() {
        reply=$('#send').val();
        name=$('#name').val();
        wish=$('#wish').val();
        grade=$('#grade').val();
        $.ajax({
            url:"<?php echo U('start/comment');?>",
            type:'post',
            data:'reply='+reply+'&'+'name='+name+'&'+'wish='+wish+'&'+'grade='+grade,
            success:function(msg){
                self.location="http://www.hiloth.com/wx/index.php/home/collect/collect";
            }
        })
    }
</script>
</html>