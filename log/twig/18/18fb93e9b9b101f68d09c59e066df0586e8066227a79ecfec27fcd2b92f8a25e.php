<?php

/* order.html */
class __TwigTemplate_f829504fca30a0490b73d3d346034e9fe319d112710e77cc70ce21f045293173 extends Twig_Template
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
<head>
<title></title>

<meta http-equiv=\"description\" content=\"\" />
<meta http-equiv=\"keywords\" content=\"\" />
<meta name=\"author\" content=\"slade\">
<meta name=\"copyright\" content=\"slade\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<meta name=\"format-detection\" content=\"telephone=no\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306\"/>
-->
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
<!-- <script src=\"http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304\"></script>
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
<script src=\"http://libs.baidu.com/jquery/1.9.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Scripts/jquery.SuperSlide.2.1.1.js\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/layer/layer.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/laydate/laydate.js\" type=\"text/javascript\"></script>
</head>

<script>
    function alert(data) {

        layer.open({
            content: data,
            style: 'background-color:#06c1bf; color:#fff; border:none;text-align: center;',
            time: 2
        });
    }
\tlaydate.skin('molv');
\tfunction setUserOut(){
\t\tlayer.alert('内容', {
\t\t\ticon: 1,
\t\t\tskin: 'layer-ext-moon' 
\t\t})
\t\t//询问框
\t\tlayer.confirm('您是如何看待前端开发？', {
\t\t\t btn: ['重要','奇葩'] //按钮
\t\t}, function(){
\t\t\tlayer.msg('的确很重要', {icon: 1});
\t\t}, function(){
\t\t\tlayer.msg('也可以这样', {
\t\t\ttime: 20000, //20s后自动关闭
\t\t\tbtn: ['明白了', '知道了']
\t\t});
\t\t});
\t}
</script>
<style type=\"text/css\">
    .ui-form-item select
    {
        width: 85%;
        margin-left: 95px;
        -webkit-box-sizing: border-box;
        text-align: left;
    }

    .list_page_1 li label.zs
    {
        width: 95px;
        position: absolute;
        text-align: left;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #666;
    }

    .list_page_1 li select
    {
        width: 100%;
        padding-left: 95px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .list_page_1 li input.zs2
    {
        width: 100%;
        padding-left: 95px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
</style>

<body>
<div id=\"onediv\" style=\"margin-left: auto; margin-right: auto\">
<ul id=\"nav\" class=\"nav clearfix\">

\t<li class=\"nLi nLiOne\">
\t\t<a href=\"/index\">
\t\t\t<span class=\"cityP\" style=\"font-size: 16px;\">
\t\t\t\t&nbsp;&nbsp;
\t\t\t\t<img src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/images/tit1.png\" width=\"30\" height=\"30\"></span>
\t\t</a>
\t</li>

\t<li class=\"nLi nLiTwo\">
\t\t<h3>
\t\t\t<a href=\"/index/index\" style=\"display: inline-block; width: 100%; height: 30px;\">
\t\t\t\t<img src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/logo.png\" height=\"30\" />
\t\t\t</a>
\t\t</h3>
\t</li>

\t<li class=\"nLi nLiThree\">
\t\t<div class=\"topR\" style=\"\">
\t\t\t<a href=\"/user/index\">
\t\t\t\t<img src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/tit2.png\" width=\"\" height=\"30\" style=\"display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;\"></a>
\t\t</div>

\t</li>
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
\t<div class=\"pay_tit\">
\t\t<h4>5000张灯光节门票1元抢购！</h4>
\t\t<p>报名时间：09-12 至 10-07</p>
\t</div>
\t<!--/pay_tit-->

\t<dl class=\"list_1 list_2\">
\t\t<dt class=\"t_4\"></dt>
\t\t<dd>
\t\t\t<ul class=\"list_page_1 list_page_2\">
\t\t\t\t<li style=\"background: none; padding-left: 15px !important;\">
\t\t\t\t\t<span class=\"moeny\">选择时间</span>
\t\t\t\t</li>
\t\t\t\t<li style=\"background: #fff; padding-left: 15px !important; height: auto;\">

\t\t\t\t\t<div class=\"aaa\" style=\"text-align: center\">
\t\t\t\t\t\t<input type=\"text\"  value=\"2016-09-13\" name=\"Time\" onclick=\"laydate({ele:this,format: 'YYYY-MM-DD'});\" id=\"indate\" />

\t\t\t\t\t</div>
\t\t\t\t\t<script>
                                    //// js日期比较(yyyy-mm-dd)
                                    //function duibi(a, b) {
                                    //    var arr = a.split(\"-\");
                                    //    var starttime = new Date(arr[0], arr[1], arr[2]);
                                    //    var starttimes = starttime.getTime();

                                    //    var arrs = b.split(\"-\");
                                    //    var lktime = new Date(arrs[0], arrs[1], arrs[2]);
                                    //    var lktimes = lktime.getTime();

                                    //    if (starttimes >= lktimes) {
                                    //        return true;
                                    //    }
                                    //    else
                              
                                    //        return false;
                                    //}

                                    //function mindate() {
                               
                                    //}
                                </script>

\t\t\t\t\t<script>
                                //处理选中的效果及传值的name
                                //第一个选中 及存在name
                                //  \$(\".timeDiv\").first().addClass(\"on\");
                                // \$(\".time\").first().attr(\"name\", \"Time\");
                                \$(\".timeDiv\").click(function () {
                                    //判断是否存在名额
                                    var data = \$(this).children(\".inp\").val();
                                    // alert(data);
                                    if (data > 0) {
                                        \$(\".timeDiv\").removeClass(\"on\");
                                        \$(\".time\").attr(\"name\", \"\");
                                        \$(\".timeid\").attr(\"name\", \"\");
                                        \$(this).addClass(\"on\");
                                        \$(this).children(\".time\").attr(\"name\", \"Time\"); 
                                        \$(this).children(\".timeid\").attr(\"name\", \"timeid\"); 
                                    } else {
                                        alert(\"名额已满！\");
                                    }
                                });
                            </script>
\t\t\t\t</li>
\t\t\t\t<li style=\"background: none; padding-left: 15px !important;\">
\t\t\t\t\t<span class=\"moeny\">选择数量：</span>
\t\t\t\t</li>

\t\t\t\t<li style=\"background: #fff; height: 60px;\">
\t\t\t\t\t<span class=\"peopelNum\">
\t\t\t\t\t\t<span style=\"padding: 0px; color: #fdba55; font-size: 16px;\">
\t\t\t\t\t\t\t1元秒杀
\t\t\t\t\t\t\t<br></span>
\t\t\t\t\t\t<span style=\"text-align: center; display: block; margin-left: auto; margin-right: auto; width: 230px;\">
\t\t\t\t\t\t\t票数：
\t\t\t\t\t\t\t<label class=\"add\" onclick=\"jia(2)\" style=\"margin-right: 20px; background: #06c1bf; color: #fff; text-align: center; font-size: 20px;\">+</label>
\t\t\t\t\t\t\t<input type=\"text\" value=\"0\" name=\"CManNum\" />
\t\t\t\t\t\t\t<label class=\"reduce\" onclick=\"jian(2)\" style=\"background: #d5d5d5; color: #fff; text-align: center; font-weight: bold; font-size: 20px;\">-</label>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t</li>

\t\t\t\t<script>
                            function jia(i) {
                                var data = 0;
                                if (i == 1) {
                                    data = \$(\"input[name='RManNum']\").val();
                                    var a = parseInt(data) + 1;
                                    \$(\"input[name='RManNum']\").val(a);

                                } else if (i == 2) {
                                    data = \$(\"input[name='CManNum']\").val();
                                    var a = parseInt(data) + 1;
                                    \$(\"input[name='CManNum']\").val(a);
                                }
                                Price();
                                //  alert(data);
                            }

                            function jian(i) {
                                var data = 0;
                                if (i == 1) {
                                    data = \$(\"input[name='RManNum']\").val();
                                    var a = parseInt(data) - 1;
                                    //  alert(a);
                                    if (a < 0) {
                                        a = 0;
                                    }
                                    \$(\"input[name='RManNum']\").val(a);
                                    Price()
                                } else if (i == 2) {
                                    data = \$(\"input[name='CManNum']\").val();
                                    var a = parseInt(data) - 1;
                                    if (a < 0) {
                                        a = 0;
                                    }
                                    \$(\"input[name='CManNum']\").val(a);
                                }
                                Price();
                            }
                        </script>

\t\t\t\t<li style=\"background: none; padding-left: 15px !important; height: 25px; line-height: 25px; overflow: hidden;\">
\t\t\t\t\t<span class=\"moeny\" style=\"float: left;\">出行人信息</span>
\t\t\t\t\t<a href=\"javascript:;\" onclick=\"setUserOut()\" style=\"display: block; width: 60px; height: 25px; line-height: 25px; float: right;  font-family: '微软雅黑'; font-size: 16px; color: #06c1bf;\">
\t\t\t\t\t\t添加
\t\t\t\t\t\t<img src=\"";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/add.png\" style=\"display: inline-block; width: 25px; height: 25px; float: right; vertical-align: middle;\" />
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li style=\"background: #fff; padding-left: 15px !important; height: auto;\">
\t\t\t\t\t<label class=\"zs\">姓名</label>
\t\t\t\t\t<select id=\"SEl\" onchange=\"Change()\">
\t\t\t\t\t\t<option value=\"\">暂无数据，请添加</option>

\t\t\t\t\t</select>
\t\t\t\t</li>
\t\t\t\t<li style=\"background: #fff; padding-left: 15px !important; height: auto; display: none\">
\t\t\t\t\t<label class=\"zs\">姓名</label>
\t\t\t\t\t<input class=\"zs2\" type=\"hidd\" name=\"Name\" placeholder=\"姓名\" value=\"\"></li>
\t\t\t\t<li style=\"background: #fff; padding-left: 15px !important; height: auto;\">
\t\t\t\t\t<label class=\"zs\">联系方式</label>
\t\t\t\t\t<input class=\"zs2\" type=\"text\" name=\"Phone\" placeholder=\"联系方式\"  value=\"\"></li>
\t\t\t\t<input type=\"hidden\" name=\"Caid\" value=\"\" />

\t\t\t\t<li style=\"background: #fff; padding-left: 15px !important; height: auto;\">
\t\t\t\t\t<label class=\"zs\">备注</label>
\t\t\t\t\t<input class=\"zs2\" type=\"text\" name=\"Text\" placeholder=\"备注\"></li>
\t\t\t\t<li style=\"background: none; padding-left: 15px !important;\">
\t\t\t\t\t<span class=\"moeny\">总价：</span>
\t\t\t\t</li>
\t\t\t\t<li style=\"background: #fff; padding-left: 15px !important;\">
\t\t\t\t\t<label id=\"in\" style=\"text-align: left; font-size: 20px; font-weight: bold;\">￥0</label>
\t\t\t\t</li>
\t\t\t\t<script>
                            function Change() {
                                // alert(\"ss\");
                                var name =  \$(\"#SEl option:selected\").val();
                           
                                var phone =\$(\"#SEl option:selected\").attr(\"data1\");
                                //alert(phone);  
                                var caid = \$(\"#SEl option:selected\").attr(\"deta2\");
                         
                                // alert(phone);
                                //alert(caid);
                                \$(\"input[name='Name']\").val(name);
                                \$(\"input[name='Phone']\").val(phone);
                                \$(\"input[name='Caid']\").val(caid);
                            };

                        </script>
\t\t\t</ul>
\t\t</dd>
\t</dl>
\t<script>
                function Price() {
                    //变动的价钱（数量的增减时变化）

                    var c = \$(\"input[name='CManNum']\").val();
                    var zc = 1.00 * parseFloat(c);
                    var z =  zc.toFixed(2);;
                    \$(\"#in\").html(\"￥\"+z);

                }

            </script>

\t<div class=\" ui-btn-group-bottom \" style=\"width: 100%;\">
\t\t<div class=\"postBt\">
\t\t\t<a href=\"javascript:sub()\" id=\"qychu\">下一步</a>
\t\t</div>
\t</div>
\t<!--/postBt-->
\t<script>
                function sub() {
                    var data = \$(\"input[name='Time']\").val();
                    // alert(data);
                    var now = \"2016-09-12\";
                    //  alert(now);
                    var old = \"2016-10-07\";
                    //alert(old);
                    var istrue = \"False\";
                    //alert(data);
                    // alert(Date.parse(now));
                    if (Date.parse(data) >= Date.parse(now) && Date.parse(data) <= Date.parse(old)) {
                        //alert(\"请选择正确的时间\");
                        var time = \$(\"input[name='Time']\").val();
                        //alert(time);
                        var c = \$(\"input[name='CManNum']\").val();
                        var name = \$(\"input[name='Name']\").val();
                        var phone = \$(\"input[name='Phone']\").val();
                        var text = \$(\"input[name='Text']\").val();
                        var caid = \$(\"input[name='Caid']\").val();
                        var timeid= \$(\"input[name='timeid']\").val();
                        var str = phone;
                        var n = Number(str);
                        //alert(name);
                        if (time == \" \" || time == null) {
                            alert(\"请选择时间段\");
                        } else if (c == 0) {
                            alert(\"没有数量哦！再想想\");
                        } else if (name == \"\" || name == null) {
                            alert(\"请输入姓名\");
                        } else if (phone == \" \" || phone == null) {
                            alert(\"请输入联系方式\");
                        } else if (phone.length != 11) {
                            alert(\"手机号码长度不符\");
                        } else if (isNaN(n)) {
                            alert(\"手机号码为数字\");
                        } else if (istrue ==\"True\") {
                            if (caid == \"\" || caid == null) {
                                alert(\"身份证号码不能为空\");
                            } else if (caid.length != 18) {
                                alert(\"身份证号码长度不符\");
                            }  else {
                                window.location.href = \"/order/JuOrderAdd?gid=519&cid=485&num=\" + c + \"&name=\" + name + \"&phone=\" + phone + \"&caid=\" + caid + \"&Time=\" + time + \"&text=\" + text+\"&timeid=\"+timeid;
                                layer.open({
                                    type: 2,
                                    content: '订单生成中..'
                                });
                                \$(\"#qychu\").attr(\"href\", \"javascript:void(0)\");
                                setTimeout(function() {
                                    \$(\"#qychu\").attr(\"href\", \"javascript:sub()\");
                                }, 3000);
                            }
                    }  else if(istrue ==\"False\"){
                        window.location.href = \"/order/JuOrderAdd?gid=519&cid=485&num=\" + c + \"&name=\" + name + \"&phone=\" + phone + \"&caid=\" + caid + \"&Time=\" + time + \"&text=\" + text+\"&timeid=\"+timeid;
                        layer.open({
                            type: 2,
                            content: '订单生成中..'
                        });
                        \$(\"#qychu\").attr(\"href\", \"javascript:void(0)\");
                        setTimeout(function() {
                            \$(\"#qychu\").attr(\"href\", \"javascript:sub()\");
                        }, 3000);

                    }

} else {
                        // alert(\"所选时间不能为过去\");
    alert(\"不在报名时间内\");
    \$(\"#indate\").val(\"2016-09-12\");
}
                    
         
}


            </script></div>
<!--/content-->
</div>
</body>
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
        return "order.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 263,  167 => 117,  156 => 109,  146 => 102,  68 => 27,  64 => 26,  60 => 25,  55 => 23,  51 => 22,  44 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <head>*/
/* <title></title>*/
/* */
/* <meta http-equiv="description" content="" />*/
/* <meta http-equiv="keywords" content="" />*/
/* <meta name="author" content="slade">*/
/* <meta name="copyright" content="slade">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/* <meta name="format-detection" content="telephone=no">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">*/
/* <meta name="apple-mobile-web-app-capable" content="yes">*/
/* <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/* <!-- <link rel="stylesheet" type="text/css" href="http://i.gtimg.cn/vipstyle/frozenui/1.2.1/css/global.css?_bid=306"/>*/
/* -->*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/Css/global.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/Css/demo.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/Css/main.css">*/
/* <!-- <script src="http://i.gtimg.cn/vipstyle/frozenjs/lib/zepto.min.js?_bid=304"></script>*/
/* <script src="http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304"></script>*/
/* -->*/
/* <script type="text/javascript" src="{{ static }}/Scripts/zepto.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/Scripts/frozen.js"></script>*/
/* <script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/Scripts/jquery.SuperSlide.2.1.1.js"></script>*/
/* <script src="{{ static }}/layer/layer.js" type="text/javascript"></script>*/
/* <script src="{{ static }}/laydate/laydate.js" type="text/javascript"></script>*/
/* </head>*/
/* */
/* <script>*/
/*     function alert(data) {*/
/* */
/*         layer.open({*/
/*             content: data,*/
/*             style: 'background-color:#06c1bf; color:#fff; border:none;text-align: center;',*/
/*             time: 2*/
/*         });*/
/*     }*/
/* 	laydate.skin('molv');*/
/* 	function setUserOut(){*/
/* 		layer.alert('内容', {*/
/* 			icon: 1,*/
/* 			skin: 'layer-ext-moon' */
/* 		})*/
/* 		//询问框*/
/* 		layer.confirm('您是如何看待前端开发？', {*/
/* 			 btn: ['重要','奇葩'] //按钮*/
/* 		}, function(){*/
/* 			layer.msg('的确很重要', {icon: 1});*/
/* 		}, function(){*/
/* 			layer.msg('也可以这样', {*/
/* 			time: 20000, //20s后自动关闭*/
/* 			btn: ['明白了', '知道了']*/
/* 		});*/
/* 		});*/
/* 	}*/
/* </script>*/
/* <style type="text/css">*/
/*     .ui-form-item select*/
/*     {*/
/*         width: 85%;*/
/*         margin-left: 95px;*/
/*         -webkit-box-sizing: border-box;*/
/*         text-align: left;*/
/*     }*/
/* */
/*     .list_page_1 li label.zs*/
/*     {*/
/*         width: 95px;*/
/*         position: absolute;*/
/*         text-align: left;*/
/*         -webkit-box-sizing: border-box;*/
/*         box-sizing: border-box;*/
/*         color: #666;*/
/*     }*/
/* */
/*     .list_page_1 li select*/
/*     {*/
/*         width: 100%;*/
/*         padding-left: 95px;*/
/*         -webkit-box-sizing: border-box;*/
/*         box-sizing: border-box;*/
/*     }*/
/* */
/*     .list_page_1 li input.zs2*/
/*     {*/
/*         width: 100%;*/
/*         padding-left: 95px;*/
/*         -webkit-box-sizing: border-box;*/
/*         box-sizing: border-box;*/
/*     }*/
/* </style>*/
/* */
/* <body>*/
/* <div id="onediv" style="margin-left: auto; margin-right: auto">*/
/* <ul id="nav" class="nav clearfix">*/
/* */
/* 	<li class="nLi nLiOne">*/
/* 		<a href="/index">*/
/* 			<span class="cityP" style="font-size: 16px;">*/
/* 				&nbsp;&nbsp;*/
/* 				<img src="{{ static }}/images/tit1.png" width="30" height="30"></span>*/
/* 		</a>*/
/* 	</li>*/
/* */
/* 	<li class="nLi nLiTwo">*/
/* 		<h3>*/
/* 			<a href="/index/index" style="display: inline-block; width: 100%; height: 30px;">*/
/* 				<img src="{{ static }}/Images/logo.png" height="30" />*/
/* 			</a>*/
/* 		</h3>*/
/* 	</li>*/
/* */
/* 	<li class="nLi nLiThree">*/
/* 		<div class="topR" style="">*/
/* 			<a href="/user/index">*/
/* 				<img src="{{ static }}/Images/tit2.png" width="" height="30" style="display: -webkit-box; -webkit-box-flex: 0.5; -webkit-box-align: center; -webkit-box-pack: center; -webkit-box-orient: vertical; text-align: center; margin-left: auto; margin-right: auto;"></a>*/
/* 		</div>*/
/* */
/* 	</li>*/
/* </ul>*/
/* <script id="jsID" type="text/javascript">*/
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
/* <div class="content">*/
/* 	<div class="pay_tit">*/
/* 		<h4>5000张灯光节门票1元抢购！</h4>*/
/* 		<p>报名时间：09-12 至 10-07</p>*/
/* 	</div>*/
/* 	<!--/pay_tit-->*/
/* */
/* 	<dl class="list_1 list_2">*/
/* 		<dt class="t_4"></dt>*/
/* 		<dd>*/
/* 			<ul class="list_page_1 list_page_2">*/
/* 				<li style="background: none; padding-left: 15px !important;">*/
/* 					<span class="moeny">选择时间</span>*/
/* 				</li>*/
/* 				<li style="background: #fff; padding-left: 15px !important; height: auto;">*/
/* */
/* 					<div class="aaa" style="text-align: center">*/
/* 						<input type="text"  value="2016-09-13" name="Time" onclick="laydate({ele:this,format: 'YYYY-MM-DD'});" id="indate" />*/
/* */
/* 					</div>*/
/* 					<script>*/
/*                                     //// js日期比较(yyyy-mm-dd)*/
/*                                     //function duibi(a, b) {*/
/*                                     //    var arr = a.split("-");*/
/*                                     //    var starttime = new Date(arr[0], arr[1], arr[2]);*/
/*                                     //    var starttimes = starttime.getTime();*/
/* */
/*                                     //    var arrs = b.split("-");*/
/*                                     //    var lktime = new Date(arrs[0], arrs[1], arrs[2]);*/
/*                                     //    var lktimes = lktime.getTime();*/
/* */
/*                                     //    if (starttimes >= lktimes) {*/
/*                                     //        return true;*/
/*                                     //    }*/
/*                                     //    else*/
/*                               */
/*                                     //        return false;*/
/*                                     //}*/
/* */
/*                                     //function mindate() {*/
/*                                */
/*                                     //}*/
/*                                 </script>*/
/* */
/* 					<script>*/
/*                                 //处理选中的效果及传值的name*/
/*                                 //第一个选中 及存在name*/
/*                                 //  $(".timeDiv").first().addClass("on");*/
/*                                 // $(".time").first().attr("name", "Time");*/
/*                                 $(".timeDiv").click(function () {*/
/*                                     //判断是否存在名额*/
/*                                     var data = $(this).children(".inp").val();*/
/*                                     // alert(data);*/
/*                                     if (data > 0) {*/
/*                                         $(".timeDiv").removeClass("on");*/
/*                                         $(".time").attr("name", "");*/
/*                                         $(".timeid").attr("name", "");*/
/*                                         $(this).addClass("on");*/
/*                                         $(this).children(".time").attr("name", "Time"); */
/*                                         $(this).children(".timeid").attr("name", "timeid"); */
/*                                     } else {*/
/*                                         alert("名额已满！");*/
/*                                     }*/
/*                                 });*/
/*                             </script>*/
/* 				</li>*/
/* 				<li style="background: none; padding-left: 15px !important;">*/
/* 					<span class="moeny">选择数量：</span>*/
/* 				</li>*/
/* */
/* 				<li style="background: #fff; height: 60px;">*/
/* 					<span class="peopelNum">*/
/* 						<span style="padding: 0px; color: #fdba55; font-size: 16px;">*/
/* 							1元秒杀*/
/* 							<br></span>*/
/* 						<span style="text-align: center; display: block; margin-left: auto; margin-right: auto; width: 230px;">*/
/* 							票数：*/
/* 							<label class="add" onclick="jia(2)" style="margin-right: 20px; background: #06c1bf; color: #fff; text-align: center; font-size: 20px;">+</label>*/
/* 							<input type="text" value="0" name="CManNum" />*/
/* 							<label class="reduce" onclick="jian(2)" style="background: #d5d5d5; color: #fff; text-align: center; font-weight: bold; font-size: 20px;">-</label>*/
/* 						</span>*/
/* 					</span>*/
/* 				</li>*/
/* */
/* 				<script>*/
/*                             function jia(i) {*/
/*                                 var data = 0;*/
/*                                 if (i == 1) {*/
/*                                     data = $("input[name='RManNum']").val();*/
/*                                     var a = parseInt(data) + 1;*/
/*                                     $("input[name='RManNum']").val(a);*/
/* */
/*                                 } else if (i == 2) {*/
/*                                     data = $("input[name='CManNum']").val();*/
/*                                     var a = parseInt(data) + 1;*/
/*                                     $("input[name='CManNum']").val(a);*/
/*                                 }*/
/*                                 Price();*/
/*                                 //  alert(data);*/
/*                             }*/
/* */
/*                             function jian(i) {*/
/*                                 var data = 0;*/
/*                                 if (i == 1) {*/
/*                                     data = $("input[name='RManNum']").val();*/
/*                                     var a = parseInt(data) - 1;*/
/*                                     //  alert(a);*/
/*                                     if (a < 0) {*/
/*                                         a = 0;*/
/*                                     }*/
/*                                     $("input[name='RManNum']").val(a);*/
/*                                     Price()*/
/*                                 } else if (i == 2) {*/
/*                                     data = $("input[name='CManNum']").val();*/
/*                                     var a = parseInt(data) - 1;*/
/*                                     if (a < 0) {*/
/*                                         a = 0;*/
/*                                     }*/
/*                                     $("input[name='CManNum']").val(a);*/
/*                                 }*/
/*                                 Price();*/
/*                             }*/
/*                         </script>*/
/* */
/* 				<li style="background: none; padding-left: 15px !important; height: 25px; line-height: 25px; overflow: hidden;">*/
/* 					<span class="moeny" style="float: left;">出行人信息</span>*/
/* 					<a href="javascript:;" onclick="setUserOut()" style="display: block; width: 60px; height: 25px; line-height: 25px; float: right;  font-family: '微软雅黑'; font-size: 16px; color: #06c1bf;">*/
/* 						添加*/
/* 						<img src="{{ static }}/Images/add.png" style="display: inline-block; width: 25px; height: 25px; float: right; vertical-align: middle;" />*/
/* 					</a>*/
/* 				</li>*/
/* 				<li style="background: #fff; padding-left: 15px !important; height: auto;">*/
/* 					<label class="zs">姓名</label>*/
/* 					<select id="SEl" onchange="Change()">*/
/* 						<option value="">暂无数据，请添加</option>*/
/* */
/* 					</select>*/
/* 				</li>*/
/* 				<li style="background: #fff; padding-left: 15px !important; height: auto; display: none">*/
/* 					<label class="zs">姓名</label>*/
/* 					<input class="zs2" type="hidd" name="Name" placeholder="姓名" value=""></li>*/
/* 				<li style="background: #fff; padding-left: 15px !important; height: auto;">*/
/* 					<label class="zs">联系方式</label>*/
/* 					<input class="zs2" type="text" name="Phone" placeholder="联系方式"  value=""></li>*/
/* 				<input type="hidden" name="Caid" value="" />*/
/* */
/* 				<li style="background: #fff; padding-left: 15px !important; height: auto;">*/
/* 					<label class="zs">备注</label>*/
/* 					<input class="zs2" type="text" name="Text" placeholder="备注"></li>*/
/* 				<li style="background: none; padding-left: 15px !important;">*/
/* 					<span class="moeny">总价：</span>*/
/* 				</li>*/
/* 				<li style="background: #fff; padding-left: 15px !important;">*/
/* 					<label id="in" style="text-align: left; font-size: 20px; font-weight: bold;">￥0</label>*/
/* 				</li>*/
/* 				<script>*/
/*                             function Change() {*/
/*                                 // alert("ss");*/
/*                                 var name =  $("#SEl option:selected").val();*/
/*                            */
/*                                 var phone =$("#SEl option:selected").attr("data1");*/
/*                                 //alert(phone);  */
/*                                 var caid = $("#SEl option:selected").attr("deta2");*/
/*                          */
/*                                 // alert(phone);*/
/*                                 //alert(caid);*/
/*                                 $("input[name='Name']").val(name);*/
/*                                 $("input[name='Phone']").val(phone);*/
/*                                 $("input[name='Caid']").val(caid);*/
/*                             };*/
/* */
/*                         </script>*/
/* 			</ul>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<script>*/
/*                 function Price() {*/
/*                     //变动的价钱（数量的增减时变化）*/
/* */
/*                     var c = $("input[name='CManNum']").val();*/
/*                     var zc = 1.00 * parseFloat(c);*/
/*                     var z =  zc.toFixed(2);;*/
/*                     $("#in").html("￥"+z);*/
/* */
/*                 }*/
/* */
/*             </script>*/
/* */
/* 	<div class=" ui-btn-group-bottom " style="width: 100%;">*/
/* 		<div class="postBt">*/
/* 			<a href="javascript:sub()" id="qychu">下一步</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--/postBt-->*/
/* 	<script>*/
/*                 function sub() {*/
/*                     var data = $("input[name='Time']").val();*/
/*                     // alert(data);*/
/*                     var now = "2016-09-12";*/
/*                     //  alert(now);*/
/*                     var old = "2016-10-07";*/
/*                     //alert(old);*/
/*                     var istrue = "False";*/
/*                     //alert(data);*/
/*                     // alert(Date.parse(now));*/
/*                     if (Date.parse(data) >= Date.parse(now) && Date.parse(data) <= Date.parse(old)) {*/
/*                         //alert("请选择正确的时间");*/
/*                         var time = $("input[name='Time']").val();*/
/*                         //alert(time);*/
/*                         var c = $("input[name='CManNum']").val();*/
/*                         var name = $("input[name='Name']").val();*/
/*                         var phone = $("input[name='Phone']").val();*/
/*                         var text = $("input[name='Text']").val();*/
/*                         var caid = $("input[name='Caid']").val();*/
/*                         var timeid= $("input[name='timeid']").val();*/
/*                         var str = phone;*/
/*                         var n = Number(str);*/
/*                         //alert(name);*/
/*                         if (time == " " || time == null) {*/
/*                             alert("请选择时间段");*/
/*                         } else if (c == 0) {*/
/*                             alert("没有数量哦！再想想");*/
/*                         } else if (name == "" || name == null) {*/
/*                             alert("请输入姓名");*/
/*                         } else if (phone == " " || phone == null) {*/
/*                             alert("请输入联系方式");*/
/*                         } else if (phone.length != 11) {*/
/*                             alert("手机号码长度不符");*/
/*                         } else if (isNaN(n)) {*/
/*                             alert("手机号码为数字");*/
/*                         } else if (istrue =="True") {*/
/*                             if (caid == "" || caid == null) {*/
/*                                 alert("身份证号码不能为空");*/
/*                             } else if (caid.length != 18) {*/
/*                                 alert("身份证号码长度不符");*/
/*                             }  else {*/
/*                                 window.location.href = "/order/JuOrderAdd?gid=519&cid=485&num=" + c + "&name=" + name + "&phone=" + phone + "&caid=" + caid + "&Time=" + time + "&text=" + text+"&timeid="+timeid;*/
/*                                 layer.open({*/
/*                                     type: 2,*/
/*                                     content: '订单生成中..'*/
/*                                 });*/
/*                                 $("#qychu").attr("href", "javascript:void(0)");*/
/*                                 setTimeout(function() {*/
/*                                     $("#qychu").attr("href", "javascript:sub()");*/
/*                                 }, 3000);*/
/*                             }*/
/*                     }  else if(istrue =="False"){*/
/*                         window.location.href = "/order/JuOrderAdd?gid=519&cid=485&num=" + c + "&name=" + name + "&phone=" + phone + "&caid=" + caid + "&Time=" + time + "&text=" + text+"&timeid="+timeid;*/
/*                         layer.open({*/
/*                             type: 2,*/
/*                             content: '订单生成中..'*/
/*                         });*/
/*                         $("#qychu").attr("href", "javascript:void(0)");*/
/*                         setTimeout(function() {*/
/*                             $("#qychu").attr("href", "javascript:sub()");*/
/*                         }, 3000);*/
/* */
/*                     }*/
/* */
/* } else {*/
/*                         // alert("所选时间不能为过去");*/
/*     alert("不在报名时间内");*/
/*     $("#indate").val("2016-09-12");*/
/* }*/
/*                     */
/*          */
/* }*/
/* */
/* */
/*             </script></div>*/
/* <!--/content-->*/
/* </div>*/
/* </body>*/
/* <script>*/
/*     var aa = navigator.platform;*/
/*     // alert(aa);*/
/*     if (aa.indexOf('Win') != -1) {*/
/*         $("#onediv").css("width", "640px");*/
/*         $(".ui-btn-group-bottom").css("position", "relative");*/
/*     }*/
/* </script>*/
/* */
/* </html>*/
/* */
