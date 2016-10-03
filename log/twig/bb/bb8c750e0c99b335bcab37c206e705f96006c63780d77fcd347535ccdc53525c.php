<?php

/* userOrderPay.html */
class __TwigTemplate_374d4d856b2ecb351756a8274d7f855e237d6e05e5614cee21ac88e490213604 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html>
<head>
   <title> 需要支付的订单</title>

    <meta http-equiv=\"description\" content=\"\" />
    <meta http-equiv=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"slade\">
    <meta name=\"copyright\" content=\"slade\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
<meta property=\"qc:admins\" content=\"6745271667665142106367\" />
    <link type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/favicon.ico\" rel=\"icon\">
    <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306\"/> -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/demo.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/main.css\">
    <!-- <script src=\"http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304\"></script>
        <script src=\"http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304\"></script> -->
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/zepto.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/frozen.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/jquery1.42.min.js\"></script>
    <script src=\"../..";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/jquery-1.8.2.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/jquery.SuperSlide.2.1.1.js\"></script>
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/layer.css\" rel=\"stylesheet\" media=\"all\" />
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/layer.m.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/laydate/laydate.js\"></script>
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/laydate/need/laydate.css\" rel=\"stylesheet\" />
</head>


            <style type=\"text/css\">
\t\t\t
            </style>
            
    <body style=\"background: #fff;\">
        <div id=\"onediv\" style=\"margin-left:auto;margin-right: auto\">
                <ul id=\"nav\" class=\"nav clearfix\">
            <li class=\"nLi nLiOne\"><span class=\"cityP\" style=\"font-size: 16px;\">常州&nbsp;&nbsp;<img src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/images/cityP1.png\" width=\"10\" height=\"9\"></span>

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
                <h3><a href=\"/index/index\" style=\"display: inline-block; width: 100%; height: 30px;\">
                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/logo.png\" height=\"30\" /></a></h3>
            </li>
            <li class=\"nLi nLiThree\">
                <div class=\"topR\" style=\"\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/cityP2.png\" width=\"\" height=\"30\" style=\" display:-webkit-box; -webkit-box-flex:0.5; -webkit-box-align:center; -webkit-box-pack:center; -webkit-box-orient:vertical; text-align:center; margin-left:auto; margin-right:auto;\"></div>
                <ul class=\"sub\" style=\"top: 35px !important; width: 200%; display: none;\">
                    <li style=\"width:80% !important; padding-left:20%; height:18px; padding-top:6px; padding-bottom:6px;\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/tit1.png\" width=\"\" height=\"18\" style=\"float:left;\"><a href=\"/index\" style=\"float:left; height:18px; line-height:18px;\">首页</a></li>
                    <li style=\"width:80% !important; padding-left:20%; height:18px; padding-top:6px; padding-bottom:6px;\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/tit2.png\" width=\"\" height=\"18\" style=\"float:left;\"><a href=\"/user/index\" style=\"float:left; height:18px; line-height:18px;\">我的</a></li>
                </ul>
            </li>
        </ul>
            <div class=\"content\">
                    <div class=\"ul_wrap2\">
                        <ul class=\"ui-list ui-list2 ui-border-t\" style=\"margin-bottom:0px !important\" >
                            <li class=\"ui-border-b\">
                                <h3>订单号：";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderInfo"]) ? $context["orderInfo"] : null), "orderNum", array()), "html", null, true);
        echo " <p>出行时间：";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderInfo"]) ? $context["orderInfo"] : null), "user_outTime", array()), "html", null, true);
        echo "</p></h3>
                            </li>
                            <li class=\"ui-border-b\">
                                <div class=\"ui-list-img ui-list-img2\">
                                    <span><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderInfo"]) ? $context["orderInfo"] : null), "thumb", array()), "html", null, true);
        echo "\"></span>
                                </div>
                                <div class=\"ui-list-info\">
                                    <h4>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderInfo"]) ? $context["orderInfo"] : null), "title", array()), "html", null, true);
        echo "</h4>
                                            <p>
                                    创建时间：";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderInfo"]) ? $context["orderInfo"] : null), "create_time", array()), "html", null, true);
        echo "
                                </p>
                                </div>
                            </li>
                        </ul>
                        <div class=\"collection\">
                            <span>总价：￥";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderInfo"]) ? $context["orderInfo"] : null), "priceTotal", array()), "html", null, true);
        echo "</span>
                            <a href=\"/order/pay?pid=8767\" class=\"go\" style=\"padding:5px 10px;\">立即支付</a>
                        </div>
                        <!--/collection-->

                    </div>     
 
                <!--/ui_wrap2-->

            </div>
            <!--/content-->
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
                function href(url,id) {
                    window.location.href = \"\"+url+\"?id=\" + id;
                }
    </script>
</html>

