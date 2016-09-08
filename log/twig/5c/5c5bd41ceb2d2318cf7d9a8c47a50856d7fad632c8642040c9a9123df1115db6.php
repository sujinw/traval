<?php

/* user-to-role.html */
class __TwigTemplate_7ff7c83a03d46efa8047278eacf6bf694c9baad97c556619855d5bb2662b7aca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "user-to-role.html", 1);
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
        echo "<section>
    <h2><strong style=\"color:grey;\">分列内容布局</strong></h2>
    <ul class=\"ulColumn2\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/userToRole\" method=\"post\">
        <li>
            <span class=\"item_name\" style=\"width:120px;\">用户角色：</span>
            <select name=\"role\" class=\"select textbox_295\">
            \t<option>选择用户角色</option>
            \t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["role"]) ? $context["role"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 13
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
            echo "</option>
            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
            <input type=\"hidden\" name=\"uid\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["uid"]) ? $context["uid"] : null), "html", null, true);
        echo "\" />
        </li>
        <li>
            <span class=\"item_name\" style=\"width:120px;\"></span>
            <input type=\"submit\" class=\"link_btn\"/>
        </li>
        </form>
    </ul>
</section>
";
    }

    public function getTemplateName()
    {
        return "user-to-role.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  59 => 15,  48 => 13,  44 => 12,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/*     <h2><strong style="color:grey;">分列内容布局</strong></h2>*/
/*     <ul class="ulColumn2">*/
/*         <form action="{{ APP }}/user/userToRole" method="post">*/
/*         <li>*/
/*             <span class="item_name" style="width:120px;">用户角色：</span>*/
/*             <select name="role" class="select textbox_295">*/
/*             	<option>选择用户角色</option>*/
/*             	{% for r in role %}*/
/* 				<option value="{{ r.id }}">{{ r.name }}</option>*/
/*             	{% endfor %}*/
/*             </select>*/
/*             <input type="hidden" name="uid" value="{{ uid }}" />*/
/*         </li>*/
/*         <li>*/
/*             <span class="item_name" style="width:120px;"></span>*/
/*             <input type="submit" class="link_btn"/>*/
/*         </li>*/
/*         </form>*/
/*     </ul>*/
/* </section>*/
/* {% endblock %}*/
