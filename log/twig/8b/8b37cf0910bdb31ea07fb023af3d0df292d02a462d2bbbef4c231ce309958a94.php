<?php

/* login.html */
class __TwigTemplate_1ec45542372e4b2183d354e434e1e3f2e5049c2d6aaf0de88ccd460695913d92 extends Twig_Template
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
        echo "﻿<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>旅游</title>

    <meta http-equiv=\"description\" content=\"\" />
    <meta http-equiv=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"slade\">
    <meta name=\"copyright\" content=\"slade\">
    <meta name=\"format-detection\" content=\"telephone=no,e-mail=no\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\"/>
    -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/global.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/demo.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/main.css\">
    <!-- <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/zepto.min.js\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script>
-->
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/zepto.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery1.42.min.js\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery-1.8.2.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery.superslide.2.1.1.js\"></script>
<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/layer.css\" rel=\"stylesheet\" media=\"all\" />
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/layer.m.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/laydate.js\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/tool.js\"></script>
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/laydate.css\" rel=\"stylesheet\" />
</head>

<style type=\"text/css\"></style>

<body>
<div id=\"onediv\" style=\"margin-left: auto; margin-right: auto\">
    <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/login\" id=\"loginForm\" method=\"POST\">
        <h3 class=\"tit\">欢迎来到##旅游</h3>
        <div class=\"ui-form ui-border-tb\">
            <form action=\"#\">
                <div class=\"ui-form-item ui-form-item2 ui-border-b\">
                    <label for=\"#\" class=\"ui-form-label1\"></label>
                    <input type=\"text\" name=\"Phone\" placeholder=\"用户名\" />
                </div>
                <div class=\"ui-form-item ui-form-item2 ui-border-b\">
                    <label for=\"#\" class=\"ui-form-label2\"></label>
                    <input type=\"password\" name=\"Pwd\" placeholder=\"密码\" />
                </div>

            </form>

        </div>

        <div class=\"ui-btn-group-tiled ui-btn-wrap\">
            <button onclick=\"win()\" class=\"ui-btn-lg ui-btn-lg2 ui-btn-reg ui-btn-re2\">注册</button>
            <button onclick=\"sub()\" class=\"ui-btn-lg ui-btn-lg2 ui-btn-login ui-btn-login\">登录</button>
        </div>

    </form>
    <!--/forget-->
    <script>
            function win() {
                window.location.href = '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/Register';
            }
            function sub() {
                // alert(\"ss\");
                var phone = \$(\"input[name='Phone']\").val();
                var pwd = \$(\"input[name='Pwd']\").val();
                var str = phone;
                var n = Number(str);
                if (phone == \"\" || phone == null) {
                    alert(\"用户名不能为空\");
                }
                else if (phone.length < 6 || phone.length > 16) {
                    alert(\"用户名长度不符\");
                }/*
                else if (isNaN(n)) {
                    alert(\"手机号码为数字\");
                }*/ else if (pwd == null || pwd == \"\") {
                    alert(\"密码不能为空\");
                } else if (pwd.length < 8) {
                    alert(\"密码长度小于8\");
                }
                else {
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/login\",
                        data:{\"Phone\":\$(\"input[name='Phone']\").val(),\"Pwd\":\$(\"input[name='Pwd']\").val()},
                        success: function (data) {
                            if (data.code != \"20001\") {
                                alert(data.msg);
                            } else {
                                callTips(\"登录成功\");
                                for(var k in data.data){
                                    window.store.set(k,data.data[k]);
                                }
                                setTimeout(function () {
                                    window.location.href = '";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/index';
                                }, 2000);
                            }
                        }
                    });
                }
}
        </script>
    <div class=\"ui-btn-group-tiled ui-btn-wrap\">
        <div class=\"btn\" style=\"\" id=\"weixinbtn\">
            <button onclick=\"weixin()\" class=\"ui-btn-lg ui-btn-lg2 ui-btn-weixin\" style=\"height: 44px; line-height: 44px; background: none; text-align: left; padding-left: 30%;\">
                <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/reg3.png\" height=\"30\" width=\"30\" style=\"margin: 6px 13px 0px 0px; float: left;\" />
                <h4 style=\"height: 44px; line-height: 44px; float: left;\">微信登录</h4>
            </button>
        </div>
        <div class=\"btn\" id=\"qqBtn\">

            <button id=\"qqLoginBtn\" class=\"ui-btn-lg ui-btn-lg2 ui-btn-weixin\" style=\"height: 44px; line-height: 44px; background: none; text-align: left; padding-left: 30%; padding-top: 6px\">
                <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Picture/connect_logo_4.png\" style=\"margin: -6px 13px 0px 0px; float: left;\" />

            </button>
        </div>
    </div>
    <script>
            function weixin() {
                //使用微信登陆
                window.location.href = \"/User/Weixin?loginid=3&url=&gid=&cid=&i=\";
            }
            function qq() {
                //使用QQ登录
               alert(\"暂未开通！\");
                // window.location.href = \"/User/LoginForQQ\";
            }

            \$(\"#qqLoginBtn\").click(function() {
                qq();
            });

        </script>

</div>
</body>
<script>
    var aa = navigator.platform;
    // alert(aa);
    if (aa.indexOf('Win') != -1) {
        //pc
        \$(\"#weixinbtn\").hide();
        \$(\"#onediv\").css(\"width\", \"640px\");
    } else {
        \$(\"#qqBtn\").hide();
    }
</script>

</html>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 118,  191 => 111,  177 => 100,  163 => 89,  136 => 65,  107 => 39,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  40 => 17,  35 => 15,  19 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>旅游</title>*/
/* */
/*     <meta http-equiv="description" content="" />*/
/*     <meta http-equiv="keywords" content="" />*/
/*     <meta name="author" content="slade">*/
/*     <meta name="copyright" content="slade">*/
/*     <meta name="format-detection" content="telephone=no,e-mail=no">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/*     <!-- <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css"/>*/
/*     -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/demo.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/main.css">*/
/*     <!-- <script src="{{ static }}/Scripts/zepto.min.js"></script>*/
/* <script src="{{ static }}/Scripts/frozen.js"></script>*/
/* -->*/
/* <script type="text/javascript" src="{{ static }}/Scripts/zepto.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/Scripts/frozen.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/Scripts/jquery1.42.min.js"></script>*/
/* <script src="{{ static }}/Scripts/jquery-1.8.2.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/Scripts/jquery.superslide.2.1.1.js"></script>*/
/* <link href="{{ static }}/Css/layer.css" rel="stylesheet" media="all" />*/
/* <script src="{{ static }}/Scripts/layer.m.js" type="text/javascript"></script>*/
/* <script src="{{ static }}/Scripts/laydate.js"></script>*/
/* <script src="{{ static }}/Scripts/tool.js"></script>*/
/* <link href="{{ static }}/Css/laydate.css" rel="stylesheet" />*/
/* </head>*/
/* */
/* <style type="text/css"></style>*/
/* */
/* <body>*/
/* <div id="onediv" style="margin-left: auto; margin-right: auto">*/
/*     <form action="{{ APP }}/login/login" id="loginForm" method="POST">*/
/*         <h3 class="tit">欢迎来到##旅游</h3>*/
/*         <div class="ui-form ui-border-tb">*/
/*             <form action="#">*/
/*                 <div class="ui-form-item ui-form-item2 ui-border-b">*/
/*                     <label for="#" class="ui-form-label1"></label>*/
/*                     <input type="text" name="Phone" placeholder="用户名" />*/
/*                 </div>*/
/*                 <div class="ui-form-item ui-form-item2 ui-border-b">*/
/*                     <label for="#" class="ui-form-label2"></label>*/
/*                     <input type="password" name="Pwd" placeholder="密码" />*/
/*                 </div>*/
/* */
/*             </form>*/
/* */
/*         </div>*/
/* */
/*         <div class="ui-btn-group-tiled ui-btn-wrap">*/
/*             <button onclick="win()" class="ui-btn-lg ui-btn-lg2 ui-btn-reg ui-btn-re2">注册</button>*/
/*             <button onclick="sub()" class="ui-btn-lg ui-btn-lg2 ui-btn-login ui-btn-login">登录</button>*/
/*         </div>*/
/* */
/*     </form>*/
/*     <!--/forget-->*/
/*     <script>*/
/*             function win() {*/
/*                 window.location.href = '{{ APP }}/login/Register';*/
/*             }*/
/*             function sub() {*/
/*                 // alert("ss");*/
/*                 var phone = $("input[name='Phone']").val();*/
/*                 var pwd = $("input[name='Pwd']").val();*/
/*                 var str = phone;*/
/*                 var n = Number(str);*/
/*                 if (phone == "" || phone == null) {*/
/*                     alert("用户名不能为空");*/
/*                 }*/
/*                 else if (phone.length < 6 || phone.length > 16) {*/
/*                     alert("用户名长度不符");*/
/*                 }/**/
/*                 else if (isNaN(n)) {*/
/*                     alert("手机号码为数字");*/
/*                 }*//*  else if (pwd == null || pwd == "") {*/
/*                     alert("密码不能为空");*/
/*                 } else if (pwd.length < 8) {*/
/*                     alert("密码长度小于8");*/
/*                 }*/
/*                 else {*/
/*                     $.ajax({*/
/*                         type: "POST",*/
/*                         url: "{{ APP }}/login/login",*/
/*                         data:{"Phone":$("input[name='Phone']").val(),"Pwd":$("input[name='Pwd']").val()},*/
/*                         success: function (data) {*/
/*                             if (data.code != "20001") {*/
/*                                 alert(data.msg);*/
/*                             } else {*/
/*                                 callTips("登录成功");*/
/*                                 for(var k in data.data){*/
/*                                     window.store.set(k,data.data[k]);*/
/*                                 }*/
/*                                 setTimeout(function () {*/
/*                                     window.location.href = '{{ APP }}/user/index';*/
/*                                 }, 2000);*/
/*                             }*/
/*                         }*/
/*                     });*/
/*                 }*/
/* }*/
/*         </script>*/
/*     <div class="ui-btn-group-tiled ui-btn-wrap">*/
/*         <div class="btn" style="" id="weixinbtn">*/
/*             <button onclick="weixin()" class="ui-btn-lg ui-btn-lg2 ui-btn-weixin" style="height: 44px; line-height: 44px; background: none; text-align: left; padding-left: 30%;">*/
/*                 <img src="{{ static }}/Picture/reg3.png" height="30" width="30" style="margin: 6px 13px 0px 0px; float: left;" />*/
/*                 <h4 style="height: 44px; line-height: 44px; float: left;">微信登录</h4>*/
/*             </button>*/
/*         </div>*/
/*         <div class="btn" id="qqBtn">*/
/* */
/*             <button id="qqLoginBtn" class="ui-btn-lg ui-btn-lg2 ui-btn-weixin" style="height: 44px; line-height: 44px; background: none; text-align: left; padding-left: 30%; padding-top: 6px">*/
/*                 <img src="{{ static }}/Picture/connect_logo_4.png" style="margin: -6px 13px 0px 0px; float: left;" />*/
/* */
/*             </button>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*             function weixin() {*/
/*                 //使用微信登陆*/
/*                 window.location.href = "/User/Weixin?loginid=3&url=&gid=&cid=&i=";*/
/*             }*/
/*             function qq() {*/
/*                 //使用QQ登录*/
/*                alert("暂未开通！");*/
/*                 // window.location.href = "/User/LoginForQQ";*/
/*             }*/
/* */
/*             $("#qqLoginBtn").click(function() {*/
/*                 qq();*/
/*             });*/
/* */
/*         </script>*/
/* */
/* </div>*/
/* </body>*/
/* <script>*/
/*     var aa = navigator.platform;*/
/*     // alert(aa);*/
/*     if (aa.indexOf('Win') != -1) {*/
/*         //pc*/
/*         $("#weixinbtn").hide();*/
/*         $("#onediv").css("width", "640px");*/
/*     } else {*/
/*         $("#qqBtn").hide();*/
/*     }*/
/* </script>*/
/* */
/* </html>*/
/* */
