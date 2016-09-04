<?php

/* layout.html */
class __TwigTemplate_588249f229ac95bb3275d93644940e195e2c249574c28daef7457e3cf86eb90b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<title>后台管理系统</title>
<meta name=\"author\" content=\"DeathGhost\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/css/style.css\" />
<!--[if lt IE 9]>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/html5.js\"></script>
<![endif]-->
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/laydate/laydate.js\"></script>
<script>
\t(function(\$){
\t\t\$(window).load(function(){
\t\t\t 
       //初始化日期选择插件
       laydate.skin('huanglv')

\t\t\t\$(\"a[rel='load-content']\").click(function(e){
\t\t\t\te.preventDefault();
\t\t\t\tvar url=\$(this).attr(\"href\");
\t\t\t\t\$.get(url,function(data){
\t\t\t\t\t\$(\".content .mCSB_container\").append(data); //load new content inside .mCSB_container
\t\t\t\t\t//scroll-to appended content 
\t\t\t\t\t\$(\".content\").mCustomScrollbar(\"scrollTo\",\"h2:last\");
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t\t\$(\".content\").delegate(\"a[href='top']\",\"click\",function(e){
\t\t\t\te.preventDefault();
\t\t\t\t\$(\".content\").mCustomScrollbar(\"scrollTo\",\$(this).attr(\"href\"));
\t\t\t});
\t\t\t
\t\t});
\t})(jQuery);
</script>
</head>
<body>
<!--header-->
<header>
 <h1><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/images/admin_logo.png\"/></h1>
 <ul class=\"rt_nav\">
  <li><a href=\"http://www.baidu.com\" target=\"_blank\" class=\"website_icon\">站点首页</a></li>
  <li><a href=\"#\" class=\"admin_icon\">DeathGhost</a></li>
  <li><a href=\"#\" class=\"set_icon\">账号设置</a></li>
  <li><a href=\"login.php\" class=\"quit_icon\">安全退出</a></li>
 </ul>
</header>

<!--aside nav-->
<aside class=\"lt_aside_nav content mCustomScrollbar\">
 <h2><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/admin/index\">起始页</a></h2>
 <ul>
  <li>
   <dl>
    <dt>会员管理</dt>
    <dd><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/index\">会员列表</a></dd>
    <dd><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/add\">添加会员</a></dd>
    <dd><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/leve\">会员等级</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>基础设置</dt>
    <dd><a href=\"#\">站点基础设置</a></dd>
    <dd><a href=\"#\">SEO设置</a></dd>
    <dd><a href=\"#\">SQL语句查询</a></dd>
    <dd><a href=\"#\">模板管理</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>营销管理</dt>
    <dd><a href=\"#\">订阅列表</a></dd>
    <dd><a href=\"#\">邮件群发</a></dd>
    <dd><a href=\"#\">优惠打折</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>旅游套餐管理</dt>
    <dd><a href=\"#\">旅游套餐</a></dd>
    <dd><a href=\"#\">套餐分类</a></dd>
    <dd><a href=\"#\">地区管理</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>在线统计</dt>
    <dd><a href=\"#\">流量统计</a></dd>
    <dd><a href=\"#\">销售额统计</a></dd>
   </dl>
  </li>
  <li>
   <p class=\"btm_infor\">© traval公司 版权所有</p>
  </li>
 </ul>
</aside>

<section class=\"rt_wrap content mCustomScrollbar\">
 <div class=\"rt_content\">
\t";
        // line 104
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "  </div>
</section>
</body>
</html>
";
    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        // line 105
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 105,  165 => 104,  157 => 107,  155 => 104,  109 => 61,  105 => 60,  101 => 59,  93 => 54,  79 => 43,  46 => 13,  42 => 12,  38 => 11,  33 => 9,  28 => 7,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* <meta charset="utf-8"/>*/
/* <title>后台管理系统</title>*/
/* <meta name="author" content="DeathGhost" />*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/css/style.css" />*/
/* <!--[if lt IE 9]>*/
/* <script src="{{ static }}/js/html5.js"></script>*/
/* <![endif]-->*/
/* <script type="text/javascript" src="{{ static }}/js/jquery.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/laydate/laydate.js"></script>*/
/* <script>*/
/* 	(function($){*/
/* 		$(window).load(function(){*/
/* 			 */
/*        //初始化日期选择插件*/
/*        laydate.skin('huanglv')*/
/* */
/* 			$("a[rel='load-content']").click(function(e){*/
/* 				e.preventDefault();*/
/* 				var url=$(this).attr("href");*/
/* 				$.get(url,function(data){*/
/* 					$(".content .mCSB_container").append(data); //load new content inside .mCSB_container*/
/* 					//scroll-to appended content */
/* 					$(".content").mCustomScrollbar("scrollTo","h2:last");*/
/* 				});*/
/* 			});*/
/* 			*/
/* 			$(".content").delegate("a[href='top']","click",function(e){*/
/* 				e.preventDefault();*/
/* 				$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));*/
/* 			});*/
/* 			*/
/* 		});*/
/* 	})(jQuery);*/
/* </script>*/
/* </head>*/
/* <body>*/
/* <!--header-->*/
/* <header>*/
/*  <h1><img src="{{ static }}/images/admin_logo.png"/></h1>*/
/*  <ul class="rt_nav">*/
/*   <li><a href="http://www.baidu.com" target="_blank" class="website_icon">站点首页</a></li>*/
/*   <li><a href="#" class="admin_icon">DeathGhost</a></li>*/
/*   <li><a href="#" class="set_icon">账号设置</a></li>*/
/*   <li><a href="login.php" class="quit_icon">安全退出</a></li>*/
/*  </ul>*/
/* </header>*/
/* */
/* <!--aside nav-->*/
/* <aside class="lt_aside_nav content mCustomScrollbar">*/
/*  <h2><a href="{{ APP }}/admin/index">起始页</a></h2>*/
/*  <ul>*/
/*   <li>*/
/*    <dl>*/
/*     <dt>会员管理</dt>*/
/*     <dd><a href="{{ APP }}/user/index">会员列表</a></dd>*/
/*     <dd><a href="{{ APP }}/user/add">添加会员</a></dd>*/
/*     <dd><a href="{{ APP }}/user/leve">会员等级</a></dd>*/
/*    </dl>*/
/*   </li>*/
/*   <li>*/
/*    <dl>*/
/*     <dt>基础设置</dt>*/
/*     <dd><a href="#">站点基础设置</a></dd>*/
/*     <dd><a href="#">SEO设置</a></dd>*/
/*     <dd><a href="#">SQL语句查询</a></dd>*/
/*     <dd><a href="#">模板管理</a></dd>*/
/*    </dl>*/
/*   </li>*/
/*   <li>*/
/*    <dl>*/
/*     <dt>营销管理</dt>*/
/*     <dd><a href="#">订阅列表</a></dd>*/
/*     <dd><a href="#">邮件群发</a></dd>*/
/*     <dd><a href="#">优惠打折</a></dd>*/
/*    </dl>*/
/*   </li>*/
/*   <li>*/
/*    <dl>*/
/*     <dt>旅游套餐管理</dt>*/
/*     <dd><a href="#">旅游套餐</a></dd>*/
/*     <dd><a href="#">套餐分类</a></dd>*/
/*     <dd><a href="#">地区管理</a></dd>*/
/*    </dl>*/
/*   </li>*/
/*   <li>*/
/*    <dl>*/
/*     <dt>在线统计</dt>*/
/*     <dd><a href="#">流量统计</a></dd>*/
/*     <dd><a href="#">销售额统计</a></dd>*/
/*    </dl>*/
/*   </li>*/
/*   <li>*/
/*    <p class="btm_infor">© traval公司 版权所有</p>*/
/*   </li>*/
/*  </ul>*/
/* </aside>*/
/* */
/* <section class="rt_wrap content mCustomScrollbar">*/
/*  <div class="rt_content">*/
/* 	{% block content %}*/
/* */
/* 	{% endblock %}*/
/*   </div>*/
/* </section>*/
/* </body>*/
/* </html>*/
/* */
