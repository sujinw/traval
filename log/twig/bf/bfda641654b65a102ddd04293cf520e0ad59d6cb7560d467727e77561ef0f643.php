<?php

/* outUserinfo.html */
class __TwigTemplate_3a355774ed1b3db57b29f0af529bc2b38cce6972fe374ed55611fb767eeed909 extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html lang=\"\">
<head>
    <meta charset=\"UTF-8\">
    <title></title>
    <meta name=\"Keywords\" content=\"\" />
    <meta name=\"author\" content=\"slade\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">

    <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306\"/> -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/demo.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/main.css\">
    <!-- <script src=\"http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304\"></script>
            <script src=\"http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304\"></script> -->
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/zepto.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/frozen.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/jquery1.42.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/jquery.SuperSlide.2.1.1.js\"></script>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/layer/layer.css\" rel=\"stylesheet\" media=\"all\" />
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/layer.m.js\" type=\"text/javascript\"></script>
        <script>
            function alert(data) {
                layer.open({
                    content: data,
                    style: 'background-color:#06c1bf; color:#fff; border:none;text-align: center;',
                    time: 2
                });
            }
    </script>
</head>

<body>
    <div id=\"onediv\" style=\"margin-left: auto; margin-right: auto\">
        <ul id=\"nav\" class=\"nav clearfix\">

                    <li class=\"nLi nLiOne\"><a href=\"/index\"><span class=\"cityP\" style=\"font-size: 16px;\">&nbsp;&nbsp;<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/images/tit1.png\" width=\"30\" height=\"30\"></span></a></li>

            <li class=\"nLi nLiTwo\">
                <h3><a href=\"/index/index\" style=\"display: inline-block; width: 100%; height: 30px;\">
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/logo.png\" height=\"30\" /></a></h3>
            </li>

            <li class=\"nLi nLiThree\">
                <div class=\"topR\" style=\"\">
                    <a href=\"/user/index\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/tit2.png\" width=\"\" height=\"30\" style=\"display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;\"></a>
                </div>

            </li>
        </ul>
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
        <head>
</head>
<style type=\"text/css\">
    a.addInfo {
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
        text-align: center;
        font-family: '微软雅黑',Verdana, Geneva, sans-serif;
        font-size: 16px;
        color: #333;
        padding: 0px 0px !important;
    }

        a.addInfo font {
            font-size: 1em;
            font-weight: 900;
            color: #06c1ae;
        }

    a.addInfoP {
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
        padding: 0px 0px !important;
    }

        a.addInfoP p {
            height: auto;
            overflow: hidden;
            margin: 0px 0px;
            padding: 0px 0px;
        }

            a.addInfoP p span {
                display: inline-block;
                width: 100%;
                height: auto;
                overflow: hidden;
                font-family: '微软雅黑',Verdana, Geneva, sans-serif;
                line-height: 20px;
                margin: 0px 0px;
                padding: 0px 0px;
            }

            a.addInfoP p.addInfoPl {
                width: 30%;
                float: left;
            }

            a.addInfoP p.addInfoPr {
                width: 70%;
                float: left;
            }
</style>

<body>
    <div class=\"content\">

        <ul class=\"list_page_1\" style=\"background: #fff; margin-top: 10px;\">
            <li style=\"border: none; background: none; padding-left: 15px !important; height: 35px; line-height: 35px;\"><a href=\"/user/outUserAdd/id/";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["uid"]) ? $context["uid"] : null), "html", null, true);
        echo "\" class=\"addInfo\" style=\"\">添加出行人<font>+</font></a></li>
        </ul>

        <dl class=\"list_1\">
            <dt class=\"t_4\"></dt>
            <dd>
                <ul class=\"list_page_1\">
                  ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 139
            echo "                     <li style=\"padding: 0px 10px !important; height: auto; overflow: hidden; line-height: 20px !important;\">
                        <a href=\"/user/editOutUser/Id/";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\" class=\"addInfoP\" style=\"height:auto;\">
                            <p class=\"addInfoPl fl\"><span style=\"color: #333;\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "name", array()), "html", null, true);
            echo "</span><span style=\"color: #999; font-size: 0.7em;\">";
            if (($this->getAttribute($context["d"], "sex", array()) == 0)) {
                echo " &nbsp;&nbsp;男";
            } elseif (($this->getAttribute($context["d"], "sex", array()) == 1)) {
                echo "&nbsp;&nbsp;女";
            }
            echo "</span></p>
                            <p class=\"addInfoPr fl\"><span style=\"color: #999; font-size: 0.7em;\">身份证</span><span style=\"color: #333;\">";
            // line 142
            if (($this->getAttribute($context["d"], "idNum", array()) == "")) {
                echo "暂无身份证信息";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "idNum", array()), "html", null, true);
            }
            echo "</span></p>
                        </a>
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </ul>
            </dd>
        </dl>


    </div>
    <!--/content-->

        <!--/content-->
    </div>
