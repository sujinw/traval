<?php

/* info.html */
class __TwigTemplate_fca49c1123f13c362797779d1171e935b1b45e4fa737768f00cbe76516769e12 extends Twig_Template
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
   <title> 标题</title>
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"description\" content=\"/>
    <meta http-equiv=\"keywords\" content=\"\"/>
    <meta name=\"author\" content=\"slade\">
    <meta name=\"copyright\" content=\"slade\">

    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\"/> -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/demo.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/main.css\">
    <!-- <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/zepto.min.js\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script> -->
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/zepto.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery1.42.min.js\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery-1.8.2.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery.superslide.2.1.1.js\"></script>
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/layer.css\" rel=\"stylesheet\" media=\"all\" />
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/layer.m.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/laydate.js\"></script>
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/laydate.css\" rel=\"stylesheet\" />
</head>


<script>
    function alert(data) {
        layer.open({
            content: data,
            style: 'background-color:#06c1bf; color:#fff; border:none;text-align: center;',
            time: 2
        });

    }


</script>
<style type=\"text/css\">
    .pl_wrap {
        width: 100%;
        height: auto;
        overflow: hidden;
        background: #fff;
    }

    .pl_tit {
        width: 100%;
        height: 40px;
        line-height: 40px;
        overflow: hidden;
        border-bottom: 1px solid #e0e0e0;
    }

        .pl_tit h4 {
            height: 40px;
            line-height: 40px;
            font-family: '微软雅黑',Verdana, Geneva, sans-serif;
            font-size: 14px;
            color: #333;
            width: 22%;
            padding-left: 3%;
            float: left;
        }

        .pl_tit span {
            display: inline-block;
            height: 20px;
            line-height: 20px;
            padding: 10px 0px;
            width: 50%;
            overflow: hidden;
            float: left;
        }

        .pl_tit label {
            height: 40px;
            line-height: 40px;
            display: inline-block;
            font-family: '微软雅黑',Verdana, Geneva, sans-serif;
            font-size: 14px;
            color: #333;
            width: 22%;
            padding-right: 3%;
            float: left;
        }

    .pl_con {
        width: 92%;
        padding: 10px 3% 10px 3%;
        height: auto;
        overflow: hidden;
        border-bottom: 1px solid #e0e0e0;
    }

        .pl_con .pl_conl {
            width: 20%;
            height: 100%;
            float: left;
        }

            .pl_con .pl_conl span {
                width: 40px;
                height: 40px;
                margin: 10px 0px;
            }

            .pl_con .pl_conl p {
                font-family: '微软雅黑',Verdana, Geneva, sans-serif;
                font-size: 14px;
                color: #333;
            }

        .pl_con .pl_conr {
            width: 80%;
            height: auto;
            overflow: hidden;
            float: left;
        }

            .pl_con .pl_conr p {
                font-family: '微软雅黑',Verdana, Geneva, sans-serif;
                font-size: 14px;
                color: #333;
                width: 100%;
                height: auto;
                overflow: hidden;
            }

            .pl_con .pl_conr span {
                display: inline-block;
                height: 30px;
                line-height: 30px;
            }
</style>
<style type=\"text/css\">
    .nj_yd {
    }

        .nj_yd p a {
            display: inline-block;
            width: auto;
            height: auto;
            overflow: hidden;
            color: #fff;
            background-color: #fdba55;
            padding: 2px 5px;
            margin-left: 10px;
            font-size: 16px;
        }

            .nj_yd p a :hover {
                color: #F90;
            }
