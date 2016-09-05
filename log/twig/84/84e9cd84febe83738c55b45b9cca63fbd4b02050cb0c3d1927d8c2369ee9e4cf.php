<?php

/* userinfo.html */
class __TwigTemplate_08c82e94bddb7a95013173499b822d633083cc3d4ad2bbcc4f807722d994e898 extends Twig_Template
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
\t<title>**旅游</title>
\t<meta http-equiv=\"description\" content=\"\"/>
\t<meta http-equiv=\"keywords\" content=\"\" />
\t<meta name=\"author\" content=\"slade\">
\t<meta name=\"copyright\" content=\"slade\">
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306\"/>
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
</head>
<style type=\"text/css\"></style>
<body style=\"background: #fff\">
<div id=\"onediv\" style=\"margin-left: auto; margin-right: auto\">
\t<ul id=\"nav\" class=\"nav clearfix\">
\t\t<li class=\"nLi nLiOne\">
\t\t\t<span class=\"cityP\" style=\"font-size: 16px;\">
\t\t\t\t全国&nbsp;&nbsp;
\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/cityP1.png\" width=\"10\" height=\"9\"></span>
\t\t\t<ul class=\"sub sub6\">
\t\t\t\t<li data=\"2\">
\t\t\t\t\t<span>常州</span>
\t\t\t\t</li>
\t\t\t\t<li data=\"8\">
\t\t\t\t\t<span>丹阳</span>
\t\t\t\t</li>
\t\t\t\t<li data=\"9\">
\t\t\t\t\t<span>张家港</span>
\t\t\t\t</li>
\t\t\t\t<script>
                        \$(\".sub6 li\").click(function () {
                            var data = \$(this).attr(\"data\");
                            \$.ajax({
                                type: \"POST\",
                                url: \"/index/addcity\",
                                data: \"id=\" + data,//\$(\"#loginForm\").serialize(),
                                success: function (msg) {
                                    if (msg != \"ok\") {
                                        alert(msg);
                                    } else {
                                        location.reload();
                                    }
                                }
                            });
                        })
                    </script>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"nLi nLiTwo\">
\t\t\t<h3>
\t\t\t\t<a href=\"/index/index\" style=\"display: inline-block; width: 100%; height: 30px;\">
\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/logo.png\" height=\"30\" />
\t\t\t\t</a>
\t\t\t</h3>
\t\t</li>
\t\t<li class=\"nLi nLiThree\">
\t\t\t<div class=\"topR\" style=\"\">
\t\t\t\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/cityP2.png\" width=\"\" height=\"30\" style=\" display:-webkit-box; -webkit-box-flex:0.5; -webkit-box-align:center; -webkit-box-pack:center; -webkit-box-orient:vertical; text-align:center; margin-left:auto; margin-right:auto;\"></div>
\t\t\t<ul class=\"sub\" style=\"top: 35px !important; width: 200%; display: none;\">
\t\t\t\t<li style=\"width:80% !important; padding-left:20%; height:18px; padding-top:6px; padding-bottom:6px;\">
\t\t\t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/tit1.png\" width=\"\" height=\"18\" style=\"float:left;\">
\t\t\t\t\t<a href=\"/index\" style=\"float:left; height:18px; line-height:18px;\">首页</a>
\t\t\t\t</li>
\t\t\t\t<li style=\"width:80% !important; padding-left:20%; height:18px; padding-top:6px; padding-bottom:6px;\">
\t\t\t\t\t<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/tit2.png\" width=\"\" height=\"18\" style=\"float:left;\">
\t\t\t\t\t<a href=\"/user/index\" style=\"float:left; height:18px; line-height:18px;\">我的</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t</ul>
\t<div id=\"onediv\" style=\"margin-left:auto;margin-right: auto\">
\t\t<form action=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/editUserinfo\" method=\"post\">
\t\t\t<div class=\"ui-form-item ui-border-b ui-form-itemUser\">
\t\t\t\t<label for=\"#\">用户名</label>
\t\t\t\t<input type=\"text\" name=\"username\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "\" readonly=\"readonly\"/>
\t\t\t</div>
\t\t\t<div class=\"ui-form-item ui-border-b ui-form-itemUser\">
\t\t\t\t<label for=\"#\">姓&nbsp;&nbsp;&nbsp;名</label>
\t\t\t\t<input type=\"text\" name=\"Name\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
        echo "\" placeholder=\"姓名\"/>
\t\t\t</div>
\t\t\t<div class=\"ui-form-item ui-border-b ui-form-itemUser\">
\t\t\t\t<label for=\"#\">宝贝姓名</label>
\t\t\t\t<input type=\"text\" name=\"BodyName\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "babayname", array()), "html", null, true);
        echo "\" placeholder=\"姓名\"/>
