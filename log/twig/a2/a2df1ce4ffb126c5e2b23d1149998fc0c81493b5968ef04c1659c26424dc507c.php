<?php

/* editUserOutinfo.html */
class __TwigTemplate_862dc07cbfe7c297a09da2d25e1c4a5c03afd10ceb05c4ca10f512ad746427d7 extends Twig_Template
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
        echo "/Scripts/zepto.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/frozen.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery1.42.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery.SuperSlide.2.1.1.js\"></script>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Css/layer.css\" rel=\"stylesheet\" media=\"all\" />
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/layer.m.js\" type=\"text/javascript\"></script>
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
    <form action=\"/user/editOutUser\" id=\"LoginForm\" method=\"post\">
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">出行人姓名</label>
            <input type=\"text\" name=\"Name\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "name", array()), "html", null, true);
        echo "\" placeholder=\"姓名\" />
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">手机号码</label>
            <input type=\"text\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "mobile", array()), "html", null, true);
        echo "\" placeholder=\"手机\" name=\"Phone\" />
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">性&nbsp;&nbsp;&nbsp;别 </label>
            <select name=\"SEX\">
                <option value=\"\">--请选择--</option>
                <option value=\"0\" ";
        // line 106
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "sex", array()) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">男</option>
                <option value=\"1\" ";
        // line 107
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "sex", array()) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">女</option>
            </select>
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">年龄范围 </label>

            <select name=\"AgeArea\">
                <option value=\"\">--请选择--</option>
                <option value=\"1\" ";
        // line 115
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "AgeArea", array()) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">成人</option>
                <option value=\"0\" ";
        // line 116
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "AgeArea", array()) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">儿童</option>
            </select>
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">证件类型</label>
            <select>
                <option value=\"0\">身份证</option>
            </select>
        </div>
        <div class=\"ui-form-item ui-border-b ui-form-itemUser\">
            <label for=\"#\">证件号码</label>
            <input type=\"text\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "idNum", array()), "html", null, true);
        echo "\" placeholder=\"可不填\" name=\"idNum\" />
            <input type=\"hidden\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "uid", array()), "html", null, true);
        echo "\" name=\"uid\" />
            <input type=\"hidden\" name=\"Id\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"ui-btn-wrap\">
                <button class=\"ui-btn-lg ui-btn-danger2\" type=\"button\" onclick=\"del(";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo ")\" style=\"width: 40%; float: left; background-color: #ccc;\">删除</button>
                <button class=\"ui-btn-lg ui-btn-danger2\" type=\"button\" onclick=\"sub(";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo ")\" style=\"width: 40%;float: right\">保存</button>
        </div>
    </form>
        <script>
            var data = \"0\";
            \$(\"select[name='SEX']\").val(data);
            var date = \"1\";
            \$(\"select[name='AgeArea']\").val(date);
        </script>
    <script>
        function sub(data) {
            \$(\"input[name='uid']\").val(data);
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

        //shanchu
        function del(id) {
          layer.open({
              content: '您确定要删除这条数据吗？'
              ,btn: ['确定', '取消']
               ,anim: 'up'
              ,yes: function(index){

                layer.close(index);
                \$.ajax({
                  url:\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/delUserOut\",
                  type:\"POST\",
                  data:{
                    Id:id
                  },
                  success:function(data){
                    alert(data.msg);
                  }
                })
              },no:function(index){
                layer.close(index);
              }

            });

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
        return "editUserOutinfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 194,  227 => 133,  223 => 132,  217 => 129,  213 => 128,  209 => 127,  193 => 116,  187 => 115,  174 => 107,  168 => 106,  159 => 100,  152 => 96,  104 => 51,  95 => 45,  88 => 41,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
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
/* */
/*     <!-- <link rel="stylesheet" type="text/css" href="http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306"/> -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/demo.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ static }}/Css/main.css">*/
/*     <!-- <script src="http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304"></script>*/
/*             <script src="http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304"></script> -->*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/zepto.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/frozen.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/jquery1.42.min.js"></script>*/
/*     <script type="text/javascript" src="{{ static }}/Scripts/jquery.SuperSlide.2.1.1.js"></script>*/
/*     <link href="{{ static }}/Css/layer.css" rel="stylesheet" media="all" />*/
/*     <script src="{{ static }}/Scripts/layer.m.js" type="text/javascript"></script>*/
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
/*     <li class="nLi nLiOne"><a href="/index"><span class="cityP" style="font-size: 16px;">&nbsp;&nbsp;<img src="{{ static }}/images/tit1.png" width="30" height="30"></span></a></li>*/
/* */
/*     <li class="nLi nLiTwo">*/
/*         <h3><a href="/index/index" style="display: inline-block; width: 100%; height: 30px;">*/
/*                     <img src="{{ static }}/Images/logo.png" height="30" /></a></h3>*/
/*     </li>*/
/* */
/*     <li class="nLi nLiThree">*/
/*         <div class="topR" style="">*/
/*             <a href="/user/index">*/
/*                 <img src="{{ static }}/Images/tit2.png" width="" height="30" style="display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;"></a>*/
/*         </div>*/
/* */
/*     </li>*/
/* </ul>*/
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
/*     <form action="/user/editOutUser" id="LoginForm" method="post">*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">出行人姓名</label>*/
/*             <input type="text" name="Name" value="{{ info.name }}" placeholder="姓名" />*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">手机号码</label>*/
/*             <input type="text" value="{{ info.mobile }}" placeholder="手机" name="Phone" />*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">性&nbsp;&nbsp;&nbsp;别 </label>*/
/*             <select name="SEX">*/
/*                 <option value="">--请选择--</option>*/
/*                 <option value="0" {% if info.sex==0 %}selected="selected"{% endif %}>男</option>*/
/*                 <option value="1" {% if info.sex==1 %}selected="selected"{% endif %}>女</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">年龄范围 </label>*/
/* */
/*             <select name="AgeArea">*/
/*                 <option value="">--请选择--</option>*/
/*                 <option value="1" {% if info.AgeArea==0 %}selected="selected"{% endif %}>成人</option>*/
/*                 <option value="0" {% if info.AgeArea==0 %}selected="selected"{% endif %}>儿童</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">证件类型</label>*/
/*             <select>*/
/*                 <option value="0">身份证</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="ui-form-item ui-border-b ui-form-itemUser">*/
/*             <label for="#">证件号码</label>*/
/*             <input type="text" value="{{ info.idNum }}" placeholder="可不填" name="idNum" />*/
/*             <input type="hidden" value="{{ info.uid }}" name="uid" />*/
/*             <input type="hidden" name="Id" value="{{ info.id }}">*/
/*         </div>*/
/*         <div class="ui-btn-wrap">*/
/*                 <button class="ui-btn-lg ui-btn-danger2" type="button" onclick="del({{ info.id }})" style="width: 40%; float: left; background-color: #ccc;">删除</button>*/
/*                 <button class="ui-btn-lg ui-btn-danger2" type="button" onclick="sub({{ info.id }})" style="width: 40%;float: right">保存</button>*/
/*         </div>*/
/*     </form>*/
/*         <script>*/
/*             var data = "0";*/
/*             $("select[name='SEX']").val(data);*/
/*             var date = "1";*/
/*             $("select[name='AgeArea']").val(date);*/
/*         </script>*/
/*     <script>*/
/*         function sub(data) {*/
/*             $("input[name='uid']").val(data);*/
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
/*         //shanchu*/
/*         function del(id) {*/
/*           layer.open({*/
/*               content: '您确定要删除这条数据吗？'*/
/*               ,btn: ['确定', '取消']*/
/*                ,anim: 'up'*/
/*               ,yes: function(index){*/
/* */
/*                 layer.close(index);*/
/*                 $.ajax({*/
/*                   url:"{{ APP }}/user/delUserOut",*/
/*                   type:"POST",*/
/*                   data:{*/
/*                     Id:id*/
/*                   },*/
/*                   success:function(data){*/
/*                     alert(data.msg);*/
/*                   }*/
/*                 })*/
/*               },no:function(index){*/
/*                 layer.close(index);*/
/*               }*/
/* */
/*             });*/
/* */
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
