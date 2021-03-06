<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

    <title>个人资料</title>
    <link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
    <link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
    <link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
    <link href="/homes/css/infstyle.css" rel="stylesheet" type="text/css">
    <link href="{{url('homes/css/addstyle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('homes/css/orstyle.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/homes/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>
    <script language="javascript" src="{{url('homes/js/PCASClass.js')}}"></script>
    <script language="javascript" src="{{url('layer/layer.js')}}"></script>
    <link href="{{url('homes/css/stepstyle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('homes/css/systyle.css')}}" rel="stylesheet" type="text/css">
    <script src="/homes/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
@include('home.layout.header')
<div class="nav-table">
    <div class="long-title"><span class="all-goods">全部分类</span></div>
    <div class="nav-cont">
        @include('home.layout.nav')
        <div class="nav-extra">
            <i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
            <i class="am-icon-angle-right" style="padding-left: 10px;"></i>
        </div>
    </div>
</div>
<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">
    <!-- 内容开始 -->
    @section('content')

    @show
    <!-- 内容结束 -->
        </div>
        <!--底部-->
        @include('home.layout.footer')
    </div>

    <aside class="menu">
        <ul id='ul'>
            <li class="person">
                <a href="{{url('user/index')}}">个人中心</a>
            </li>
            <li class="person">
                <a href="#">个人资料</a>
                <ul>
                    <li class="person"> <a href="{{url('user/detil')}}">个人信息</a></li>
                    <li> <a href="{{url('pass/security')}}">安全设置</a></li>
                    <li> <a href="{{url('addr/add')}}">收货地址</a></li>
                </ul>
            </li>
            <li class="person">
                <a href="#">我的交易</a>
                <ul>
                    <li><a href="{{url('order/index')}}">订单管理</a></li>
                    <li> <a href="{{url('order/refund')}}">退款售后</a></li>
                </ul>
            </li>
            <li class="person">
                <a href="{{url('/report/index')}}">我的举报</a>
                <a href="#">我的小窝</a>
                <ul>
                    <li> <a href="{{url('order/coll')}}">收藏</a></li>

                </ul>
            </li>

        </ul>

    </aside>
</div>
</body>
</html>