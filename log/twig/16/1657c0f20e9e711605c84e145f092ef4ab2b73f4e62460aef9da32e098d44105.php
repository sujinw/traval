<?php

/* traval-area-add.html */
class __TwigTemplate_d0db4ebe0474b12ac5c5523b48e1b9f020bec4aee5216cd61fab7088a10668ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "traval-area-add.html", 2);
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
\t<h2> <strong style=\"color:grey;\">添加旅游套餐地区</strong>
\t</h2>
\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/traval/addArea\" id=\"addAdminType\" method=\"post\" enctype=\"multipart/form-data\">
\t<ul class=\"ulColumn2\">
\t\t<li>
            <span class=\"item_name\" style=\"width:120px;\">所属地区：</span>
            <select name=\"pid\" class=\"select textbox_295\">
            \t<option value=\"0\">选择上一级地区</option>
            \t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["area"]) ? $context["area"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 15
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "_name", array()), "html", null, true);
            echo "</option>
            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </select>
        </li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">地区名称：</span>
\t\t\t<input type=\"text\" name='name' class=\"textbox textbox_295\" placeholder=\"地区名称\"/>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">排序：</span>
\t\t\t<input type=\"text\" name='sort' class=\"textbox textbox_295\" placeholder=\"排序\"/>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">地区描述：</span>
\t\t\t<textarea name=\"remark\" placeholder=\"地区描述\" class=\"textarea\" style=\"width:500px;height:100px;\"></textarea>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否显示：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" checked value=\"1\" name=\"is_display\"/>
\t\t\t\t是
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" name=\"is_display\"/>
\t\t\t\t否
\t\t\t</label>
\t\t</li>
\t\t<li>
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
        \trequired: true,
        \tajax:{
          \t\turl:\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/traval/checkClass\"
        \t}
      \t},
        error:{
        \t\trequired: \"名称不能为空\",
        \t\tajax:\"角色已经存在\"
     \t\t}
    \t}
\t});
})
</script>
";
    }

    public function getTemplateName()
    {
        return "traval-area-add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 56,  60 => 17,  49 => 15,  45 => 14,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加旅游套餐地区</strong>*/
/* 	</h2>*/
/* 	<form action="{{ APP }}/traval/addArea" id="addAdminType" method="post" enctype="multipart/form-data">*/
/* 	<ul class="ulColumn2">*/
/* 		<li>*/
/*             <span class="item_name" style="width:120px;">所属地区：</span>*/
/*             <select name="pid" class="select textbox_295">*/
/*             	<option value="0">选择上一级地区</option>*/
/*             	{% for r in area %}*/
/* 				<option value="{{ r.id }}">{{ r._name }}</option>*/
/*             	{% endfor %}*/
/*             </select>*/
/*         </li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">地区名称：</span>*/
/* 			<input type="text" name='name' class="textbox textbox_295" placeholder="地区名称"/>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">排序：</span>*/
/* 			<input type="text" name='sort' class="textbox textbox_295" placeholder="排序"/>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">地区描述：</span>*/
/* 			<textarea name="remark" placeholder="地区描述" class="textarea" style="width:500px;height:100px;"></textarea>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否显示：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" checked value="1" name="is_display"/>*/
/* 				是*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" name="is_display"/>*/
/* 				否*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
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
/*         	required: true,*/
/*         	ajax:{*/
/*           		url:"{{ APP }}/traval/checkClass"*/
/*         	}*/
/*       	},*/
/*         error:{*/
/*         		required: "名称不能为空",*/
/*         		ajax:"角色已经存在"*/
/*      		}*/
/*     	}*/
/* 	});*/
/* })*/
/* </script>*/
/* {% endblock %}*/
