<?php

/* index.html */
class __TwigTemplate_f1c8227c73cb36c7f506ce57000e2e4db63ade489b49df701b934b2849856d62 extends Twig_Template
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
    <title> ***旅行</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"description\" content=\"\" />
    <meta http-equiv=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"slade\">
    <meta name=\"copyright\" content=\"slade\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\"/> -->
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
    <!-- <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/zepto.min.js\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script> -->
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/zepto.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery1.42.min.js\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery-1.8.2.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery.superslide.2.1.1.js\"></script>
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/layer.css\" rel=\"stylesheet\" media=\"all\" />
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/layer.m.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/laydate.js\"></script>
    <link href=\"";
        // line 28
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


<body style=\"background: #fff\">
    <div id=\"onediv\" style=\"margin-left: auto; margin-right: auto\">
        <ul id=\"nav\" class=\"nav clearfix\">
            <li class=\"nLi nLiOne\"><span class=\"cityP\" style=\"font-size: 16px;\">常州&nbsp;&nbsp;<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/cityp1.png\" width=\"10\" height=\"10\"></span>

                <ul class=\"sub sub6\">
                        <li data=\"2\"><span>常州</span></li> 
                        <li data=\"8\"><span>丹阳</span></li> 
                        <li data=\"9\"><span>张家港</span></li> 
                    <script>
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
                </ul>
            </li>
            <li class=\"nLi nLiTwo\">
                <div class=\"ui-searchbar-wrap\" style=\"width: 100% !important; background: #fff; position: relative;\">

                    <div class=\"ui-searchbar2\" style=\"background: url(";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/searchbg.png)  bottom no-repeat; border: none; background-size: 100%;\">
                        <div class=\"ui-searchbar-input2\">
                            <input type=\"text\" placeholder=\"输入关键字\" name=\"select\" autocapitalize=\"off\">
                            <a href=\"javascript:void(0)\" id=\"sel\"><i class=\"ui-icon-search2\"></i></a>
                        </div>

                        <!--/ui-searchbar-input2-->
                        <script>
                            \$(\"#sel\").click(function () {
                                var date = \$(\"input[name='select']\").val();
                                if (date == \"\" || date == null) {
                                    alert(\"检索内容为空\");
                                } else {
                                    window.location.href = '/select/index?select=' + date;
                                }
                            })
                        </script>
                    </div>
                    <!--/ui-searchbar2-->

                </div>
                <!--/ui-searchbar-wrap-->
            </li>
            <li class=\"nLi nLiThree\">
                <div class=\"topR\" style=\"\" id=\"href\">
                    <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/tit2.png\" width=\"\" height=\"30\" style=\"display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;\">
                </div>
                
            </li>
        </ul>
        <script id=\"jsID\" type=\"text/javascript\">
            \$(\"#href\").click(function () {
                window.location.href = \"/user/index\";
            });
            \$(\".nLi\").click(function () {
                // \$(this).addClass(\"on\").siblings().removeClass(\"on\");
                if (\$(this).children(\"ul\").is(\":hidden\")) {
                    \$(\".nLi\").children(\"ul\").css(\"display\", \"none\");
                    \$(this).children(\"ul\").css(\"display\", \"block\");
                } else {
                    \$(this).children(\"ul\").css(\"display\", \"none\");
                }

            })
            //jQuery(\"#nav\").slide({
            //    type: \"menu\",// 效果类型，针对菜单/导航而引入的参数（默认slide）
            //    titCell: \".nLi\", //鼠标触发对象
            //    targetCell: \".sub\", //titCell里面包含的要显示/消失的对象
            //    effect: \"slideDown\", //targetCell下拉效果
            //    delayTime: 300, //效果时间
            //    triggerTime: 0, //鼠标延迟触发时间（默认150）
            //    returnDefault: true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
            //});
        </script>
        <div class=\"ui-slider banner_slider\" style=\"padding-top: 42%;\">
            
            <ul class=\"ui-slider-content\" style=\"margin-bottom: 20px;\">
                    <li class=\"lb\" data=\"http://www.feitrip.cn/order/detail?id=423\"><span style=\"background: url(";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201606210937213948.jpg) no-repeat; background-size: 100% 100%\"></span></li> 
                    <li class=\"lb\" data=\"http://www.feitrip.cn/order/qdetail?id=500\"><span style=\"background: url(";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201608311025429463.jpg) no-repeat; background-size: 100% 100%\"></span></li> 
                    <li class=\"lb\" data=\"http://www.feitrip.cn/order/qdetail?id=491\"><span style=\"background: url(";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201608301137594447.jpg) no-repeat; background-size: 100% 100%\"></span></li> 
                    <li class=\"lb\" data=\"http://www.feitrip.cn/order/detail?id=161\"><span style=\"background: url(";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201608301135327860.jpg) no-repeat; background-size: 100% 100%\"></span></li> 
                    <li class=\"lb\" data=\"http://www.feitrip.cn/order/detail?id=222\"><span style=\"background: url(";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201603150911526141.jpg) no-repeat; background-size: 100% 100%\"></span></li> 

                
            </ul>
        </div>
        <!--/banner-->

        <script>
            \$(\".lb\").click(function () {
                var data = \$(this).attr(\"data\");
                window.location.href = \"\" + data;
            })
        </script>
        <script>
            window.addEventListener('load', function () {
                var slider = new fz.Scroll('.ui-slider', {
                    role: 'slider',
                    indicator: true,
                    autoplay: true,
                    interval: 3000
                });

                slider.on('beforeScrollStart', function (fromIndex, toIndex) {
                    console.log(fromIndex, toIndex)
                });

                slider.on('scrollEnd', function () {
                    console.log('end');
                });
            })
        </script>
        <div class=\"h_wrap\">
            <header class=\"h_mp h_show\">
                <a href=\"/qzactivity/index\"><i class=\"ico_1\"></i>亲子活动</a>
                <a href=\"/factivity/index\"><i class=\"ico_2\"></i>周边旅游</a>
                <a href=\"/PCActivity\"><i class=\"ico_3\"></i>景点剧场</a>
                <a href=\"/QzjtActivity\"><i class=\"ico_4\"></i>公益专场</a>
            </header>
        </div>
        <!--/h_wrap-->

        <div class=\"content\" style=\"padding-bottom: 0px; border-bottom: 1px solid #d6f4f1; margin-bottom: 0px;\" id=\"divmain\">
            <h3 class=\"title2\" style=\"overflow: hidden;\"><font>最新发布</font><em>•</em>一份适合这季节的心情</h3>
            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 182
            echo "                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"";
            // line 184
            echo twig_escape_filter($this->env, (isset($context["ROOT"]) ? $context["ROOT"] : null), "html", null, true);
            echo "/traval/detail/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
            // line 187
            echo twig_escape_filter($this->env, (isset($context["ROOT"]) ? $context["ROOT"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "thumb", array()), "html", null, true);
            echo ") top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥";
            // line 188
            echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
            echo "起</label>

                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "title", array()), "html", null, true);
            echo "</p>
                                <style>
                                    .ui-grid-label
                                    {
                                    }

                                        .ui-grid-label label
                                        {
                                            display: inline-block;
                                            background: #06c1ae;
                                            font-family: \"微软雅黑\", Verdana, Geneva, sans-serif;
                                            color: #fff;
                                            font-size: 14px;
                                            margin-right: 6px;
                                            line-height: 24px;
                                            padding-left: 5px;
                                            padding-right: 5px;
                                            border-radius: 5px;
                                            -webkit-border-radius: 5px;
                                            -o-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            -ms-border-radius: 5px;
                                        }

                                    .ui-grid-halve
                                    {
                                        position: relative;
                                    }

                                    .ui-grid-halve-info
                                    {
                                        position: absolute;
                                        width: auto;
                                        z-index: 10;
                                        top: 10%;
                                        right: 10px;
                                        background-color: rgba(0, 0, 0, 0.6);
                                        color: #fff;
                                        -webkit-border-radius: 20px 0px 0px 20px;
                                        padding: 0px 10px;
                                    }

                                        .ui-grid-halve-info span
                                        {
                                            color: #fff;
                                        }
                                </style>
                                <div class=\"ui-grid-label\">
                                        <label>";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "address", array()), "html", null, true);
            echo "</label>
                                        <label>";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "yearold", array()), "html", null, true);
            echo "</label>
                                        ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["d"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 243
                echo "                                        <label>";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</label>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "signnum", array()), "html", null, true);
            echo " 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "            </div>
        </div>
        <input type=\"hidden\" value=\"1\" id=\"PageIndex\">
    <div class=\"ui-notice-warn\" style=\"display: none\" id=\"jiazai\">
        <i class=\"ui-icon ui-icon-refresh loading\"></i>
        <p id=\"img\">加载中...</p>
    </div>

        
        <p id=\"sss\" style=\"height: 30px; line-height: 30px; color: #999; font-size: 14px; text-align: center;\">菲趣首页|亲子活动|周边旅游|景点剧场|公益专场</p>
        <p id=\"sss\" style=\"height: 30px; line-height: 30px; color: #999; font-size: 14px; text-align: center;\">已开通城市：常州&nbsp丹阳&nbsp张家港&nbsp</p>
        <p id=\"sss\" style=\"height: 30px; line-height: 30px; color: #999; font-size: 14px; text-align: center;\">©2015 菲趣亲子游 </p>
        <!--/content-->
    </div>
