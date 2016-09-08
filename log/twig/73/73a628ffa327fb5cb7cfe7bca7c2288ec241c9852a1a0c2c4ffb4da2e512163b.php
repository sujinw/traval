<?php

/* user-role-edit.html */
class __TwigTemplate_bba10fd1f86f4a3d82b840d9ab8702e52c8ffe18f675499f352e7a87b31ee30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-role-edit.html", 2);
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
\t<h2> <strong style=\"color:grey;\">添加管理员类型</strong>
\t</h2>
\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/editRole\" id=\"addAdminType\" method=\"post\">
\t<ul class=\"ulColumn2\">
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">管理员类型名称：</span>
\t\t\t<input type=\"text\" name='name' class=\"textbox textbox_295\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name", array()), "html", null, true);
        echo "\" placeholder=\"类型名称\"/>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否显示：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\"";
        // line 17
        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "status", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " name=\"status\"/>
\t\t\t\t是
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\"";
        // line 21
        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "status", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo " name=\"status\"/>
\t\t\t\t否
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">类型描述：</span>
\t\t\t<textarea name=\"remark\" placeholder=\"类型描述\" class=\"textarea\" style=\"width:500px;height:100px;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "remark", array()), "html", null, true);
        echo "</textarea>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t\t\t<span class=\"item_name\" style=\"width:120px;\"></span>
\t\t\t<input type=\"submit\" class=\"link_btn\"/>
\t\t</li>
\t</ul>
\t</form>
</section>
<script>
\$(function(){
  \t\$(\"#addAdminType\").validate({
    \tname:{
      \t\trule:{
        \t\trequired: true,
      \t},
        error:{
        \t\trequired: \"名称不能为空\",
     \t\t}
    \t}
\t});
})
</script>
";
    }

    public function getTemplateName()
    {
        return "user-role-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  71 => 27,  60 => 21,  51 => 17,  43 => 12,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加管理员类型</strong>*/
/* 	</h2>*/
/* 	<form action="{{ APP }}/user/editRole" id="addAdminType" method="post">*/
/* 	<ul class="ulColumn2">*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">管理员类型名称：</span>*/
/* 			<input type="text" name='name' class="textbox textbox_295" value="{{ role.name }}" placeholder="类型名称"/>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否显示：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1"{% if role.status==1 %}checked="checked"{% endif %} name="status"/>*/
/* 				是*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0"{% if role.status==0 %}checked="checked"{% endif %} name="status"/>*/
/* 				否*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">类型描述：</span>*/
/* 			<textarea name="remark" placeholder="类型描述" class="textarea" style="width:500px;height:100px;">{{ role.remark }}</textarea>*/
/* 		</li>*/
/* 		<li>*/
/* 			<input type="hidden" name="id" value="{{ id }}">*/
/* 			<span class="item_name" style="width:120px;"></span>*/
/* 			<input type="submit" class="link_btn"/>*/
/* 		</li>*/
/* 	</ul>*/
/* 	</form>*/
/* </section>*/
/* <script>*/
/* $(function(){*/
/*   	$("#addAdminType").validate({*/
/*     	name:{*/
/*       		rule:{*/
/*         		required: true,*/
/*       	},*/
/*         error:{*/
/*         		required: "名称不能为空",*/
/*      		}*/
/*     	}*/
/* 	});*/
/* })*/
/* </script>*/
/* {% endblock %}*/
