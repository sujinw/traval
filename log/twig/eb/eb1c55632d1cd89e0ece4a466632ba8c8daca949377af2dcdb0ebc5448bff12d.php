<?php

/* tips.html */
class __TwigTemplate_e585305994f4519149028c08ce285c0c1209e44ecc5b52c43f8da4f6f7162b88 extends Twig_Template
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
\t\t<div class=\"tips\" style=\"width: 100%;text-align: center;margin-top: 80px;\"><img style=\"width:70px;border-radius: 50%\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/loading.gif\" alt=\"LOADING\" /><p style=\"height: 34px;line-height: 34px;\">";
        echo twig_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
        echo "</p></div>
\t</div>
</div>
</body>
<script>
    var aa = navigator.platform;
    // alert(aa);
    if (aa.indexOf('Win') != -1) {
        \$(\"#onediv\").css(\"width\", \"640px\");
    }
    window.location.href=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\";  
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
        return "tips.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 100,  155 => 90,  145 => 83,  138 => 79,  132 => 76,  123 => 70,  87 => 37,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  55 => 23,  51 => 22,  44 => 18,  40 => 17,  36 => 16,  19 => 1,);
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
/* 		<div class="tips" style="width: 100%;text-align: center;margin-top: 80px;"><img style="width:70px;border-radius: 50%" src="{{ static }}/Images/loading.gif" alt="LOADING" /><p style="height: 34px;line-height: 34px;">{{ messages }}</p></div>*/
/* 	</div>*/
/* </div>*/
/* </body>*/
/* <script>*/
/*     var aa = navigator.platform;*/
/*     // alert(aa);*/
/*     if (aa.indexOf('Win') != -1) {*/
/*         $("#onediv").css("width", "640px");*/
/*     }*/
/*     window.location.href="{{ url }}";  */
/* </script>*/
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