</style>
<body>
    <div id=\"onediv\" style=\"margin-left: auto; margin-right: auto\">
        <ul id=\"nav\" class=\"nav clearfix\">
            
               <li class=\"nLi nLiOne\"><a href=\"/index\"><span class=\"cityP\" style=\"font-size: 16px;\">&nbsp;&nbsp;<img src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/tit1.png\" width=\"30\" height=\"30\"></span></a></li>
            <li class=\"nLi nLiTwo\">
                <h3><a href=\"/index/index\" style=\"display: inline-block; width: 100%; height: 30px;\">
                    <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/logo.png\" height=\"30\" /></a></h3>
            </li>
            <li class=\"nLi nLiThree\">
                <div class=\"topR\" style=\"\">
                    <a href=\"/user/index\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/tit2.png\" width=\"\" height=\"30\" style=\"display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;\"></a>
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
        <div class=\"content\">
            <div class=\"ui-slider banner_slider\" style=\"margin-top: 0px !important; padding-top: 50%;\">
                <ul class=\"ui-slider-content\" style=\"width: 100%;\">
                    <li style=\"position: relative;\">
                        <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["ROOT"]) ? $context["ROOT"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "thumb", array()), "html", null, true);
        echo "\" alt=\"\" style=\" display: block; width: 100%; height:100%; position: relative;\"/>
                        <label style=\"display: inline-block; position: absolute; left: 0; bottom: 0px; background: #06c1ae; opacity: 0.7; color: #fff; font-family: '微软雅黑', Verdana, Geneva, sans-serif; font-size: 18px; width: auto; height: auto; padding: 7px 7px;\">￥";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "price", array()), "html", null, true);
        echo "</label>
                        <a href=\"#\" class=\"fenxiang\"></a>
                    </li>
                </ul>
            </div>
            <!--/banner-->
            <ul class=\"ui-list\" style=\"margin-bottom: 10px !important;\">
                <li class=\"ui-border-b\" style=\"margin-left: 0px;\">
                    <h4 class=\"detail_tit\" style=\"padding: 10px 10px 10px 10px;\">";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "title", array()), "html", null, true);
        echo "</h4>
                </li>
                <li class=\"\" style=\"display: block; padding: 0px 10px 10px 10px; margin-left: 0px;\">
                    <h4 class=\"TimeNum\">
                        <label style=\"float: left; text-align: left; width: 40%;\">累计报名人数:";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "signnum", array()), "html", null, true);
        echo " 人</label>
                        <label style=\"width:60%; float: right;\">报名时间：";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "signeuptime", array()), "html", null, true);
        echo "</label>
                    </h4>
                    <div class=\"head\">

                            <span>
                                <img src=\"";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/centertopy.png\" width=\"33\" height=\"33\">13775056065</span>
                            <span>
                                <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/21334e511cb1401fb964c12165ec3817.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/b0f681be3fee49af9235cfd60664be91.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/e6d05ddd4736498b816b2c4763838ca6.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/5088974150d9487fa451c7943bfe2d2e.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/4a56b3d669f34f01a4a5ede2dbbefef7.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/b15b419cff5a4db980e334cbcabe3cf7.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/6636df3a2188403790b54d53deb30848.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/26ce15074ed14dd4ad5f1b482db5f6f4.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/b10ab8eee0f64cbfadb45404add07dd7.gif\" width=\"33\" height=\"33\"></span>
                            <span>
                                <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/9ddfc3a4d57245f8979750822f79cdb0.gif\" width=\"33\" height=\"33\"></span>
                        
                    </div>
                </li>

            </ul>

            <ul class=\"ui-list ui-border-b ui-listDeatil\" style=\"margin-bottom: 10px !important;\">
            </ul>

            <ul class=\"ui-list ui-border-b ui-listDeatil\" style=\"margin-bottom: 10px !important;\">
                    <li class=\"ui-border-b\" style=\"padding: 5px 0px; height: auto; overflow: hidden;\" data-href=\"#\">
                        <div style=\"width: 50%; height: auto; overflow: hidden; padding: 0px 0px 0px 5px !important; z-index: 100;\">
                            <p style=\"width: 100%; color: #333; font-size: 14px; height: auto; overflow: hidden;\">8月28日恐龙园限量特价亲子票</p>
                            <p style=\"width: 100%; color: #999; font-size: 12px;\">（9:00-22:30） 可选时间：08-31</p>
                        </div>
                        <div class=\"nj_yd\" style=\"width: 40%\">
                            <p style=\"width: 100%;\">
                                <span style=\"display: inline-block; font-size: 16px; color: #333;\">￥";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "price", array()), "html", null, true);
        echo "</span>
                                    ";
        // line 253
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "is_end", array()) == 1)) {
            // line 254
            echo "\t\t\t\t\t\t\t\t\t<script>
                                        alert(\"商品已下架\");
                                    </script>
                                    <a href=\"javascript:void(0)\" style=\"color: #fff;\">已下架</a>

                                    ";
        }
        // line 260
        echo "                            </p>

                        </div>

                    </li>

            </ul>
            <div class=\"ui-tab\">
                <ul class=\"ui-tab-nav ui-border-b ui-tab-nav2\">
                    <li class=\"current\" data=\"1\">活动详情</li>
                    <li data=\"2\">用户评价</li>
                </ul>
                <ul class=\"ui-tab-content\" style=\"width: 100%;\">
                \t<li class=\"div1\"></li>
                    <li class=\"div2\" style=\"display: none\">暂无内容...</li> 
                    <li style=\"width: 100% !important; padding: 0px 0px !important; display: none\" class=\"div2\">

                    </li>

                </ul>

                <script>
                \tfunction escape2Html(str) {
\t\t\t\t\t var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'\"'};
\t\t\t\t\t return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
\t\t\t\t\t}
                \tvar html = escape2Html(\"";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "contents", array()), "html", null, true);
        echo "\");
                \t\$(html).appendTo(\".div1\");
                    \$(\".ui-tab-nav li\").click(function () {
                        // alert(\"被电\");
                        \$(this).addClass(\"current\").siblings().removeClass(\"current\");
                        if (\$(this).attr(\"data\") == 1) {
                            \$(\".div1\").css(\"display\", \"block\");
                            \$(\".div2\").css(\"display\", \"none\");
                        } else {
                            \$(\".div2\").css(\"display\", \"block\");
                            \$(\".div1\").css(\"display\", \"none\");
                        }
                    })
                    //var tab = new fz.Scroll('.ui-tab', {
                    //  role: 'tab',
                    //  interval: 3000,
                    //  //autoplay: true
                    //});
                    //tab.currentPage = 0;
                    //\$(tab.nav.children[0]).removeClass('current');
                    //\$(tab.nav.children[tab.currentPage]).addClass('current');
                    //tab.scrollTo(-tab.itemWidth * tab.currentPage, 0);
                    //tab.on('beforeScrollStart', function (fromIndex, toIndex) {
                    //    console.log(fromIndex, toIndex);
                    //});

                    //tab.on('scrollEnd', function () {
                    //    console.log('end');
                    //});
                </script>
            </div>
            <!--/ui-tab-->

            <div class=\" ui-btn-group-bottom \" style=\"width: 100%;\">
                
            </div>
            <!--/detailBtn-->

            <script type=\"text/javascript\">
                \$(\"span.shoucang\").click(function () {
                    //ajax
                    //获取data
                    var data = \$(this).attr(\"data\");
                    if (data == 1) {
                        \$.ajax({
                            type: \"POST\",
                            url: \"/Order/DeleteSC\",
                            data: \"goodid=496\",//\$(\"#loginForm\").serialize(),
                            success: function (msg) {
                                if (msg != \"ok\") {
                                    //  alert(msg);
                                    window.location.href = \"/user/login?id=1&goodid=496\";
                                } else {
                                    alert(\"取消收藏成功！\");
                                    \$(\"#img\").attr(\"data\", \"2\");
                                    \$(\"#img\").css(\"background-image\", \"url(Images/shoucang2.png)\");
                                    \$(\"#img\").css(\"background-size\", \"14%\");
                                }
                            }
                        });
                    } else {
                        \$.ajax({
                            type: \"POST\",
                            url: \"/Order/AddSC\",
                            data: \"goodid=496\",//\$(\"#loginForm\").serialize(),
                            success: function (msg) {
                                if (msg != \"ok\") {
                                    //   alert(msg);
                                    window.location.href = \"/user/login?id=1&goodid=496\";
                                } else {
                                    alert(\"收藏成功！\");
                                    \$(\"#img\").attr(\"data\", \"1\");
                                    \$(\"#img\").css(\"background-image\", \"url(Images/shoucang2on.png)\");
                                    \$(\"#img\").css(\"background-size\", \"14%\");
                                }
                            }
                        });
                    }

                })
            </script>

        </div>
        <!--/content-->
    </div>
    <script type=\"text/javascript\">
        var _a = \$(\".div1\").width();
        \$(\".div1 img\").css(\"width\", _a - 40);
        \$(window).resize(function () { \$(\".div1 img\").css(\"width\", _a - 40); });
        \$(\"section\").css({ height: \"auto\", overflow: \"hidden\" });
    </script>
</body>
<script>

    //var aa = navigator.platform;
    //// alert(aa);
    //if (aa.indexOf('Win') != -1) {
    //    \$(\"#onediv\").css(\"width\", \"640px\");
    //    \$(\".ui-btn-group-bottom\").css(\"position\", \"relative\");
    //}
</script>

</html>

";
    }

    public function getTemplateName()
    {
        return "info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 286,  390 => 260,  382 => 254,  380 => 253,  376 => 252,  355 => 234,  350 => 232,  345 => 230,  340 => 228,  335 => 226,  330 => 224,  325 => 222,  320 => 220,  315 => 218,  310 => 216,  305 => 214,  297 => 209,  293 => 208,  286 => 204,  275 => 196,  269 => 195,  244 => 173,  237 => 169,  231 => 166,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*    <title> 标题</title>*/
/* 	<meta charset="utf-8">*/
/*     <meta http-equiv="description" content="/>*/
/*     <meta http-equiv="keywords" content=""/>*/
/*     <meta name="author" content="slade">*/
/*     <meta name="copyright" content="slade">*/
/* */
/*     <meta name="format-detection" content="telephone=no">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/*     <!-- <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css"/> -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/demo.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/main.css">*/
/*     <!-- <script src="{{ static }}/Scripts/zepto.min.js"></script>*/
/*         <script src="{{ static }}/Scripts/frozen.js"></script> -->*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/zepto.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/frozen.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/jquery1.42.min.js"></script>*/
/*     <script src="{{ static }}/Scripts/jquery-1.8.2.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/jquery.superslide.2.1.1.js"></script>*/
/*     <link href="{{ static }}/Css/layer.css" rel="stylesheet" media="all" />*/
/*     <script src="{{ static }}/Scripts/layer.m.js" type="text/javascript"></script>*/
/*         <script src="{{ static }}/Scripts/laydate.js"></script>*/
/*     <link href="{{ static }}/Css/laydate.css" rel="stylesheet" />*/
/* </head>*/
/* */
/* */
/* <script>*/
/*     function alert(data) {*/
/*         layer.open({*/
/*             content: data,*/
/*             style: 'background-color:#06c1bf; color:#fff; border:none;text-align: center;',*/
/*             time: 2*/
/*         });*/
/* */
/*     }*/
/* */
/* */
/* </script>*/
/* <style type="text/css">*/
/*     .pl_wrap {*/
/*         width: 100%;*/
/*         height: auto;*/
/*         overflow: hidden;*/
/*         background: #fff;*/
/*     }*/
/* */
/*     .pl_tit {*/
/*         width: 100%;*/
/*         height: 40px;*/
/*         line-height: 40px;*/
/*         overflow: hidden;*/
/*         border-bottom: 1px solid #e0e0e0;*/
/*     }*/
/* */
/*         .pl_tit h4 {*/
/*             height: 40px;*/
/*             line-height: 40px;*/
/*             font-family: '微软雅黑',Verdana, Geneva, sans-serif;*/
/*             font-size: 14px;*/
/*             color: #333;*/
/*             width: 22%;*/
/*             padding-left: 3%;*/
/*             float: left;*/
/*         }*/
/* */
/*         .pl_tit span {*/
/*             display: inline-block;*/
/*             height: 20px;*/
/*             line-height: 20px;*/
/*             padding: 10px 0px;*/
/*             width: 50%;*/
/*             overflow: hidden;*/
/*             float: left;*/
/*         }*/
/* */
/*         .pl_tit label {*/
/*             height: 40px;*/
/*             line-height: 40px;*/
/*             display: inline-block;*/
/*             font-family: '微软雅黑',Verdana, Geneva, sans-serif;*/
/*             font-size: 14px;*/
/*             color: #333;*/
/*             width: 22%;*/
/*             padding-right: 3%;*/
/*             float: left;*/
/*         }*/
/* */
/*     .pl_con {*/
/*         width: 92%;*/
/*         padding: 10px 3% 10px 3%;*/
/*         height: auto;*/
/*         overflow: hidden;*/
/*         border-bottom: 1px solid #e0e0e0;*/
/*     }*/
/* */
/*         .pl_con .pl_conl {*/
/*             width: 20%;*/
/*             height: 100%;*/
/*             float: left;*/
/*         }*/
/* */
/*             .pl_con .pl_conl span {*/
/*                 width: 40px;*/
/*                 height: 40px;*/
/*                 margin: 10px 0px;*/
/*             }*/
/* */
/*             .pl_con .pl_conl p {*/
/*                 font-family: '微软雅黑',Verdana, Geneva, sans-serif;*/
/*                 font-size: 14px;*/
/*                 color: #333;*/
/*             }*/
/* */
/*         .pl_con .pl_conr {*/
/*             width: 80%;*/
/*             height: auto;*/
/*             overflow: hidden;*/
/*             float: left;*/
/*         }*/
/* */
/*             .pl_con .pl_conr p {*/
/*                 font-family: '微软雅黑',Verdana, Geneva, sans-serif;*/
/*                 font-size: 14px;*/
/*                 color: #333;*/
/*                 width: 100%;*/
/*                 height: auto;*/
/*                 overflow: hidden;*/
/*             }*/
/* */
/*             .pl_con .pl_conr span {*/
/*                 display: inline-block;*/
/*                 height: 30px;*/
/*                 line-height: 30px;*/
/*             }*/
/* </style>*/
/* <style type="text/css">*/
/*     .nj_yd {*/
/*     }*/
/* */
/*         .nj_yd p a {*/
/*             display: inline-block;*/
/*             width: auto;*/
/*             height: auto;*/
/*             overflow: hidden;*/
/*             color: #fff;*/
/*             background-color: #fdba55;*/
/*             padding: 2px 5px;*/
/*             margin-left: 10px;*/
/*             font-size: 16px;*/
/*         }*/
/* */
/*             .nj_yd p a :hover {*/
/*                 color: #F90;*/
/*             }*/
/* </style>*/
/* <body>*/
/*     <div id="onediv" style="margin-left: auto; margin-right: auto">*/
/*         <ul id="nav" class="nav clearfix">*/
/*             */
/*                <li class="nLi nLiOne"><a href="/index"><span class="cityP" style="font-size: 16px;">&nbsp;&nbsp;<img src="{{ static }}/Picture/tit1.png" width="30" height="30"></span></a></li>*/
/*             <li class="nLi nLiTwo">*/
/*                 <h3><a href="/index/index" style="display: inline-block; width: 100%; height: 30px;">*/
/*                     <img src="{{ static }}/Picture/logo.png" height="30" /></a></h3>*/
/*             </li>*/
/*             <li class="nLi nLiThree">*/
/*                 <div class="topR" style="">*/
/*                     <a href="/user/index"><img src="{{ static }}/Picture/tit2.png" width="" height="30" style="display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;"></a>*/
/*                 </div>*/
/*        */
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
/*         <div class="content">*/
/*             <div class="ui-slider banner_slider" style="margin-top: 0px !important; padding-top: 50%;">*/
/*                 <ul class="ui-slider-content" style="width: 100%;">*/
/*                     <li style="position: relative;">*/
/*                         <img src="{{ ROOT }}/{{ info.thumb }}" alt="" style=" display: block; width: 100%; height:100%; position: relative;"/>*/
/*                         <label style="display: inline-block; position: absolute; left: 0; bottom: 0px; background: #06c1ae; opacity: 0.7; color: #fff; font-family: '微软雅黑', Verdana, Geneva, sans-serif; font-size: 18px; width: auto; height: auto; padding: 7px 7px;">￥{{ info.price }}</label>*/
/*                         <a href="#" class="fenxiang"></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!--/banner-->*/
/*             <ul class="ui-list" style="margin-bottom: 10px !important;">*/
/*                 <li class="ui-border-b" style="margin-left: 0px;">*/
/*                     <h4 class="detail_tit" style="padding: 10px 10px 10px 10px;">{{ info.title }}</h4>*/
/*                 </li>*/
/*                 <li class="" style="display: block; padding: 0px 10px 10px 10px; margin-left: 0px;">*/
/*                     <h4 class="TimeNum">*/
/*                         <label style="float: left; text-align: left; width: 40%;">累计报名人数:{{ info.signnum }} 人</label>*/
/*                         <label style="width:60%; float: right;">报名时间：{{ info.signeuptime }}</label>*/
/*                     </h4>*/
/*                     <div class="head">*/
/* */
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/centertopy.png" width="33" height="33">13775056065</span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/21334e511cb1401fb964c12165ec3817.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/b0f681be3fee49af9235cfd60664be91.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/e6d05ddd4736498b816b2c4763838ca6.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/5088974150d9487fa451c7943bfe2d2e.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/4a56b3d669f34f01a4a5ede2dbbefef7.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/b15b419cff5a4db980e334cbcabe3cf7.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/6636df3a2188403790b54d53deb30848.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/26ce15074ed14dd4ad5f1b482db5f6f4.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/b10ab8eee0f64cbfadb45404add07dd7.gif" width="33" height="33"></span>*/
/*                             <span>*/
/*                                 <img src="{{ static }}/Picture/9ddfc3a4d57245f8979750822f79cdb0.gif" width="33" height="33"></span>*/
/*                         */
/*                     </div>*/
/*                 </li>*/
/* */
/*             </ul>*/
/* */
/*             <ul class="ui-list ui-border-b ui-listDeatil" style="margin-bottom: 10px !important;">*/
/*             </ul>*/
/* */
/*             <ul class="ui-list ui-border-b ui-listDeatil" style="margin-bottom: 10px !important;">*/
/*                     <li class="ui-border-b" style="padding: 5px 0px; height: auto; overflow: hidden;" data-href="#">*/
/*                         <div style="width: 50%; height: auto; overflow: hidden; padding: 0px 0px 0px 5px !important; z-index: 100;">*/
/*                             <p style="width: 100%; color: #333; font-size: 14px; height: auto; overflow: hidden;">8月28日恐龙园限量特价亲子票</p>*/
/*                             <p style="width: 100%; color: #999; font-size: 12px;">（9:00-22:30） 可选时间：08-31</p>*/
/*                         </div>*/
/*                         <div class="nj_yd" style="width: 40%">*/
/*                             <p style="width: 100%;">*/
/*                                 <span style="display: inline-block; font-size: 16px; color: #333;">￥{{ info.price }}</span>*/
/*                                     {% if info.is_end==1 %}*/
/* 									<script>*/
/*                                         alert("商品已下架");*/
/*                                     </script>*/
/*                                     <a href="javascript:void(0)" style="color: #fff;">已下架</a>*/
/* */
/*                                     {% endif %}*/
/*                             </p>*/
/* */
/*                         </div>*/
/* */
/*                     </li>*/
/* */
/*             </ul>*/
/*             <div class="ui-tab">*/
/*                 <ul class="ui-tab-nav ui-border-b ui-tab-nav2">*/
/*                     <li class="current" data="1">活动详情</li>*/
/*                     <li data="2">用户评价</li>*/
/*                 </ul>*/
/*                 <ul class="ui-tab-content" style="width: 100%;">*/
/*                 	<li class="div1"></li>*/
/*                     <li class="div2" style="display: none">暂无内容...</li> */
/*                     <li style="width: 100% !important; padding: 0px 0px !important; display: none" class="div2">*/
/* */
/*                     </li>*/
/* */
/*                 </ul>*/
/* */
/*                 <script>*/
/*                 	function escape2Html(str) {*/
/* 					 var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'"'};*/
/* 					 return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});*/
/* 					}*/
/*                 	var html = escape2Html("{{ info.contents }}");*/
/*                 	$(html).appendTo(".div1");*/
/*                     $(".ui-tab-nav li").click(function () {*/
/*                         // alert("被电");*/
/*                         $(this).addClass("current").siblings().removeClass("current");*/
/*                         if ($(this).attr("data") == 1) {*/
/*                             $(".div1").css("display", "block");*/
/*                             $(".div2").css("display", "none");*/
/*                         } else {*/
/*                             $(".div2").css("display", "block");*/
/*                             $(".div1").css("display", "none");*/
/*                         }*/
/*                     })*/
/*                     //var tab = new fz.Scroll('.ui-tab', {*/
/*                     //  role: 'tab',*/
/*                     //  interval: 3000,*/
/*                     //  //autoplay: true*/
/*                     //});*/
/*                     //tab.currentPage = 0;*/
/*                     //$(tab.nav.children[0]).removeClass('current');*/
/*                     //$(tab.nav.children[tab.currentPage]).addClass('current');*/
/*                     //tab.scrollTo(-tab.itemWidth * tab.currentPage, 0);*/
/*                     //tab.on('beforeScrollStart', function (fromIndex, toIndex) {*/
/*                     //    console.log(fromIndex, toIndex);*/
/*                     //});*/
/* */
/*                     //tab.on('scrollEnd', function () {*/
/*                     //    console.log('end');*/
/*                     //});*/
/*                 </script>*/
/*             </div>*/
/*             <!--/ui-tab-->*/
/* */
/*             <div class=" ui-btn-group-bottom " style="width: 100%;">*/
/*                 */
/*             </div>*/
/*             <!--/detailBtn-->*/
/* */
/*             <script type="text/javascript">*/
/*                 $("span.shoucang").click(function () {*/
/*                     //ajax*/
/*                     //获取data*/
/*                     var data = $(this).attr("data");*/
/*                     if (data == 1) {*/
/*                         $.ajax({*/
/*                             type: "POST",*/
/*                             url: "/Order/DeleteSC",*/
/*                             data: "goodid=496",//$("#loginForm").serialize(),*/
/*                             success: function (msg) {*/
/*                                 if (msg != "ok") {*/
/*                                     //  alert(msg);*/
/*                                     window.location.href = "/user/login?id=1&goodid=496";*/
/*                                 } else {*/
/*                                     alert("取消收藏成功！");*/
/*                                     $("#img").attr("data", "2");*/
/*                                     $("#img").css("background-image", "url(Images/shoucang2.png)");*/
/*                                     $("#img").css("background-size", "14%");*/
/*                                 }*/
/*                             }*/
/*                         });*/
/*                     } else {*/
/*                         $.ajax({*/
/*                             type: "POST",*/
/*                             url: "/Order/AddSC",*/
/*                             data: "goodid=496",//$("#loginForm").serialize(),*/
/*                             success: function (msg) {*/
/*                                 if (msg != "ok") {*/
/*                                     //   alert(msg);*/
/*                                     window.location.href = "/user/login?id=1&goodid=496";*/
/*                                 } else {*/
/*                                     alert("收藏成功！");*/
/*                                     $("#img").attr("data", "1");*/
/*                                     $("#img").css("background-image", "url(Images/shoucang2on.png)");*/
/*                                     $("#img").css("background-size", "14%");*/
/*                                 }*/
/*                             }*/
/*                         });*/
/*                     }*/
/* */
/*                 })*/
/*             </script>*/
/* */
/*         </div>*/
/*         <!--/content-->*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         var _a = $(".div1").width();*/
/*         $(".div1 img").css("width", _a - 40);*/
/*         $(window).resize(function () { $(".div1 img").css("width", _a - 40); });*/
/*         $("section").css({ height: "auto", overflow: "hidden" });*/
/*     </script>*/
/* </body>*/
/* <script>*/
/* */
/*     //var aa = navigator.platform;*/
/*     //// alert(aa);*/
/*     //if (aa.indexOf('Win') != -1) {*/
/*     //    $("#onediv").css("width", "640px");*/
/*     //    $(".ui-btn-group-bottom").css("position", "relative");*/
/*     //}*/
/* </script>*/
/* */
/* </html>*/
/* */
/* */
