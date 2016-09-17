<?php

/* addUserOutinfo.html */
class __TwigTemplate_7ab803d71166ee38dd076911e813f6d0632ba8ab9e744276577c9666e5a4655f extends Twig_Template
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
    <title>**</title>
    <meta name=\"Keywords\" content=\"\" />
    <meta name=\"author\" content=\"slade\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306\"/> -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/demo.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/main.css\">
    <!-- <script src=\"http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304\"></script>
            <script src=\"http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304\"></script> -->
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/zepto.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery1.42.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/scripts/jquery.SuperSlide.2.1.1.js\"></script>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/layer/layer.css\" rel=\"stylesheet\" media=\"all\" />
    <script src=\"";
        // line 24
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
        // line 40
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/images/tit1.png\" width=\"30\" height=\"30\"></span></a></li>

            <li class=\"nLi nLiTwo\">
                <h3><a href=\"/index/index\" style=\"display: inline-block; width: 100%; height: 30px;\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/logo.png\" height=\"30\" /></a></h3>
            </li>

            <li class=\"nLi nLiThree\">
                <div class=\"topR\" style=\"\">
                    <a href=\"/user/index\">
                        <img src=\"";
        // line 50
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
        <style type=\"text/css\">
    .ui-form-itemUser input
    {
        width: 100%;
        padding-left: 95px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        outline: none;
        border: none;
    }

    .ui-form-itemUser select
    {
        width: 100%;
        padding-left: 95px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border: none;
        background: none;
        text-align: left;
        margin-left: 0px;
    }