</body>
<script type=\"text/javascript\">
    var _a = \$(\".div1\").width();
    \$(\".div1 img\").css(\"width\", _a - 40);
    \$(window).resize(function () { \$(\".div1 img\").css(\"width\", _a - 40); });
</script>
<script>

    var aa = navigator.platform;
    // alert(aa);
    if (aa.indexOf('Win') != -1) {
        \$(\"#onediv\").css(\"width\", \"640px\");
        \$(\".ui-btn-group-bottom\").css(\"position\", \"relative\");
    }
</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "outUserinfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 146,  218 => 142,  208 => 141,  204 => 140,  201 => 139,  197 => 138,  187 => 131,  104 => 51,  95 => 45,  88 => 41,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html lang="">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title></title>*/
/*     <meta name="Keywords" content="" />*/
/*     <meta name="author" content="slade" />*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="format-detection" content="telephone=no">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/* */
/*     <!-- <link rel="stylesheet" type="text/css" href="http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306"/> -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/demo.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/main.css">*/
/*     <!-- <script src="http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304"></script>*/
/*             <script src="http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304"></script> -->*/
/*     <script type="text/javascript" src="{{ static }}/scripts/zepto.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/scripts/frozen.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/scripts/jquery1.42.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/scripts/jquery.SuperSlide.2.1.1.js"></script>*/
/*     <link href="{{ static }}/layer/layer.css" rel="stylesheet" media="all" />*/
/*     <script src="{{ static }}/scripts/layer.m.js" type="text/javascript"></script>*/
/*         <script>*/
/*             function alert(data) {*/
/*                 layer.open({*/
/*                     content: data,*/
/*                     style: 'background-color:#06c1bf; color:#fff; border:none;text-align: center;',*/
/*                     time: 2*/
/*                 });*/
/*             }*/
/*     </script>*/
/* </head>*/
/* */
/* <body>*/
/*     <div id="onediv" style="margin-left: auto; margin-right: auto">*/
/*         <ul id="nav" class="nav clearfix">*/
/* */
/*                     <li class="nLi nLiOne"><a href="/index"><span class="cityP" style="font-size: 16px;">&nbsp;&nbsp;<img src="{{ static }}/images/tit1.png" width="30" height="30"></span></a></li>*/
/* */
/*             <li class="nLi nLiTwo">*/
/*                 <h3><a href="/index/index" style="display: inline-block; width: 100%; height: 30px;">*/
/*                     <img src="{{ static }}/Images/logo.png" height="30" /></a></h3>*/
/*             </li>*/
/* */
/*             <li class="nLi nLiThree">*/
/*                 <div class="topR" style="">*/
/*                     <a href="/user/index">*/
/*                         <img src="{{ static }}/Images/tit2.png" width="" height="30" style="display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;"></a>*/
/*                 </div>*/
/* */
/*             </li>*/
/*         </ul>*/
/*         <script id="jsID" type="text/javascript">*/
/* */
/*             $(".nLi").click(function () {*/
/*                 // $(this).addClass("on").siblings().removeClass("on");*/
/*                 if ($(this).children("ul").is(":hidden")) {*/
/*                     $(".nLi").children("ul").css("display", "none");*/
/*                     $(this).children("ul").css("display", "block");*/
/*                 } else {*/
/*                     $(this).children("ul").css("display", "none");*/
/*                 }*/
/* */
/*             })*/
/*         </script>*/
/*         <head>*/
/* </head>*/
/* <style type="text/css">*/
/*     a.addInfo {*/
/*         display: block;*/
/*         width: 100%;*/
/*         height: 100%;*/
/*         overflow: hidden;*/
/*         text-align: center;*/
/*         font-family: '微软雅黑',Verdana, Geneva, sans-serif;*/
/*         font-size: 16px;*/
/*         color: #333;*/
/*         padding: 0px 0px !important;*/
/*     }*/
/* */
/*         a.addInfo font {*/
/*             font-size: 1em;*/
/*             font-weight: 900;*/
/*             color: #06c1ae;*/
/*         }*/
/* */
/*     a.addInfoP {*/
/*         display: block;*/
/*         width: 100%;*/
/*         height: 100%;*/
/*         overflow: hidden;*/
/*         padding: 0px 0px !important;*/
/*     }*/
/* */
/*         a.addInfoP p {*/
/*             height: auto;*/
/*             overflow: hidden;*/
/*             margin: 0px 0px;*/
/*             padding: 0px 0px;*/
/*         }*/
/* */
/*             a.addInfoP p span {*/
/*                 display: inline-block;*/
/*                 width: 100%;*/
/*                 height: auto;*/
/*                 overflow: hidden;*/
/*                 font-family: '微软雅黑',Verdana, Geneva, sans-serif;*/
/*                 line-height: 20px;*/
/*                 margin: 0px 0px;*/
/*                 padding: 0px 0px;*/
/*             }*/
/* */
/*             a.addInfoP p.addInfoPl {*/
/*                 width: 30%;*/
/*                 float: left;*/
/*             }*/
/* */
/*             a.addInfoP p.addInfoPr {*/
/*                 width: 70%;*/
/*                 float: left;*/
/*             }*/
/* </style>*/
/* */
/* <body>*/
/*     <div class="content">*/
/* */
/*         <ul class="list_page_1" style="background: #fff; margin-top: 10px;">*/
/*             <li style="border: none; background: none; padding-left: 15px !important; height: 35px; line-height: 35px;"><a href="/user/outUserAdd/id/{{ uid }}" class="addInfo" style="">添加出行人<font>+</font></a></li>*/
/*         </ul>*/
/* */
/*         <dl class="list_1">*/
/*             <dt class="t_4"></dt>*/
/*             <dd>*/
/*                 <ul class="list_page_1">*/
/*                   {% for d in data %}*/
/*                      <li style="padding: 0px 10px !important; height: auto; overflow: hidden; line-height: 20px !important;">*/
/*                         <a href="/user/editOutUser/Id/{{ d.id }}" class="addInfoP" style="height:auto;">*/
/*                             <p class="addInfoPl fl"><span style="color: #333;">{{ d.name }}</span><span style="color: #999; font-size: 0.7em;">{% if d.sex==0 %} &nbsp;&nbsp;男{% elseif d.sex==1 %}&nbsp;&nbsp;女{% endif %}</span></p>*/
/*                             <p class="addInfoPr fl"><span style="color: #999; font-size: 0.7em;">身份证</span><span style="color: #333;">{% if d.idNum=="" %}暂无身份证信息{% else %}{{d.idNum}}{% endif %}</span></p>*/
/*                         </a>*/
/*                     </li>*/
/*                   {% endfor %}*/
/*                 </ul>*/
/*             </dd>*/
/*         </dl>*/
/* */
/* */
/*     </div>*/
/*     <!--/content-->*/
/* */
/*         <!--/content-->*/
/*     </div>*/
/* </body>*/
/* <script type="text/javascript">*/
/*     var _a = $(".div1").width();*/
/*     $(".div1 img").css("width", _a - 40);*/
/*     $(window).resize(function () { $(".div1 img").css("width", _a - 40); });*/
/* </script>*/
/* <script>*/
/* */
/*     var aa = navigator.platform;*/
/*     // alert(aa);*/
/*     if (aa.indexOf('Win') != -1) {*/
/*         $("#onediv").css("width", "640px");*/
/*         $(".ui-btn-group-bottom").css("position", "relative");*/
/*     }*/
/* </script>*/
/* </html>*/
/* */