\t\t\t</div>
\t\t\t<div class=\"ui-form-item ui-border-b ui-form-itemUser\">
\t\t\t\t<label for=\"#\">宝贝生日</label>
\t\t\t\t<input type=\"date\" name=\"BodyBIrthDay\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "babaybirthday", array()), "html", null, true);
        echo "\" placeholder=\"姓名\"/>
\t\t\t</div>
\t\t\t<div class=\"ui-form-item ui-border-b ui-form-itemUser\">
\t\t\t\t<label for=\"#\">电&nbsp;&nbsp;&nbsp;话</label>
\t\t\t\t<input type=\"tel\" name=\"Phone\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "\" placeholder=\"联系方式\"/>
\t\t\t</div>
\t\t\t<div class=\"ui-form-item ui-border-b ui-form-itemUser\">
\t\t\t\t<label for=\"#\">邮&nbsp;&nbsp;&nbsp;箱</label>
\t\t\t\t<input type=\"email\" name=\"Email\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\" placeholder=\"@.com\"/>
\t\t\t</div>
\t\t\t<div class=\"ui-form-item ui-border-b ui-form-itemUser\">
\t\t\t\t<label for=\"#\">性&nbsp;&nbsp;&nbsp;别</label>
\t\t\t\t<select name=\"Sex\">
\t\t\t\t\t<option value=\"1\">男</option>
\t\t\t\t\t<option value=\"2\">女</option>
\t\t\t\t\t<option value=\"0\">保密</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<script>\$(\"select[name='Sex']\").val(";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sex", array()), "html", null, true);
        echo ")   </script>
