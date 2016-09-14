<?php

/* user-index.html */
class __TwigTemplate_889510dc776fbf5637824fd1aa99bfffa830fce0415725f48065a11af393c6e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>旅行</title>
\t<meta http-equiv=\"description\" content=\"\" />
\t<meta http-equiv=\"keywords\" content=\"\" />
\t<meta name=\"author\" content=\"slade\">
\t<meta name=\"copyright\" content=\"slade\">
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css?_bid=306\"/>
\t-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/demo.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/main.css\">
\t<!-- <script src=\"http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304\"></script>
<script src=\"http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304\"></script>
-->
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/zepto.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery1.42.min.js\"></script>
<script src=\"../..";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery-1.8.2.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery.SuperSlide.2.1.1.js\"></script>
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/layer.css\" rel=\"stylesheet\" media=\"all\" />
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/layer.m.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/tool.js\" type=\"text/javascript\"></script>
</head>
<style type=\"text/css\"></style>
<body>
<div id=\"onediv\" style=\"margin-left: auto; margin-right: auto\">
\t<ul id=\"nav\" class=\"nav clearfix\">
\t\t<li class=\"nLi nLiOne\">
\t\t\t<a href=\"/index\">
\t\t\t\t<span class=\"cityP\" style=\"font-size: 16px;\">
\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/images/tit1.png\" width=\"30\" height=\"30\"></span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"nLi nLiTwo\">
\t\t\t<h3>
\t\t\t\t<a href=\"/index/index\" style=\"display: inline-block; width: 100%; height: 30px;\">
\t\t\t\t\t<img src=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/logo.png\" height=\"30\" />
\t\t\t\t</a>
\t\t\t</h3>
\t\t</li>
\t\t<li class=\"nLi nLiThree\">
\t\t\t<div class=\"topR\" style=\"\">
\t\t\t\t<a href=\"/user/index\">
\t\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/tit2.png\" width=\"\" height=\"30\" style=\"display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;\"></a>
\t\t\t</div>
\t\t</li>
\t</ul>
\t<script id=\"jsID\" type=\"text/javascript\">
            \$(\".nLi\").click(function () {
                // \$(this).addClass(\"on\").siblings().removeClass(\"on\");
                if (\$(this).children(\"ul\").is(\":hidden\")) {
                    \$(\".nLi\").children(\"ul\").css(\"display\", \"none\");
                    \$(this).children(\"ul\").css(\"display\", \"block\");
                } else {
                    \$(this).children(\"ul\").css(\"display\", \"none\");
                }
            })
        </script>
\t<div class=\"content\">
\t\t<div class=\"usercenter\">
\t\t\t<header class=\"top_center cenetr_after\">
\t\t\t\t<div class=\"ico_ceneter after\" id=\"img\"></div>
\t\t\t\t欢迎来到***旅游
\t\t\t\t<br>
\t\t\t\t(18170873407)
\t\t\t\t<br></header>
\t\t</div>
\t\t<!--/usercenter -->
\t\t<dl class=\"list_1\">
\t\t\t<dt class=\"t_4\"></dt>
\t\t\t<dd>
\t\t\t\t<ul class=\"list_page_1\">
\t\t\t\t\t<li style=\"border: none; background: none; padding-left: 15px !important; height: 35px; line-height: 35px;\">
\t\t\t\t\t\t<span class=\"fl\" style=\"float: left;\">全部订单</span>
\t\t\t\t\t\t<a href=\"/userorder/index\" class=\"allOder\" style=\"float: right;\">查看所有订单></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</dd>
\t\t</dl>
\t\t<dl class=\"list_1\">
\t\t\t<dt class=\"t_4\"></dt>
\t\t\t<dd>
\t\t\t\t<ul class=\"list_page_1\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/c1.png\" width=\"30\" height=\"30\" style=\"float: left;\">
\t\t\t\t\t\t<a href=\"/userorder/needpayorder\" class=\"list_page_t\" style=\"float: left;\">需支付</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/c2.png\" width=\"30\" height=\"30\" style=\"float: left;\">
\t\t\t\t\t\t<a href=\"/userorder/overpayorder\" class=\"list_page_t\" style=\"float: left;\">待评价</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/c3.png\" width=\"30\" height=\"30\" style=\"float: left;\">
\t\t\t\t\t\t<a href=\"/userorder/ywcpayorder\" class=\"list_page_t\" style=\"float: left;\">已完成</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/c4.png\" width=\"30\" height=\"30\" style=\"float: left;\">
\t\t\t\t\t\t<a href=\"/userorder/mycollect\" class=\"list_page_t\" style=\"float: left;\">我的收藏</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/c5.png\" width=\"30\" height=\"30\" style=\"float: left;\">
\t\t\t\t\t\t<a href=\"/user/coupon\" class=\"list_page_t\" style=\"float: left;\">优惠券</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/55.png\" width=\"30\" height=\"30\" style=\"float: left;\">
\t\t\t\t\t\t<a href=\"/user/userinfo\" class=\"list_page_t\" style=\"float: left;\">个人信息</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/66.png\" width=\"30\" height=\"30\" style=\"float: left;\">
\t\t\t\t\t\t<a href=\"/user/userOut\" class=\"list_page_t\" style=\"float: left;\">出行人信息</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/22.png\" width=\"30\" height=\"30\" style=\"float: left;\">
\t\t\t\t\t\t<a href=\"/login/login\" class=\"list_page_t\" style=\"float: left;\">切换账号</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</dd>
\t\t</dl>
\t</div>
\t<!--/content-->
</div>
</body>
<script>
    var aa = navigator.platform;
    // alert(aa);
    if (aa.indexOf('Win') != -1) {
        \$(\"#onediv\").css(\"width\", \"640px\");
    }
</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "user-index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 121,  200 => 117,  193 => 113,  186 => 109,  179 => 105,  172 => 101,  165 => 97,  158 => 93,  114 => 52,  104 => 45,  95 => 39,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  47 => 18,  43 => 17,  39 => 16,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<title>旅行</title>*/
/* 	<meta http-equiv="description" content="" />*/
/* 	<meta http-equiv="keywords" content="" />*/
/* 	<meta name="author" content="slade">*/
/* 	<meta name="copyright" content="slade">*/
/* 	<meta name="format-detection" content="telephone=no">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">*/
/* 	<meta name="apple-mobile-web-app-capable" content="yes">*/
/* 	<meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/* 	<!-- <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css?_bid=306"/>*/
/* 	-->*/
/* 	<link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css">*/
/* 	<link rel="stylesheet" type="text/css" href="{{ static }}/Css/demo.css">*/
/* 	<link rel="stylesheet" type="text/css" href="{{ static }}/Css/main.css">*/
/* 	<!-- <script src="http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304"></script>*/
/* <script src="http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304"></script>*/
/* -->*/
/* <script type="text/javascript" src="{{ static }}/Scripts/zepto.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/Scripts/frozen.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/Scripts/jquery1.42.min.js"></script>*/
/* <script src="../..{{ static }}/Scripts/jquery-1.8.2.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/Scripts/jquery.SuperSlide.2.1.1.js"></script>*/
/* <link href="{{ static }}/Css/layer.css" rel="stylesheet" media="all" />*/
/* <script src="{{ static }}/Scripts/layer.m.js" type="text/javascript"></script>*/
/* <script src="{{ static }}/Scripts/tool.js" type="text/javascript"></script>*/
/* </head>*/
/* <style type="text/css"></style>*/
/* <body>*/
/* <div id="onediv" style="margin-left: auto; margin-right: auto">*/
/* 	<ul id="nav" class="nav clearfix">*/
/* 		<li class="nLi nLiOne">*/
/* 			<a href="/index">*/
/* 				<span class="cityP" style="font-size: 16px;">*/
/* 					&nbsp;&nbsp;*/
/* 					<img src="{{ static }}/images/tit1.png" width="30" height="30"></span>*/
/* 			</a>*/
/* 		</li>*/
/* 		<li class="nLi nLiTwo">*/
/* 			<h3>*/
/* 				<a href="/index/index" style="display: inline-block; width: 100%; height: 30px;">*/
/* 					<img src="{{ static }}/Images/logo.png" height="30" />*/
/* 				</a>*/
/* 			</h3>*/
/* 		</li>*/
/* 		<li class="nLi nLiThree">*/
/* 			<div class="topR" style="">*/
/* 				<a href="/user/index">*/
/* 					<img src="{{ static }}/Images/tit2.png" width="" height="30" style="display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;"></a>*/
/* 			</div>*/
/* 		</li>*/
/* 	</ul>*/
/* 	<script id="jsID" type="text/javascript">*/
/*             $(".nLi").click(function () {*/
/*                 // $(this).addClass("on").siblings().removeClass("on");*/
/*                 if ($(this).children("ul").is(":hidden")) {*/
/*                     $(".nLi").children("ul").css("display", "none");*/
/*                     $(this).children("ul").css("display", "block");*/
/*                 } else {*/
/*                     $(this).children("ul").css("display", "none");*/
/*                 }*/
/*             })*/
/*         </script>*/
/* 	<div class="content">*/
/* 		<div class="usercenter">*/
/* 			<header class="top_center cenetr_after">*/
/* 				<div class="ico_ceneter after" id="img"></div>*/
/* 				欢迎来到***旅游*/
/* 				<br>*/
/* 				(18170873407)*/
/* 				<br></header>*/
/* 		</div>*/
/* 		<!--/usercenter -->*/
/* 		<dl class="list_1">*/
/* 			<dt class="t_4"></dt>*/
/* 			<dd>*/
/* 				<ul class="list_page_1">*/
/* 					<li style="border: none; background: none; padding-left: 15px !important; height: 35px; line-height: 35px;">*/
/* 						<span class="fl" style="float: left;">全部订单</span>*/
/* 						<a href="/userorder/index" class="allOder" style="float: right;">查看所有订单></a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</dd>*/
/* 		</dl>*/
/* 		<dl class="list_1">*/
/* 			<dt class="t_4"></dt>*/
/* 			<dd>*/
/* 				<ul class="list_page_1">*/
/* 					<li>*/
/* 						<img src="{{ static }}/Images/c1.png" width="30" height="30" style="float: left;">*/
/* 						<a href="/userorder/needpayorder" class="list_page_t" style="float: left;">需支付</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<img src="{{ static }}/Images/c2.png" width="30" height="30" style="float: left;">*/
/* 						<a href="/userorder/overpayorder" class="list_page_t" style="float: left;">待评价</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<img src="{{ static }}/Images/c3.png" width="30" height="30" style="float: left;">*/
/* 						<a href="/userorder/ywcpayorder" class="list_page_t" style="float: left;">已完成</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<img src="{{ static }}/Images/c4.png" width="30" height="30" style="float: left;">*/
/* 						<a href="/userorder/mycollect" class="list_page_t" style="float: left;">我的收藏</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<img src="{{ static }}/Images/c5.png" width="30" height="30" style="float: left;">*/
/* 						<a href="/user/coupon" class="list_page_t" style="float: left;">优惠券</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<img src="{{ static }}/Images/55.png" width="30" height="30" style="float: left;">*/
/* 						<a href="/user/userinfo" class="list_page_t" style="float: left;">个人信息</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<img src="{{ static }}/Images/66.png" width="30" height="30" style="float: left;">*/
/* 						<a href="/user/userOut" class="list_page_t" style="float: left;">出行人信息</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<img src="{{ static }}/Images/22.png" width="30" height="30" style="float: left;">*/
/* 						<a href="/login/login" class="list_page_t" style="float: left;">切换账号</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	</div>*/
/* 	<!--/content-->*/
/* </div>*/
/* </body>*/
/* <script>*/
/*     var aa = navigator.platform;*/
/*     // alert(aa);*/
/*     if (aa.indexOf('Win') != -1) {*/
/*         $("#onediv").css("width", "640px");*/
/*     }*/
/* </script>*/
/* </html>*/
/* */