</body>
<script>
    var id = 0;
    //window.onscroll = function () {
    //    //三个属性值别为滚动条的垂直位置  页面高度 窗口高度
    //    var a = \$(document).scrollTop();
    //    var b = \$(document).height();
    //    var c = \$(window).height();
    //    if (a >= b - c) {
    //        //  alert(\"底部加载\");
    //        \$(\"#jiazai\").show();
    //        //获取当前页
    //        var page = \$(\"#PageIndex\").val();
    //        if (id != page) {
    //            id = page;
    //            setTimeout(function () {
    //                \$.ajax({
    //                    type: \"POST\",
    //                    url: \"/Index/Add\",
    //                    data: \"page=\" + page,//\$(\"#loginForm\").serialize(),
    //                    success: function (msg) {
    //                        if (msg != \"ok\") {
    //                            //alert(msg);
    //                            //追加到
    //                            \$(\"#divmain\").append(msg);
    //                            if (msg != \"\") {
    //                                \$(\"#PageIndex\").val(parseInt(page) + 1);
    //                            } else {
    //                                \$(\"#jiazai\").hide();
    //                            }
    //                        }
    //                    }
    //                });
    //            }, 3000);
    //        }

    //    }
    //};
    var aa = navigator.platform;
    // alert(aa);
    if (aa.indexOf('Win') != -1) {
        \$(\"#onediv\").css(\"width\", \"640px\");
        //  \$(\"ul.ui-slider-content li\").css({ width: \"640px\", overflow: \"hidden\" });
        // \$(\"ul.ui-slider-content li span\").css({ display:\"block\", width: \"640px\", overflow: \"hidden\" });
    }
</script>
<script type=\"text/javascript\">
    \$(\"body\").on(\"click\", \"#sss\", function () {
        \$(\"ul.ui-slider-indicators\").find('li').eq(5).remove();
        //alert(\"sss\");
    });
    window.onload = function () {
        \$(\"#sss\").click();
    };
</script>


</html>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 260,  377 => 249,  371 => 245,  362 => 243,  358 => 242,  354 => 241,  350 => 240,  299 => 192,  292 => 188,  286 => 187,  278 => 184,  274 => 182,  270 => 181,  224 => 138,  220 => 137,  216 => 136,  212 => 135,  208 => 134,  173 => 102,  145 => 77,  113 => 48,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title> ***旅行</title>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="description" content="" />*/
/*     <meta http-equiv="keywords" content="" />*/
/*     <meta name="author" content="slade">*/
/*     <meta name="copyright" content="slade">*/
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
/* <script>*/
/*     function alert(data) {*/
/*         layer.open({*/
/*             content: data,*/
/*             style: 'background-color:#06c1bf; color:#fff; border:none;text-align: center;',*/
/*             time: 2*/
/* */
/*         });*/
/* */
/*     }*/
/* */
/* </script>*/
/* */
/* */
/* <body style="background: #fff">*/
/*     <div id="onediv" style="margin-left: auto; margin-right: auto">*/
/*         <ul id="nav" class="nav clearfix">*/
/*             <li class="nLi nLiOne"><span class="cityP" style="font-size: 16px;">常州&nbsp;&nbsp;<img src="{{ static }}/Picture/cityp1.png" width="10" height="10"></span>*/
/* */
/*                 <ul class="sub sub6">*/
/*                         <li data="2"><span>常州</span></li> */
/*                         <li data="8"><span>丹阳</span></li> */
/*                         <li data="9"><span>张家港</span></li> */
/*                     <script>*/
/*                         $(".sub6 li").click(function () {*/
/* */
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
/*                 </ul>*/
/*             </li>*/
/*             <li class="nLi nLiTwo">*/
/*                 <div class="ui-searchbar-wrap" style="width: 100% !important; background: #fff; position: relative;">*/
/* */
/*                     <div class="ui-searchbar2" style="background: url({{ static  }}/Images/searchbg.png)  bottom no-repeat; border: none; background-size: 100%;">*/
/*                         <div class="ui-searchbar-input2">*/
/*                             <input type="text" placeholder="输入关键字" name="select" autocapitalize="off">*/
/*                             <a href="javascript:void(0)" id="sel"><i class="ui-icon-search2"></i></a>*/
/*                         </div>*/
/* */
/*                         <!--/ui-searchbar-input2-->*/
/*                         <script>*/
/*                             $("#sel").click(function () {*/
/*                                 var date = $("input[name='select']").val();*/
/*                                 if (date == "" || date == null) {*/
/*                                     alert("检索内容为空");*/
/*                                 } else {*/
/*                                     window.location.href = '/select/index?select=' + date;*/
/*                                 }*/
/*                             })*/
/*                         </script>*/
/*                     </div>*/
/*                     <!--/ui-searchbar2-->*/
/* */
/*                 </div>*/
/*                 <!--/ui-searchbar-wrap-->*/
/*             </li>*/
/*             <li class="nLi nLiThree">*/
/*                 <div class="topR" style="" id="href">*/
/*                     <img src="{{ static }}/Picture/tit2.png" width="" height="30" style="display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;">*/
/*                 </div>*/
/*                 */
/*             </li>*/
/*         </ul>*/
/*         <script id="jsID" type="text/javascript">*/
/*             $("#href").click(function () {*/
/*                 window.location.href = "/user/index";*/
/*             });*/
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
/*             //jQuery("#nav").slide({*/
/*             //    type: "menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）*/
/*             //    titCell: ".nLi", //鼠标触发对象*/
/*             //    targetCell: ".sub", //titCell里面包含的要显示/消失的对象*/
/*             //    effect: "slideDown", //targetCell下拉效果*/
/*             //    delayTime: 300, //效果时间*/
/*             //    triggerTime: 0, //鼠标延迟触发时间（默认150）*/
/*             //    returnDefault: true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）*/
/*             //});*/
/*         </script>*/
/*         <div class="ui-slider banner_slider" style="padding-top: 42%;">*/
/*             */
/*             <ul class="ui-slider-content" style="margin-bottom: 20px;">*/
/*                     <li class="lb" data="http://www.feitrip.cn/order/detail?id=423"><span style="background: url({{ static  }}/Images/201606210937213948.jpg) no-repeat; background-size: 100% 100%"></span></li> */
/*                     <li class="lb" data="http://www.feitrip.cn/order/qdetail?id=500"><span style="background: url({{ static  }}/Images/201608311025429463.jpg) no-repeat; background-size: 100% 100%"></span></li> */
/*                     <li class="lb" data="http://www.feitrip.cn/order/qdetail?id=491"><span style="background: url({{ static  }}/Images/201608301137594447.jpg) no-repeat; background-size: 100% 100%"></span></li> */
/*                     <li class="lb" data="http://www.feitrip.cn/order/detail?id=161"><span style="background: url({{ static  }}/Images/201608301135327860.jpg) no-repeat; background-size: 100% 100%"></span></li> */
/*                     <li class="lb" data="http://www.feitrip.cn/order/detail?id=222"><span style="background: url({{ static  }}/Images/201603150911526141.jpg) no-repeat; background-size: 100% 100%"></span></li> */
/* */
/*                 */
/*             </ul>*/
/*         </div>*/
/*         <!--/banner-->*/
/* */
/*         <script>*/
/*             $(".lb").click(function () {*/
/*                 var data = $(this).attr("data");*/
/*                 window.location.href = "" + data;*/
/*             })*/
/*         </script>*/
/*         <script>*/
/*             window.addEventListener('load', function () {*/
/*                 var slider = new fz.Scroll('.ui-slider', {*/
/*                     role: 'slider',*/
/*                     indicator: true,*/
/*                     autoplay: true,*/
/*                     interval: 3000*/
/*                 });*/
/* */
/*                 slider.on('beforeScrollStart', function (fromIndex, toIndex) {*/
/*                     console.log(fromIndex, toIndex)*/
/*                 });*/
/* */
/*                 slider.on('scrollEnd', function () {*/
/*                     console.log('end');*/
/*                 });*/
/*             })*/
/*         </script>*/
/*         <div class="h_wrap">*/
/*             <header class="h_mp h_show">*/
/*                 <a href="/qzactivity/index"><i class="ico_1"></i>亲子活动</a>*/
/*                 <a href="/factivity/index"><i class="ico_2"></i>周边旅游</a>*/
/*                 <a href="/PCActivity"><i class="ico_3"></i>景点剧场</a>*/
/*                 <a href="/QzjtActivity"><i class="ico_4"></i>公益专场</a>*/
/*             </header>*/
/*         </div>*/
/*         <!--/h_wrap-->*/
/* */
/*         <div class="content" style="padding-bottom: 0px; border-bottom: 1px solid #d6f4f1; margin-bottom: 0px;" id="divmain">*/
/*             <h3 class="title2" style="overflow: hidden;"><font>最新发布</font><em>•</em>一份适合这季节的心情</h3>*/
/*             {% for d in info %}*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="{{ ROOT }}/traval/detail/id/{{ d.id }}">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ ROOT }}/{{ d.thumb }}) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥{{ price }}起</label>*/
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">{{ d.title }}</p>*/
/*                                 <style>*/
/*                                     .ui-grid-label*/
/*                                     {*/
/*                                     }*/
/* */
/*                                         .ui-grid-label label*/
/*                                         {*/
/*                                             display: inline-block;*/
/*                                             background: #06c1ae;*/
/*                                             font-family: "微软雅黑", Verdana, Geneva, sans-serif;*/
/*                                             color: #fff;*/
/*                                             font-size: 14px;*/
/*                                             margin-right: 6px;*/
/*                                             line-height: 24px;*/
/*                                             padding-left: 5px;*/
/*                                             padding-right: 5px;*/
/*                                             border-radius: 5px;*/
/*                                             -webkit-border-radius: 5px;*/
/*                                             -o-border-radius: 5px;*/
/*                                             -moz-border-radius: 5px;*/
/*                                             -ms-border-radius: 5px;*/
/*                                         }*/
/* */
/*                                     .ui-grid-halve*/
/*                                     {*/
/*                                         position: relative;*/
/*                                     }*/
/* */
/*                                     .ui-grid-halve-info*/
/*                                     {*/
/*                                         position: absolute;*/
/*                                         width: auto;*/
/*                                         z-index: 10;*/
/*                                         top: 10%;*/
/*                                         right: 10px;*/
/*                                         background-color: rgba(0, 0, 0, 0.6);*/
/*                                         color: #fff;*/
/*                                         -webkit-border-radius: 20px 0px 0px 20px;*/
/*                                         padding: 0px 10px;*/
/*                                     }*/
/* */
/*                                         .ui-grid-halve-info span*/
/*                                         {*/
/*                                             color: #fff;*/
/*                                         }*/
/*                                 </style>*/
/*                                 <div class="ui-grid-label">*/
/*                                         <label>{{ d.address }}</label>*/
/*                                         <label>{{ d.yearold }}</label>*/
/*                                         {% for tag in d.tags %}*/
/*                                         <label>{{ tag }}</label>*/
/*                                         {% endfor %}*/
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:{{ d.signnum }} 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         <input type="hidden" value="1" id="PageIndex">*/
/*     <div class="ui-notice-warn" style="display: none" id="jiazai">*/
/*         <i class="ui-icon ui-icon-refresh loading"></i>*/
/*         <p id="img">加载中...</p>*/
/*     </div>*/
/* */
/*         */
/*         <p id="sss" style="height: 30px; line-height: 30px; color: #999; font-size: 14px; text-align: center;">菲趣首页|亲子活动|周边旅游|景点剧场|公益专场</p>*/
/*         <p id="sss" style="height: 30px; line-height: 30px; color: #999; font-size: 14px; text-align: center;">已开通城市：常州&nbsp丹阳&nbsp张家港&nbsp</p>*/
/*         <p id="sss" style="height: 30px; line-height: 30px; color: #999; font-size: 14px; text-align: center;">©2015 菲趣亲子游 </p>*/
/*         <!--/content-->*/
/*     </div>*/
/* </body>*/
/* <script>*/
/*     var id = 0;*/
/*     //window.onscroll = function () {*/
/*     //    //三个属性值别为滚动条的垂直位置  页面高度 窗口高度*/
/*     //    var a = $(document).scrollTop();*/
/*     //    var b = $(document).height();*/
/*     //    var c = $(window).height();*/
/*     //    if (a >= b - c) {*/
/*     //        //  alert("底部加载");*/
/*     //        $("#jiazai").show();*/
/*     //        //获取当前页*/
/*     //        var page = $("#PageIndex").val();*/
/*     //        if (id != page) {*/
/*     //            id = page;*/
/*     //            setTimeout(function () {*/
/*     //                $.ajax({*/
/*     //                    type: "POST",*/
/*     //                    url: "/Index/Add",*/
/*     //                    data: "page=" + page,//$("#loginForm").serialize(),*/
/*     //                    success: function (msg) {*/
/*     //                        if (msg != "ok") {*/
/*     //                            //alert(msg);*/
/*     //                            //追加到*/
/*     //                            $("#divmain").append(msg);*/
/*     //                            if (msg != "") {*/
/*     //                                $("#PageIndex").val(parseInt(page) + 1);*/
/*     //                            } else {*/
/*     //                                $("#jiazai").hide();*/
/*     //                            }*/
/*     //                        }*/
/*     //                    }*/
/*     //                });*/
/*     //            }, 3000);*/
/*     //        }*/
/* */
/*     //    }*/
/*     //};*/
/*     var aa = navigator.platform;*/
/*     // alert(aa);*/
/*     if (aa.indexOf('Win') != -1) {*/
/*         $("#onediv").css("width", "640px");*/
/*         //  $("ul.ui-slider-content li").css({ width: "640px", overflow: "hidden" });*/
/*         // $("ul.ui-slider-content li span").css({ display:"block", width: "640px", overflow: "hidden" });*/
/*     }*/
/* </script>*/
/* <script type="text/javascript">*/
/*     $("body").on("click", "#sss", function () {*/
/*         $("ul.ui-slider-indicators").find('li').eq(5).remove();*/
/*         //alert("sss");*/
/*     });*/
/*     window.onload = function () {*/
/*         $("#sss").click();*/
/*     };*/
/* </script>*/
/* */
/* */
/* </html>*/
/* */
/* */
