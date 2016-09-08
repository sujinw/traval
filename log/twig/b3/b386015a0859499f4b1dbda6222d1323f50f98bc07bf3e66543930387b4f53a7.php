<?php

/* user-role.html */
class __TwigTemplate_9343a4e53a9e4d1fbff8857ddf6f7a061dbd506d8ee7656a4930fac0e77415fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-role.html", 2);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<section>
\t<div class=\"page_title\">
\t\t<h2 class=\"fl\">管理员角色列表</h2>
\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/addRole\" class=\"fr top_rt_btn\">添加管理员角色</a>
\t</div>
\t<table class=\"table\">
\t\t<tr>
\t\t\t<th>id</th>
\t\t\t<th>角色名称</th>
\t\t\t<th>角色描述</th>
\t\t\t<th>操作</th>
\t\t</tr>
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["role"]) ? $context["role"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 18
            echo "\t\t<tr>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "remark", array()), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "/user/access/rid/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\" class=\"inner_btn\">配置权限</a>
\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "/user/editRole/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\" class=\"inner_btn\">编辑</a>
\t\t\t\t<a href=\"#\" class=\"inner_btn\">删除</a>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</table>
</section>
";
    }

    public function getTemplateName()
    {
        return "user-role.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  74 => 24,  68 => 23,  63 => 21,  59 => 20,  55 => 19,  52 => 18,  48 => 17,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<div class="page_title">*/
/* 		<h2 class="fl">管理员角色列表</h2>*/
/* 		<a href="{{ APP }}/user/addRole" class="fr top_rt_btn">添加管理员角色</a>*/
/* 	</div>*/
/* 	<table class="table">*/
/* 		<tr>*/
/* 			<th>id</th>*/
/* 			<th>角色名称</th>*/
/* 			<th>角色描述</th>*/
/* 			<th>操作</th>*/
/* 		</tr>*/
/* 		{% for r in role %}*/
/* 		<tr>*/
/* 			<td>{{ r.id }}</td>*/
/* 			<td>{{ r.name }}</td>*/
/* 			<td>{{ r.remark }}</td>*/
/* 			<td>*/
/* 				<a href="{{ APP }}/user/access/rid/{{ r.id }}" class="inner_btn">配置权限</a>*/
/* 				<a href="{{ APP }}/user/editRole/id/{{ r.id }}" class="inner_btn">编辑</a>*/
/* 				<a href="#" class="inner_btn">删除</a>*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% endfor %}*/
/* 	</table>*/
/* </section>*/
/* {% endblock %}*/