";
    }

    public function getTemplateName()
    {
        return "userOrderPay.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 100,  179 => 94,  174 => 92,  168 => 89,  159 => 85,  148 => 77,  144 => 76,  139 => 74,  133 => 71,  102 => 43,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  56 => 24,  50 => 21,  46 => 20,  42 => 19,  37 => 17,  19 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*    <title> 需要支付的订单</title>*/
/* */
/*     <meta http-equiv="description" content="" />*/
/*     <meta http-equiv="keywords" content="" />*/
/*     <meta name="author" content="slade">*/
/*     <meta name="copyright" content="slade">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="format-detection" content="telephone=no">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/* <meta property="qc:admins" content="6745271667665142106367" />*/
/*     <link type="image/x-icon" href="{{ static }}/Images/favicon.ico" rel="icon">*/
/*     <!-- <link rel="stylesheet" type="text/css" href="http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306"/> -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/demo.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/main.css">*/
/*     <!-- <script src="http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304"></script>*/
/*         <script src="http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304"></script> -->*/
/*     <script type="text/javascript" src="{{ static }}/scripts/zepto.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/scripts/frozen.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/scripts/jquery1.42.min.js"></script>*/
/*     <script src="../..{{ static }}/scripts/jquery-1.8.2.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/scripts/jquery.SuperSlide.2.1.1.js"></script>*/
/*     <link href="{{ static }}/Css/layer.css" rel="stylesheet" media="all" />*/
/*     <script src="{{ static }}/scripts/layer.m.js" type="text/javascript"></script>*/
/*     <script src="{{ static }}/laydate/laydate.js"></script>*/
/*     <link href="{{ static }}/laydate/need/laydate.css" rel="stylesheet" />*/
/* </head>*/
/* */
/* */
/*             <style type="text/css">*/
/* 			*/
/*             </style>*/
/*             */
/*     <body style="background: #fff;">*/
/*         <div id="onediv" style="margin-left:auto;margin-right: auto">*/
/*                 <ul id="nav" class="nav clearfix">*/
/*             <li class="nLi nLiOne"><span class="cityP" style="font-size: 16px;">常州&nbsp;&nbsp;<img src="{{ static }}/images/cityP1.png" width="10" height="9"></span>*/
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
/*                 <h3><a href="/index/index" style="display: inline-block; width: 100%; height: 30px;">*/
/*                         <img src="{{ static }}/Images/logo.png" height="30" /></a></h3>*/
/*             </li>*/
/*             <li class="nLi nLiThree">*/
/*                 <div class="topR" style=""><img src="{{ static }}/Images/cityP2.png" width="" height="30" style=" display:-webkit-box; -webkit-box-flex:0.5; -webkit-box-align:center; -webkit-box-pack:center; -webkit-box-orient:vertical; text-align:center; margin-left:auto; margin-right:auto;"></div>*/
/*                 <ul class="sub" style="top: 35px !important; width: 200%; display: none;">*/
/*                     <li style="width:80% !important; padding-left:20%; height:18px; padding-top:6px; padding-bottom:6px;"><img src="{{ static }}/Images/tit1.png" width="" height="18" style="float:left;"><a href="/index" style="float:left; height:18px; line-height:18px;">首页</a></li>*/
/*                     <li style="width:80% !important; padding-left:20%; height:18px; padding-top:6px; padding-bottom:6px;"><img src="{{ static }}/Images/tit2.png" width="" height="18" style="float:left;"><a href="/user/index" style="float:left; height:18px; line-height:18px;">我的</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*             <div class="content">*/
/*                     <div class="ul_wrap2">*/
/*                         <ul class="ui-list ui-list2 ui-border-t" style="margin-bottom:0px !important" >*/
/*                             <li class="ui-border-b">*/
/*                                 <h3>订单号：{{ orderInfo.orderNum }} <p>出行时间：{{ orderInfo.user_outTime }}</p></h3>*/
/*                             </li>*/
/*                             <li class="ui-border-b">*/
/*                                 <div class="ui-list-img ui-list-img2">*/
/*                                     <span><img src="{{ orderInfo.thumb }}"></span>*/
/*                                 </div>*/
/*                                 <div class="ui-list-info">*/
/*                                     <h4>{{ orderInfo.title }}</h4>*/
/*                                             <p>*/
/*                                     创建时间：{{ orderInfo.create_time }}*/
/*                                 </p>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div class="collection">*/
/*                             <span>总价：￥{{ orderInfo.priceTotal }}</span>*/
/*                             <a href="/order/pay?pid=8767" class="go" style="padding:5px 10px;">立即支付</a>*/
/*                         </div>*/
/*                         <!--/collection-->*/
/* */
/*                     </div>     */
/*  */
/*                 <!--/ui_wrap2-->*/
/* */
/*             </div>*/
/*             <!--/content-->*/
/*         </div>*/
/*     </body>*/
/*     <script>*/
/* */
/*         var aa = navigator.platform;*/
/*         // alert(aa);*/
/*         if (aa.indexOf('Win') != -1) {*/
/*             $("#onediv").css("width", "640px");*/
/*         }*/
/*     </script>*/
/*             <script id="jsID" type="text/javascript">*/
/* */
/*                 $(".nLi").click(function () {*/
/*                     // $(this).addClass("on").siblings().removeClass("on");*/
/*                     if ($(this).children("ul").is(":hidden")) {*/
/*                         $(".nLi").children("ul").css("display", "none");*/
/*                         $(this).children("ul").css("display", "block");*/
/*                     } else {*/
/*                         $(this).children("ul").css("display", "none");*/
/*                     }*/
/* */
/*                 })*/
/*                 function href(url,id) {*/
/*                     window.location.href = ""+url+"?id=" + id;*/
/*                 }*/
/*     </script>*/
/* </html>*/
/* */
/* */
