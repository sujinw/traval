<?php

/* register.html */
class __TwigTemplate_dceeb5b879ecab5a478da6747fec13e26ce710c21c725d23095f700608d380de extends Twig_Template
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
   <title> 旅游-注册</title>

    <meta http-equiv=\"description\" content=\"\" />
    <meta http-equiv=\"keywords\" content=\" \" />
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
            </style>
   
    <body>   <div id=\"onediv\" style=\"margin-left:auto;margin-right: auto\">
        <form action=\"/user/AddUser\" id=\"loginForm\">
            <h3 class=\"tit\">欢迎来到**旅游</h3>
            <div class=\"ui-form ui-border-tb\">
                <form action=\"#\">
                    <div class=\"ui-form-item ui-form-item2 ui-border-b\">
                        <label for=\"#\" class=\"ui-form-label1\">
                        </label>
                        <input type=\"text\" name=\"Phone\" placeholder=\"用户名\" />
                        
                    </div>
                    <div class=\"ui-form-item ui-form-item2 ui-border-b\">
                        <label for=\"#\" class=\"ui-form-label2\">
                        </label>
                        <input type=\"password\" name=\"Pwd\" placeholder=\"密码\" />
                    </div>
                    <div class=\"ui-form-item ui-form-item2 ui-border-b\">
                        <label for=\"#\" class=\"ui-form-label2\">
                        </label>
                        <input type=\"password\" name=\"Pwd2\" placeholder=\"确认密码\" />
                    </div>
                    <div class=\"ui-form-item ui-form-item2\">
                        <label for=\"#\" class=\"ui-form-label2\" style=\"  background: url(";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/y.png) center no-repeat; background-size: 56%;\">
                        </label>
                        <input type=\"password\" name=\"Code\" style=\"width:60%\" placeholder=\"请输入验证码\" />
                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/code\" />
                    </div>
                </form>

            </div>

            <div class=\"ui-btn-group-tiled ui-btn-wrap\">

                <button onclick=\"win()\" class=\"ui-btn-lg ui-btn-lg2 ui-btn-reg\">
                    登录
                </button>
                <button onclick=\"sub()\" class=\"ui-btn-lg ui-btn-lg2 ui-btn-login\">
                    注册
                </button>
            </div>
        </form>
        <script>
            function win() {
                window.location.href = '";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/login';
            }

            function sub() {
                // alert(\"ss\");
                var phone = \$(\"input[name='Phone']\").val();
                var pwd = \$(\"input[name='Pwd']\").val();
                var pwd2 = \$(\"input[name='Pwd2']\").val();
                var code = \$(\"input[name='Code']\").val();
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
                }*/
                else if (code==null||code==\"\") {
                    alert(\"验证码不能为空\");
                }
                else if (pwd==null||pwd==\"\") {
                    alert(\"密码不能为空\");
                }
                else if (pwd != pwd2) {
                    alert(\"两次密码不一致\");
                } else if (pwd.length< 8) {
                    alert(\"密码长度为6-16位\");
                }
                else if (pwd.length > 16) {
                    alert(\"密码长度为6-16位\");
                }
                else {
                    //判断验证码是否正确
                    //alert(code);
                    //提交验证验证码是否正确
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/Check?code=\" + code,
                        success: function (msg) {
                            if (msg.code != \"20001\") {
                                alert(msg.msg);
                            }
                            else {
                                //验证成功 
                                \$.ajax({
                                    type: \"POST\",
                                    url: \"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/register\",
                                    data: \$(\"#loginForm\").serialize(),
                                    success: function (msg) {
                                        if (msg.code != \"20001\") {
                                            alert(msg);
                                        } else {
                                            alert(\"注册成功 正在为你跳转个人中心...\");
                                            setTimeout(function () {
                                                window.location.href = \"/user/index\";
                                            }, 1000);
                                        }
                                    }
                                });
                                //  window.location.href = \"/Login/login?phone=\" + phone + \"&id=id\";
                            }
                        }
                    });
            
                }
            }
        </script>
        
        <!--/forget-->

        
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
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 137,  202 => 128,  159 => 88,  138 => 70,  132 => 67,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*    <title> 旅游-注册</title>*/
/* */
/*     <meta http-equiv="description" content="" />*/
/*     <meta http-equiv="keywords" content=" " />*/
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
/* */
/*     <script>*/
/*         function alert(data) {*/
/*             layer.open({*/
/*                 content: data,*/
/*                 style: 'background-color:#06c1bf; color:#fff; border:none;text-align: center;',*/
/*                 time: 2*/
/*             });*/
/*         }*/
/*     </script>*/
/* <style type="text/css">*/
/*             </style>*/
/*    */
/*     <body>   <div id="onediv" style="margin-left:auto;margin-right: auto">*/
/*         <form action="/user/AddUser" id="loginForm">*/
/*             <h3 class="tit">欢迎来到**旅游</h3>*/
/*             <div class="ui-form ui-border-tb">*/
/*                 <form action="#">*/
/*                     <div class="ui-form-item ui-form-item2 ui-border-b">*/
/*                         <label for="#" class="ui-form-label1">*/
/*                         </label>*/
/*                         <input type="text" name="Phone" placeholder="用户名" />*/
/*                         */
/*                     </div>*/
/*                     <div class="ui-form-item ui-form-item2 ui-border-b">*/
/*                         <label for="#" class="ui-form-label2">*/
/*                         </label>*/
/*                         <input type="password" name="Pwd" placeholder="密码" />*/
/*                     </div>*/
/*                     <div class="ui-form-item ui-form-item2 ui-border-b">*/
/*                         <label for="#" class="ui-form-label2">*/
/*                         </label>*/
/*                         <input type="password" name="Pwd2" placeholder="确认密码" />*/
/*                     </div>*/
/*                     <div class="ui-form-item ui-form-item2">*/
/*                         <label for="#" class="ui-form-label2" style="  background: url({{ static }}/Images/y.png) center no-repeat; background-size: 56%;">*/
/*                         </label>*/
/*                         <input type="password" name="Code" style="width:60%" placeholder="请输入验证码" />*/
/*                         <img src="{{ APP }}/login/code" />*/
/*                     </div>*/
/*                 </form>*/
/* */
/*             </div>*/
/* */
/*             <div class="ui-btn-group-tiled ui-btn-wrap">*/
/* */
/*                 <button onclick="win()" class="ui-btn-lg ui-btn-lg2 ui-btn-reg">*/
/*                     登录*/
/*                 </button>*/
/*                 <button onclick="sub()" class="ui-btn-lg ui-btn-lg2 ui-btn-login">*/
/*                     注册*/
/*                 </button>*/
/*             </div>*/
/*         </form>*/
/*         <script>*/
/*             function win() {*/
/*                 window.location.href = '{{ APP }}/login/login';*/
/*             }*/
/* */
/*             function sub() {*/
/*                 // alert("ss");*/
/*                 var phone = $("input[name='Phone']").val();*/
/*                 var pwd = $("input[name='Pwd']").val();*/
/*                 var pwd2 = $("input[name='Pwd2']").val();*/
/*                 var code = $("input[name='Code']").val();*/
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
/*                 }*//* */
/*                 else if (code==null||code=="") {*/
/*                     alert("验证码不能为空");*/
/*                 }*/
/*                 else if (pwd==null||pwd=="") {*/
/*                     alert("密码不能为空");*/
/*                 }*/
/*                 else if (pwd != pwd2) {*/
/*                     alert("两次密码不一致");*/
/*                 } else if (pwd.length< 8) {*/
/*                     alert("密码长度为6-16位");*/
/*                 }*/
/*                 else if (pwd.length > 16) {*/
/*                     alert("密码长度为6-16位");*/
/*                 }*/
/*                 else {*/
/*                     //判断验证码是否正确*/
/*                     //alert(code);*/
/*                     //提交验证验证码是否正确*/
/*                     $.ajax({*/
/*                         type: "POST",*/
/*                         url: "{{ APP }}/login/Check?code=" + code,*/
/*                         success: function (msg) {*/
/*                             if (msg.code != "20001") {*/
/*                                 alert(msg.msg);*/
/*                             }*/
/*                             else {*/
/*                                 //验证成功 */
/*                                 $.ajax({*/
/*                                     type: "POST",*/
/*                                     url: "{{ APP }}/login/register",*/
/*                                     data: $("#loginForm").serialize(),*/
/*                                     success: function (msg) {*/
/*                                         if (msg.code != "20001") {*/
/*                                             alert(msg);*/
/*                                         } else {*/
/*                                             alert("注册成功 正在为你跳转个人中心...");*/
/*                                             setTimeout(function () {*/
/*                                                 window.location.href = "/user/index";*/
/*                                             }, 1000);*/
/*                                         }*/
/*                                     }*/
/*                                 });*/
/*                                 //  window.location.href = "/Login/login?phone=" + phone + "&id=id";*/
/*                             }*/
/*                         }*/
/*                     });*/
/*             */
/*                 }*/
/*             }*/
/*         </script>*/
/*         */
/*         <!--/forget-->*/
/* */
/*         */
/*     </div>*/
/*     </body>*/
/*         <script>*/
/* */
/*             var aa = navigator.platform;*/
/*             // alert(aa);*/
/*             if (aa.indexOf('Win') != -1) {*/
/*                 $("#onediv").css("width", "640px");*/
/*             }*/
/*     </script>*/
/* */
/* </html>*/
/* */
/* */