</style>
<body style=\"background: #fff\">
    <form action=\"/user/outUserAdd\" id=\"LoginForm\" method=\"post\">
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">出行人姓名</label>
            <input type=\"text\" name=\"Name\" value=\"\" placeholder=\"姓名\" />
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">手机号码</label>
            <input type=\"text\" value=\"\" placeholder=\"手机\" name=\"Phone\" />
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">性&nbsp;&nbsp;&nbsp;别 </label>
            <select name=\"SEX\">
                <option value=\"\">--请选择--</option>
                <option value=\"0\">男</option>
                <option value=\"1\">女</option>
            </select>
        </div>

        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">年龄范围 </label>

            <select name=\"AgeArea\">
                <option value=\"\">--请选择--</option>
                <option value=\"1\">成人</option>
                <option value=\"0\">儿童</option>
            </select>
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">证件类型</label>
            <select name=\"id_type\">
                <option value=\"1\">身份证</option>
            </select>
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">证件号码</label>
            <input type=\"text\" value=\"\" placeholder=\"可不填\" name=\"idNum\" />
            <input type=\"hidden\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["uid"]) ? $context["uid"] : null), "html", null, true);
        echo "\" name=\"uid\" />
        </div>
        <div class=\"ui-btn-wrap\">
                <button class=\"ui-btn-lg ui-btn-danger2\" type=\"button\" onclick=\"sub(0)\">完成</button>
        </div>
    </form>
    <script>
        function sub(data) {
            \$(\"input[name='Id']\").val(data);
            var name = \$(\"input[name='Name']\").val();
            //   var bir = \$(\"input[name='Birthday']\").val();
            // var caid = \$(\"input[name='CaidNO']\").val();
            var phone = \$(\"input[name='Phone']\").val();
            var agearea = \$(\"select[name='AgeArea']\").val();
            var sex = \$(\"select[name='SEX']\").val();
            if (name == null || name == \"\") {
                alert(\"请输入姓名吧\");
            } else if (agearea == null || agearea == \"\") {
                alert(\"请选择年龄范围\");
            }
            else if (sex == null || sex == \"\") {
                alert(\"请选择性别\");
            }
                //else if (caid == null || caid == \"\") {
                //    alert(\"身份证怎么能不填呢\");
                //}
                //else if (caid.length != 18) {
                //    alert(\"身份证长度不符\");
                //}
            else if (phone == null || phone == \"\") {
                alert(\"手机号码必填哦\");
            }
            else if (phone != \"\") {
                var str = phone;
                var n = Number(str);
                if (phone.length != 11) {
                    alert(\"手机号码长度不符\");
                } else if (isNaN(n)) {
                    alert(\"手机号码为数字\");
                } else {
                    \$(\"#LoginForm\").submit();
                }
            }
            else {
                \$(\"#LoginForm\").submit();
            }
        }

        function del() {
            window.location.href = \"/userinfo/Delete?Id=\";
        }
    </script>
    <script type=\"text/javascript\">
        var o = document.getElementById('date');
        o.onfocus = function () {
            this.removeAttribute('placeholder');
        };
        o.onblur = function () {
            if (this.value == '') this.setAttribute('placeholder', '我是日期');
        };

    </script>

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
        return "addUserOutinfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 128,  103 => 50,  94 => 44,  87 => 40,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html lang="">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>**</title>*/
/*     <meta name="Keywords" content="" />*/
/*     <meta name="author" content="slade" />*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="format-detection" content="telephone=no">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/*     <!-- <link rel="stylesheet" type="text/css" href="http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306"/> -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/demo.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/main.css">*/
/*     <!-- <script src="http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304"></script>*/
/*             <script src="http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304"></script> -->*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/zepto.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/frozen.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/jquery1.42.min.js"></script>*/
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
/*         <style type="text/css">*/
/*     .ui-form-itemUser input*/
/*     {*/
/*         width: 100%;*/
/*         padding-left: 95px;*/
/*         -webkit-box-sizing: border-box;*/
/*         box-sizing: border-box;*/
/*         outline: none;*/
/*         border: none;*/
/*     }*/
/* */
/*     .ui-form-itemUser select*/
/*     {*/
/*         width: 100%;*/
/*         padding-left: 95px;*/
/*         -webkit-box-sizing: border-box;*/
/*         box-sizing: border-box;*/
/*         border: none;*/
/*         background: none;*/
/*         text-align: left;*/
/*         margin-left: 0px;*/
/*     }*/
/* </style>*/
/* <body style="background: #fff">*/
/*     <form action="/user/outUserAdd" id="LoginForm" method="post">*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">出行人姓名</label>*/
/*             <input type="text" name="Name" value="" placeholder="姓名" />*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">手机号码</label>*/
/*             <input type="text" value="" placeholder="手机" name="Phone" />*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">性&nbsp;&nbsp;&nbsp;别 </label>*/
/*             <select name="SEX">*/
/*                 <option value="">--请选择--</option>*/
/*                 <option value="0">男</option>*/
/*                 <option value="1">女</option>*/
/*             </select>*/
/*         </div>*/
/* */
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">年龄范围 </label>*/
/* */
/*             <select name="AgeArea">*/
/*                 <option value="">--请选择--</option>*/
/*                 <option value="1">成人</option>*/
/*                 <option value="0">儿童</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">证件类型</label>*/
/*             <select name="id_type">*/
/*                 <option value="1">身份证</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">证件号码</label>*/
/*             <input type="text" value="" placeholder="可不填" name="idNum" />*/
/*             <input type="hidden" value="{{ uid }}" name="uid" />*/
/*         </div>*/
/*         <div class="ui-btn-wrap">*/
/*                 <button class="ui-btn-lg ui-btn-danger2" type="button" onclick="sub(0)">完成</button>*/
/*         </div>*/
/*     </form>*/
/*     <script>*/
/*         function sub(data) {*/
/*             $("input[name='Id']").val(data);*/
/*             var name = $("input[name='Name']").val();*/
/*             //   var bir = $("input[name='Birthday']").val();*/
/*             // var caid = $("input[name='CaidNO']").val();*/
/*             var phone = $("input[name='Phone']").val();*/
/*             var agearea = $("select[name='AgeArea']").val();*/
/*             var sex = $("select[name='SEX']").val();*/
/*             if (name == null || name == "") {*/
/*                 alert("请输入姓名吧");*/
/*             } else if (agearea == null || agearea == "") {*/
/*                 alert("请选择年龄范围");*/
/*             }*/
/*             else if (sex == null || sex == "") {*/
/*                 alert("请选择性别");*/
/*             }*/
/*                 //else if (caid == null || caid == "") {*/
/*                 //    alert("身份证怎么能不填呢");*/
/*                 //}*/
/*                 //else if (caid.length != 18) {*/
/*                 //    alert("身份证长度不符");*/
/*                 //}*/
/*             else if (phone == null || phone == "") {*/
/*                 alert("手机号码必填哦");*/
/*             }*/
/*             else if (phone != "") {*/
/*                 var str = phone;*/
/*                 var n = Number(str);*/
/*                 if (phone.length != 11) {*/
/*                     alert("手机号码长度不符");*/
/*                 } else if (isNaN(n)) {*/
/*                     alert("手机号码为数字");*/
/*                 } else {*/
/*                     $("#LoginForm").submit();*/
/*                 }*/
/*             }*/
/*             else {*/
/*                 $("#LoginForm").submit();*/
/*             }*/
/*         }*/
/* */
/*         function del() {*/
/*             window.location.href = "/userinfo/Delete?Id=";*/
/*         }*/
/*     </script>*/
/*     <script type="text/javascript">*/
/*         var o = document.getElementById('date');*/
/*         o.onfocus = function () {*/
/*             this.removeAttribute('placeholder');*/
/*         };*/
/*         o.onblur = function () {*/
/*             if (this.value == '') this.setAttribute('placeholder', '我是日期');*/
/*         };*/
/* */
/*     </script>*/
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
