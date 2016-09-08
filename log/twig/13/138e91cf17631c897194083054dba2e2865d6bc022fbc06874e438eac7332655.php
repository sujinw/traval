<?php

/* user-role-add.html */
class __TwigTemplate_d236e2c5f3d98963824338c5b632befbc8b28e9f336e0f69b5c8056197e02e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-role-add.html", 2);
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
        echo "/user/addRole\" id=\"addAdminType\" method=\"post\">
\t<ul class=\"ulColumn2\">
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">管理员类型名称：</span>
\t\t\t<input type=\"text\" name='name' class=\"textbox textbox_295\" placeholder=\"类型名称\"/>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否显示：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" checked value=\"1\" name=\"status\"/>
\t\t\t\t是
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" name=\"status\"/>
\t\t\t\t否
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">类型描述：</span>
\t\t\t<textarea name=\"remark\" placeholder=\"类型描述\" class=\"textarea\" style=\"width:500px;height:100px;\"></textarea>
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
        // line 43
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/checkRole\"
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
        return "user-role-add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 43,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加管理员类型</strong>*/
/* 	</h2>*/
/* 	<form action="{{ APP }}/user/addRole" id="addAdminType" method="post">*/
/* 	<ul class="ulColumn2">*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">管理员类型名称：</span>*/
/* 			<input type="text" name='name' class="textbox textbox_295" placeholder="类型名称"/>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否显示：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" checked value="1" name="status"/>*/
/* 				是*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" name="status"/>*/
/* 				否*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">类型描述：</span>*/
/* 			<textarea name="remark" placeholder="类型描述" class="textarea" style="width:500px;height:100px;"></textarea>*/
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
/*           		url:"{{ APP }}/user/checkRole"*/
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
