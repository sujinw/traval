<?php

/* user-node-edit.html */
class __TwigTemplate_6c714621cd07c82274dc19bf7f4281387ea96db323dbe2fdadccf036a604253c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-node-edit.html", 2);
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
\t<h2> <strong style=\"color:grey;\">添加权限节点</strong>
\t</h2>
\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/editNode\" id=\"addAdminType\" method=\"post\">
\t<ul class=\"ulColumn2\">
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "名称：</span>
\t\t\t<input type=\"text\" name='name' class=\"textbox textbox_295\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "name", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "名称\"/>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否显示：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" ";
        // line 17
        if (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "status", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " name=\"status\"/>
\t\t\t\t是
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" ";
        // line 21
        if (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "status", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo " name=\"status\"/>
\t\t\t\t否
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "描述：</span>
\t\t\t<textarea name=\"remark\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "描述\" class=\"textarea\" style=\"width:500px;height:100px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "remark", array()), "html", null, true);
        echo "</textarea>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"level\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["level"]) ? $context["level"] : null), "html", null, true);
        echo "\" />
\t\t\t<span class=\"item_name\" style=\"width:120px;\"></span>
\t\t\t<input type=\"submit\" class=\"link_btn\"/>
\t\t</li>
\t</ul>
\t</form>
</section>
";
    }

    public function getTemplateName()
    {
        return "user-node-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  87 => 30,  79 => 27,  75 => 26,  65 => 21,  56 => 17,  46 => 12,  42 => 11,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加权限节点</strong>*/
/* 	</h2>*/
/* 	<form action="{{ APP }}/user/editNode" id="addAdminType" method="post">*/
/* 	<ul class="ulColumn2">*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">{{ type }}名称：</span>*/
/* 			<input type="text" name='name' class="textbox textbox_295" value="{{ node.name }}" placeholder="{{ type }}名称"/>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否显示：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" {% if node.status==1 %}checked="checked"{% endif %} name="status"/>*/
/* 				是*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" {% if node.status==0 %}checked="checked"{% endif %} name="status"/>*/
/* 				否*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">{{ type }}描述：</span>*/
/* 			<textarea name="remark" placeholder="{{ type }}描述" class="textarea" style="width:500px;height:100px;">{{ node.remark }}</textarea>*/
/* 		</li>*/
/* 		<li>*/
/* 			<input type="hidden" name="id" value="{{ id }}" />*/
/*             <input type="hidden" name="level" value="{{ level }}" />*/
/* 			<span class="item_name" style="width:120px;"></span>*/
/* 			<input type="submit" class="link_btn"/>*/
/* 		</li>*/
/* 	</ul>*/
/* 	</form>*/
/* </section>*/
/* {% endblock %}*/
