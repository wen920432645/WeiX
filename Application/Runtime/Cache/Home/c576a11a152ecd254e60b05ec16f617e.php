<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <title>发起者</title>
</head>
<body>
<style>
    .submit{
        display:block;
        text-align:center
    }
</style>
<link href="/Public/Home/css/city.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/city.min.js"></script>
<div id="content-wrap">
    <div id="content-left" class="demo">
        <form action="" name="form1">
            <input type="text" name="name" placeholder="收件人:"><br>
            <input type="text" name="tel" placeholder="联系电话:"><br>
            <div class="infolist">
                <lable>收货地址：</lable>
                <div class="liststyle">
                                <span id="Province">
                                    <i>请选择省份</i>
                                    <ul>
                                        <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
                                    </ul>
                                    <input type="hidden" name="cho_Province" value="请选择省份">
                                </span>
                    <span id="City">
                                    <i>请选择城市</i>
                                    <ul>
                                        <li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
                                    </ul>
                                    <input type="hidden" name="cho_City" value="请选择城市">
                                </span>
                    <span id="Area">
                                    <i>请选择地区</i>
                                    <ul>
                                        <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                                    </ul>
                                    <input type="hidden" name="cho_Area" value="请选择地区">
                    </span>
                </div>
            </div>
            <textarea placeholder="详细地址"></textarea><br>
            <input type="submit" value="添加地址" class="submit">
        </form>
    </div>
    <div id="content-right"></div>
</div>
</body>
</html>