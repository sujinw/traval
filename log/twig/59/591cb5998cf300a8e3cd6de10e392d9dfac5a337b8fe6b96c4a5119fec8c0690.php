<?php

/* admin-index.html */
class __TwigTemplate_83af58079e3191be891ae0f04f8f7af7bf9aab002c41bfd54b9ac3514fd7c68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "admin-index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"indexall\" style=\"background: url(";
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/images/indexBanner.png) no-repeat; height:550px;width:100%;\">
\t<div class=\"gz-welcome\" style=\"height:120px;\">
\t\t<h3 style=\"font-size:18px\">上午好！slade管理员！</h3>
\t</div>
\t<div class=\"cont_col_lt\" style=\"width: 1000px;background: #f8f8f8;\">
\t\t<table class=\"table fl\">
\t\t\t<tr>
\t\t\t\t<th>名称</th>
\t\t\t\t<th>描述</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">版本</td>
\t\t\t\t<td>GZcms v0.0.1</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">作者</td>
\t\t\t\t<td>半朵昙花（sujinw@qq.com）</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">网址</td>
\t\t\t\t<td>zukmb.cn</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">PHP版本</td>
\t\t\t\t<td>v5.6</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">apache版本</td>
\t\t\t\t<td>v2.4</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">mysql版本</td>
\t\t\t\t<td>v5.6</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">操作系统</td>
\t\t\t\t<td>v5.6</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">浏览器信息</td>
\t\t\t\t<td>v5.6</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"center\">当前ip</td>
\t\t\t\t<td>v5.6</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin-index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/*     <div class="indexall" style="background: url({{ static }}/images/indexBanner.png) no-repeat; height:550px;width:100%;">*/
/* 	<div class="gz-welcome" style="height:120px;">*/
/* 		<h3 style="font-size:18px">上午好！slade管理员！</h3>*/
/* 	</div>*/
/* 	<div class="cont_col_lt" style="width: 1000px;background: #f8f8f8;">*/
/* 		<table class="table fl">*/
/* 			<tr>*/
/* 				<th>名称</th>*/
/* 				<th>描述</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">版本</td>*/
/* 				<td>GZcms v0.0.1</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">作者</td>*/
/* 				<td>半朵昙花（sujinw@qq.com）</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">网址</td>*/
/* 				<td>zukmb.cn</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">PHP版本</td>*/
/* 				<td>v5.6</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">apache版本</td>*/
/* 				<td>v2.4</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">mysql版本</td>*/
/* 				<td>v5.6</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">操作系统</td>*/
/* 				<td>v5.6</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">浏览器信息</td>*/
/* 				<td>v5.6</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="center">当前ip</td>*/
/* 				<td>v5.6</td>*/
/* 			</tr>*/
/* 		</table>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