\t\t\t<div class=\"ui-form-item ui-border-b ui-form-itemUser\">
\t\t\t\t<label for=\"#\">地&nbsp;&nbsp;&nbsp;址</label>
\t\t\t\t<input  type=\"text\" name=\"Address\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo "\" placeholder=\"地址\"/>
\t\t\t</div>
\t\t\t<div class=\"ui-btn-wrap\">
\t\t\t\t<button class=\"ui-btn-lg ui-btn-danger2\" type=\"submit\">修改个人信息</button>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
</body>
<script>
        var aa = navigator.platform;
        // alert(aa);
        if (aa.indexOf('Win') != -1) {
            \$(\"#onediv\").css(\"width\", \"640px\");
        }
    </script>
<script id=\"jsID\" type=\"text/javascript\">
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
</html>
";
    }

    public function getTemplateName()
    {
        return "userinfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 126,  209 => 123,  196 => 113,  189 => 109,  182 => 105,  175 => 101,  168 => 97,  161 => 93,  155 => 90,  145 => 83,  138 => 79,  132 => 76,  123 => 70,  87 => 37,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  55 => 23,  51 => 22,  44 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<title>**旅游</title>*/
/* 	<meta http-equiv="description" content=""/>*/
/* 	<meta http-equiv="keywords" content="" />*/
/* 	<meta name="author" content="slade">*/
/* 	<meta name="copyright" content="slade">*/
/* 	<meta name="format-detection" content="telephone=no">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">*/
/* 	<meta name="apple-mobile-web-app-capable" content="yes">*/
/* 	<meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/* 	<!-- <link rel="stylesheet" type="text/css" href="http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306"/>*/
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
/* </head>*/
/* <style type="text/css"></style>*/
/* <body style="background: #fff">*/
/* <div id="onediv" style="margin-left: auto; margin-right: auto">*/
/* 	<ul id="nav" class="nav clearfix">*/
/* 		<li class="nLi nLiOne">*/
/* 			<span class="cityP" style="font-size: 16px;">*/
/* 				全国&nbsp;&nbsp;*/
/* 				<img src="{{ static }}/Images/cityP1.png" width="10" height="9"></span>*/
/* 			<ul class="sub sub6">*/
/* 				<li data="2">*/
/* 					<span>常州</span>*/
/* 				</li>*/
/* 				<li data="8">*/
/* 					<span>丹阳</span>*/
/* 				</li>*/
/* 				<li data="9">*/
/* 					<span>张家港</span>*/
/* 				</li>*/
/* 				<script>*/
/*                         $(".sub6 li").click(function () {*/
/*                             var data = $(this).attr("data");*/
/*                             $.ajax({*/
/*                                 type: "POST",*/
/*                                 url: "/index/addcity",*/
/*                                 data: "id=" + data,//$("#loginForm").serialize(),*/
/*                                 success: function (msg) {*/
/*                                     if (msg != "ok") {*/
/*                                         alert(msg);*/
/*                                     } else {*/
/*                                         location.reload();*/
/*                                     }*/
/*                                 }*/
/*                             });*/
/*                         })*/
/*                     </script>*/
/* 			</ul>*/
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
/* 				<img src="{{ static }}/Images/cityP2.png" width="" height="30" style=" display:-webkit-box; -webkit-box-flex:0.5; -webkit-box-align:center; -webkit-box-pack:center; -webkit-box-orient:vertical; text-align:center; margin-left:auto; margin-right:auto;"></div>*/
/* 			<ul class="sub" style="top: 35px !important; width: 200%; display: none;">*/
/* 				<li style="width:80% !important; padding-left:20%; height:18px; padding-top:6px; padding-bottom:6px;">*/
/* 					<img src="{{ static }}/Images/tit1.png" width="" height="18" style="float:left;">*/
/* 					<a href="/index" style="float:left; height:18px; line-height:18px;">首页</a>*/
/* 				</li>*/
/* 				<li style="width:80% !important; padding-left:20%; height:18px; padding-top:6px; padding-bottom:6px;">*/
/* 					<img src="{{ static }}/Images/tit2.png" width="" height="18" style="float:left;">*/
/* 					<a href="/user/index" style="float:left; height:18px; line-height:18px;">我的</a>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</li>*/
/* 	</ul>*/
/* 	<div id="onediv" style="margin-left:auto;margin-right: auto">*/
/* 		<form action="{{ APP }}/user/editUserinfo" method="post">*/
/* 			<div class="ui-form-item ui-border-b ui-form-itemUser">*/
/* 				<label for="#">用户名</label>*/
/* 				<input type="text" name="username" value="{{ user.username }}" readonly="readonly"/>*/
/* 			</div>*/
/* 			<div class="ui-form-item ui-border-b ui-form-itemUser">*/
/* 				<label for="#">姓&nbsp;&nbsp;&nbsp;名</label>*/
/* 				<input type="text" name="Name" value="{{ user.surname }}" placeholder="姓名"/>*/
/* 			</div>*/
/* 			<div class="ui-form-item ui-border-b ui-form-itemUser">*/
/* 				<label for="#">宝贝姓名</label>*/
/* 				<input type="text" name="BodyName" value="{{ user.babayname }}" placeholder="姓名"/>*/
/* 			</div>*/
/* 			<div class="ui-form-item ui-border-b ui-form-itemUser">*/
/* 				<label for="#">宝贝生日</label>*/
/* 				<input type="date" name="BodyBIrthDay" value="{{ user.babaybirthday }}" placeholder="姓名"/>*/
/* 			</div>*/
/* 			<div class="ui-form-item ui-border-b ui-form-itemUser">*/
/* 				<label for="#">电&nbsp;&nbsp;&nbsp;话</label>*/
/* 				<input type="tel" name="Phone" value="{{ user.phone }}" placeholder="联系方式"/>*/
/* 			</div>*/
/* 			<div class="ui-form-item ui-border-b ui-form-itemUser">*/
/* 				<label for="#">邮&nbsp;&nbsp;&nbsp;箱</label>*/
/* 				<input type="email" name="Email" value="{{ user.email }}" placeholder="@.com"/>*/
/* 			</div>*/
/* 			<div class="ui-form-item ui-border-b ui-form-itemUser">*/
/* 				<label for="#">性&nbsp;&nbsp;&nbsp;别</label>*/
/* 				<select name="Sex">*/
/* 					<option value="1">男</option>*/
/* 					<option value="2">女</option>*/
/* 					<option value="0">保密</option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<script>$("select[name='Sex']").val({{ user.sex }})   </script>*/
/* 			<div class="ui-form-item ui-border-b ui-form-itemUser">*/
/* 				<label for="#">地&nbsp;&nbsp;&nbsp;址</label>*/
/* 				<input  type="text" name="Address" value="{{ user.address }}" placeholder="地址"/>*/
/* 			</div>*/
/* 			<div class="ui-btn-wrap">*/
/* 				<button class="ui-btn-lg ui-btn-danger2" type="submit">修改个人信息</button>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* </body>*/
/* <script>*/
/*         var aa = navigator.platform;*/
/*         // alert(aa);*/
/*         if (aa.indexOf('Win') != -1) {*/
/*             $("#onediv").css("width", "640px");*/
/*         }*/
/*     </script>*/
/* <script id="jsID" type="text/javascript">*/
/*         $(".nLi").click(function () {*/
/*             // $(this).addClass("on").siblings().removeClass("on");*/
/*             if ($(this).children("ul").is(":hidden")) {*/
/*                 $(".nLi").children("ul").css("display", "none");*/
/*                 $(this).children("ul").css("display", "block");*/
/*             } else {*/
/*                 $(this).children("ul").css("display", "none");*/
/*             }*/
/*         })*/
/*     </script>*/
/* </html>*/
/* */
