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
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/qdetail?id=500\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201608300438485177.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥98.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">善咖行动 l 体会匠心，制作梳篦，我要送给老师一份“特殊”的...</p>
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
                                        <label>手工DIY</label>
                                        <label>5岁以上</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:56 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/qdetail?id=491\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201608080614004472.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥108.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">菲趣科学实验室第二季</p>
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
                                        <label>科学</label>
                                        <label>常州</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:62 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/detail?id=161\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201601051143566440.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥80.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">化身小小园艺师，创造属于自己的微观世界</p>
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
                                        <label>DIY手工</label>
                                        <label>新北区</label>
                                        <label>4岁以上</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:107 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/jdetail?id=102\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201609020532003857.gif) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥115.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">中华恐龙园</p>
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
                                        <label>门票</label>
                                        <label>常州市</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:445 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/jdetail?id=483\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 499
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201608010625351440.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥39.90起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">风靡新西兰的原创爆笑打击秀《疯狂恐龙人》震撼来袭！</p>
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
                                        <label>门票</label>
                                        <label>新北区</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:43 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/detail?id=328\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 577
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201605061218475676.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥198.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">追寻孩子的航空梦想，战斗机、直升机、航模飞机、南京博物馆</p>
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
                                        <label>运动户外</label>
                                        <label>南京市</label>
                                        <label>6岁以上</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:56 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/jdetail?id=191\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 656
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201608300409163400.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥36.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">《我的天使妈妈》让宝贝懂妈妈的爱，听妈妈的话~</p>
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
                                        <label>儿童剧</label>
                                        <label>常州市</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:648 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/qdetail?id=423\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 734
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201606200128553458.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥258.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">拥抱海洋，与鱼共眠！快来夜宿金鹰海洋世界，争当海洋小卫士！</p>
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
                                        <label>夜宿</label>
                                        <label>市区</label>
                                        <label>6岁以上</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:112 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/detail?id=409\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 813
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201606071107469314.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥58.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">“麦麦体验营”，巡视厨房、做汉堡、迎宾送甜筒，麦当劳请你来当家</p>
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
                                        <label>DIY</label>
                                        <label>市区</label>
                                        <label>5岁以上</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:150 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/qdetail?id=197\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 892
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/201603070311141332.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥98.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">【新北必胜客专用】享受在必胜客的快乐时光</p>
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
                                        <label>DIY</label>
                                        <label>新北区</label>
                                        <label>4周岁以上</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:254 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class=\"ul_wrap\">
                    <ul class=\"ui-grid-halve ui-grid-halve2\">
                        <a href=\"/order/qdetail?id=287\">
                            <li>
                                <div class=\"ui-grid-halve-img\">
                                    <span style=\"background: url(";
        // line 971
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/Images/20160418091732875.jpg) top  center no-repeat; background-size: 100% 100%;\">
                                        <label class=\"money_img\" style=\"display: block; bottom: 18px; width: auto;\">￥108.00起</label>


                                    </span>
                                </div>
                                <p style=\"padding: 5px 0px 5px 0px;\">期待已久，不负童年 l 跟科学大咖一起实验、一起疯狂</p>
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
                                        <label>科学探索</label>
                                        <label>新北区</label>
                                        <label>7岁以上</label>



                                </div>

                                <div class=\"ui-grid-halve-info\">
                                    <span class=\"sp1\">
                                        <label style=\"display: inline-block; line-height: 33px; font-size: 14px;\">累计报名人数:233 人</label>
                                    </span>
                                    
                                </div>
                                <p>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>


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
        return array (  1090 => 971,  1008 => 892,  926 => 813,  844 => 734,  763 => 656,  681 => 577,  600 => 499,  519 => 421,  437 => 342,  356 => 264,  275 => 186,  224 => 138,  220 => 137,  216 => 136,  212 => 135,  208 => 134,  173 => 102,  145 => 77,  113 => 48,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
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
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/qdetail?id=500">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201608300438485177.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥98.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">善咖行动 l 体会匠心，制作梳篦，我要送给老师一份“特殊”的...</p>*/
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
/*                                         <label>手工DIY</label>*/
/*                                         <label>5岁以上</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:56 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/qdetail?id=491">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201608080614004472.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥108.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">菲趣科学实验室第二季</p>*/
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
/*                                         <label>科学</label>*/
/*                                         <label>常州</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:62 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/detail?id=161">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201601051143566440.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥80.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">化身小小园艺师，创造属于自己的微观世界</p>*/
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
/*                                         <label>DIY手工</label>*/
/*                                         <label>新北区</label>*/
/*                                         <label>4岁以上</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:107 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/jdetail?id=102">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201609020532003857.gif) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥115.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">中华恐龙园</p>*/
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
/*                                         <label>门票</label>*/
/*                                         <label>常州市</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:445 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/jdetail?id=483">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201608010625351440.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥39.90起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">风靡新西兰的原创爆笑打击秀《疯狂恐龙人》震撼来袭！</p>*/
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
/*                                         <label>门票</label>*/
/*                                         <label>新北区</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:43 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/detail?id=328">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201605061218475676.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥198.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">追寻孩子的航空梦想，战斗机、直升机、航模飞机、南京博物馆</p>*/
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
/*                                         <label>运动户外</label>*/
/*                                         <label>南京市</label>*/
/*                                         <label>6岁以上</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:56 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/jdetail?id=191">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201608300409163400.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥36.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">《我的天使妈妈》让宝贝懂妈妈的爱，听妈妈的话~</p>*/
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
/*                                         <label>儿童剧</label>*/
/*                                         <label>常州市</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:648 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/qdetail?id=423">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201606200128553458.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥258.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">拥抱海洋，与鱼共眠！快来夜宿金鹰海洋世界，争当海洋小卫士！</p>*/
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
/*                                         <label>夜宿</label>*/
/*                                         <label>市区</label>*/
/*                                         <label>6岁以上</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:112 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/detail?id=409">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201606071107469314.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥58.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">“麦麦体验营”，巡视厨房、做汉堡、迎宾送甜筒，麦当劳请你来当家</p>*/
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
/*                                         <label>DIY</label>*/
/*                                         <label>市区</label>*/
/*                                         <label>5岁以上</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:150 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/qdetail?id=197">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/201603070311141332.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥98.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">【新北必胜客专用】享受在必胜客的快乐时光</p>*/
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
/*                                         <label>DIY</label>*/
/*                                         <label>新北区</label>*/
/*                                         <label>4周岁以上</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:254 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="ul_wrap">*/
/*                     <ul class="ui-grid-halve ui-grid-halve2">*/
/*                         <a href="/order/qdetail?id=287">*/
/*                             <li>*/
/*                                 <div class="ui-grid-halve-img">*/
/*                                     <span style="background: url({{ static  }}/Images/20160418091732875.jpg) top  center no-repeat; background-size: 100% 100%;">*/
/*                                         <label class="money_img" style="display: block; bottom: 18px; width: auto;">￥108.00起</label>*/
/* */
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <p style="padding: 5px 0px 5px 0px;">期待已久，不负童年 l 跟科学大咖一起实验、一起疯狂</p>*/
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
/*                                         <label>科学探索</label>*/
/*                                         <label>新北区</label>*/
/*                                         <label>7岁以上</label>*/
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="ui-grid-halve-info">*/
/*                                     <span class="sp1">*/
/*                                         <label style="display: inline-block; line-height: 33px; font-size: 14px;">累计报名人数:233 人</label>*/
/*                                     </span>*/
/*                                     */
/*                                 </div>*/
/*                                 <p>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </a>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/* */
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
