<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">  
    <title>{{config('dll.TITLE')}}</title>
    <meta name="description"  content="{{config('dll.KEY')}}">
    <meta name="keywords" content="{{config('dll.DESCR')}}">

    <link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
    <link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

    <link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />

    <link href="/homes/css/hmstyle.css" rel="stylesheet" type="text/css"/>
    <link href="/homes/css/skin.css" rel="stylesheet" type="text/css" />
    <script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
    <script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

</head>

<body>
@include('home.layout.header')

<div class="banner">
    <!--轮播 -->
    <div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
        <ul class="am-slides">
            @if($slides)
            @foreach($slides as $k=>$v)
            <li class="banner{{$k+1}}"><a href="{{$v['surl']}}"><img src="{{$v['spath']}}" /></a></li>
            @endforeach
            @endif
        </ul>
    </div>
    <div class="clear"></div>
</div>

@section('connect')

@show
<!--引导 -->
<div class="navCir">
    <li class="active"><a href="/homes/home.html"><i class="am-icon-home "></i>首页</a></li>
    <li><a href="/homes/sort.html"><i class="am-icon-list"></i>分类</a></li>
    <li><a href="/homes/shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>
    <li><a href="/homes/person/index.html"><i class="am-icon-user"></i>我的</a></li>
</div>


<!--菜单 -->
<div class=tip>
    <div id="sidebar">
        <div id="wrap">
            <div id="prof" class="item ">
                <a href="/homes/# ">
                    <span class="setting "></span>
                </a>
                <div class="ibar_login_box status_login ">
                    <div class="avatar_box ">
                        <p class="avatar_imgbox "><img src="/homes/images/no-img_mid_.jpg " /></p>
                        <ul class="user_info ">
                            <li>用户名sl1903</li>
                            <li>级&nbsp;别普通会员</li>
                        </ul>
                    </div>
                    <div class="login_btnbox ">
                        <a href="/homes/# " class="login_order ">我的订单</a>
                        <a href="/homes/# " class="login_favorite ">我的收藏</a>
                    </div>
                    <i class="icon_arrow_white "></i>
                </div>

            </div>
            <div id="shopCart " class="item ">
                <a href="/homes/# ">
                    <span class="message "></span>
                </a>
                <p>
                    购物车
                </p>
                <p class="cart_num ">0</p>
            </div>
            <div id="asset " class="item ">
                <a href="/homes/# ">
                    <span class="view "></span>
                </a>
                <div class="mp_tooltip ">
                    我的资产
                    <i class="icon_arrow_right_black "></i>
                </div>
            </div>

            <div id="foot " class="item ">
                <a href="/homes/# ">
                    <span class="zuji "></span>
                </a>
                <div class="mp_tooltip ">
                    我的足迹
                    <i class="icon_arrow_right_black "></i>
                </div>
            </div>

            <div id="brand " class="item ">
                <a href="/homes/#">
                    <span class="wdsc "><img src="/homes/images/wdsc.png " /></span>
                </a>
                <div class="mp_tooltip ">
                    我的收藏
                    <i class="icon_arrow_right_black "></i>
                </div>
            </div>

            <div id="broadcast " class="item ">
                <a href="/homes/# ">
                    <span class="chongzhi "><img src="/homes/images/chongzhi.png " /></span>
                </a>
                <div class="mp_tooltip ">
                    我要充值
                    <i class="icon_arrow_right_black "></i>
                </div>
            </div>

            <div class="quick_toggle ">
                <li class="qtitem ">
                    <a href="/homes/# "><span class="kfzx "></span></a>
                    <div class="mp_tooltip ">客服中心<i class="icon_arrow_right_black "></i></div>
                </li>
                <!--二维码 -->
                <li class="qtitem ">
                    <a href="/homes/#none "><span class="mpbtn_qrcode "></span></a>
                    <div class="mp_qrcode " style="display:none; "><img src="/homes/images/weixin_code_145.png " /><i class="icon_arrow_white "></i></div>
                </li>
                <li class="qtitem ">
                    <a href="/homes/#top " class="return_top "><span class="top "></span></a>
                </li>
            </div>

            <!--回到顶部 -->
            <div id="quick_links_pop " class="quick_links_pop hide "></div>

        </div>

    </div>
    <div id="prof-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            我
        </div>
    </div>
    <div id="shopCart-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            购物车
        </div>
    </div>
    <div id="asset-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            资产
        </div>

        <div class="ia-head-list ">
            <a href="/homes/# " target="_blank " class="pl ">
                <div class="num ">0</div>
                <div class="text ">优惠券</div>
            </a>
            <a href="/homes/# " target="_blank " class="pl ">
                <div class="num ">0</div>
                <div class="text ">红包</div>
            </a>
            <a href="/homes/# " target="_blank " class="pl money ">
                <div class="num ">￥0</div>
                <div class="text ">余额</div>
            </a>
        </div>

    </div>
    <div id="foot-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            足迹
        </div>
    </div>
    <div id="brand-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            收藏
        </div>
    </div>
    <div id="broadcast-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            充值
        </div>
    </div>
</div>

@include('home.layout.footer')

    </div>
    </div>
<script>
    window.jQuery || document.write('<script src="/homes/basic/js/jquery.min.js "><\/script>');
</script>
<script type="text/javascript " src="/homes/basic/js/quick_links.js "></script>
</body>

</html>

