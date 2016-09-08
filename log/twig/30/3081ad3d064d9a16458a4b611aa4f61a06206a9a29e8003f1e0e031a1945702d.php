<?php

/* user-access.html */
class __TwigTemplate_f7583afe8cbdd4986e86f5c4945c3d556ed06360fb74eb8f1308b251648c9f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-access.html", 2);
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
\t\t<h2 class=\"fl\">管理权限配置</h2>
\t\t
\t</div>
\t<table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th width=\"10%\">ID</th>
            <th width=\"30%\">节点名称</th>
            <th width=\"20%\">节点描述</th>
            <th width=\"10%\">节点状态</th>
        </tr>
        </thead>
        <tbody>
\t    <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/access\" method=\"post\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["node"]) ? $context["node"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                \t<div class=\"checkbox\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo "
                \t\t<label>
                \t\t\t<input type=\"checkbox\" name=\"access[]\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "_1\" id='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "'  ";
            if (($this->getAttribute($context["app"], "access", array()) == 1)) {
                echo " checked = \"checked\" ";
            }
            echo "></label>
                \t</div>
                </td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "remark", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if (($this->getAttribute($context["app"], "status", array()) == 1)) {
                echo "正常";
            } else {
                echo "禁用";
            }
            echo "</td>
            </tr>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["app"], "child", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 35
                echo "            <tr>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                echo "</td>
                <td>
                    <div class=\"checkbox\">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "name", array()), "html", null, true);
                echo "
                \t\t<label>
                \t\t\t<input type=\"checkbox\" name=\"access[]\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                echo "_2\" id='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                echo "' app=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
                echo "\" action='true' ";
                if (($this->getAttribute($context["action"], "access", array()) == 1)) {
                    echo " checked = \"checked\" ";
                }
                echo ">
                \t\t</label>
                \t</div>
                </td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "remark", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                if (($this->getAttribute($context["action"], "status", array()) == 1)) {
                    echo "正常";
                } else {
                    echo " 禁用";
                }
                echo "</td>
            </tr>
                ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                    // line 49
                    echo "                <tr>
                    <td>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "</td>
                    <td>
                    <div class=\"checkbox\">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        └─";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
                    echo "
                    \t\t<label>
                    \t\t\t<input type=\"checkbox\" name=\"access[]\" value=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "_3\" id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                    echo "' app=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
                    echo "\" action=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                    echo "\"";
                    if (($this->getAttribute($context["method"], "access", array()) == 1)) {
                        echo " checked = \"checked\" ";
                    }
                    echo ">
                    \t\t</label>
                    </div>
                    </td>
                    <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "remark", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 61
                    if (($this->getAttribute($context["method"], "status", array()) == 1)) {
                        echo "正常";
                    } else {
                        echo "禁用";
                    }
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        <input type=\"hidden\" name=\"rid\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["rid"]) ? $context["rid"] : null), "html", null, true);
        echo "\" />
\t\t<input type=\"submit\" class=\"link_btn\" />
\t    </form>

       </tbody>
    </table>
</section>
<script type=\"text/javascript\">
(function(){
\tvar check = \$('input[type=checkbox]');
\tcheck.click(function(){
\t\tvar thisid = \$(this).attr('id').split('_');
\t\tif(thisid.length == 1){
\t\t\t// var inputs = \$('*[id*='+ thisid[0] +']');
\t\t\tvar inputs = \$('input[app='+ thisid[0] +']')
\t\t\tconsole.log(inputs)
\t\t\tif(!\$(this).prop('checked')){
\t\t\t\t\$(this).prop('checked',false);
\t\t\t\tinputs.prop('checked',false);
\t\t\t\t// inputs.removeAttr('checked');
\t\t\t\tconsole.log(1)
\t\t\t}else{
\t\t\t\t\$(this).prop('checked','checked');
\t\t\t\tinputs.prop('checked','checked');
\t\t\t\tconsole.log(2)
\t\t\t}\t\t
\t\t}else if(thisid.length == 2){
\t\t\t// var inputs = \$('*[id*='+ thisid[0] +']');
\t\t\tvar inputs = \$('input[action='+ thisid[1] +']')
\t\t\tconsole.log(inputs)
\t\t\tif(!\$(this).prop('checked')){
\t\t\t\t\$(this).prop('checked',false);
\t\t\t\tinputs.prop('checked',false);
\t\t\t\t// inputs.removeAttr('checked');
\t\t\t\tconsole.log(1)
\t\t\t}else{
\t\t\t\t\$(this).prop('checked','checked');
\t\t\t\tinputs.prop('checked','checked');
\t\t\t\tconsole.log(2)
\t\t\t}
\t\t\t\t\t\t
\t\t}
\t});
\t
})()
</script>
";
    }

    public function getTemplateName()
    {
        return "user-access.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 66,  204 => 65,  198 => 64,  185 => 61,  181 => 60,  162 => 56,  157 => 54,  150 => 50,  147 => 49,  143 => 48,  134 => 46,  130 => 45,  113 => 41,  108 => 39,  102 => 36,  99 => 35,  95 => 34,  86 => 32,  82 => 31,  70 => 28,  65 => 26,  59 => 23,  56 => 22,  52 => 21,  48 => 20,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<div class="page_title">*/
/* 		<h2 class="fl">管理权限配置</h2>*/
/* 		*/
/* 	</div>*/
/* 	<table class="table table-striped table-hover">*/
/*         <thead>*/
/*         <tr>*/
/*             <th width="10%">ID</th>*/
/*             <th width="30%">节点名称</th>*/
/*             <th width="20%">节点描述</th>*/
/*             <th width="10%">节点状态</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 	    <form action="{{ APP }}/user/access" method="post">*/
/*         {% for app in node %}*/
/*             <tr>*/
/*                 <td>{{ app.id }}</td>*/
/*                 <td>*/
/*                 	<div class="checkbox">*/
/*                         {{ app.name }}*/
/*                 		<label>*/
/*                 			<input type="checkbox" name="access[]" value="{{ app.id }}_1" id='{{ app.id }}'  {% if app.access==1 %} checked = "checked" {% endif %}></label>*/
/*                 	</div>*/
/*                 </td>*/
/*                 <td>{{ app.remark }}</td>*/
/*                 <td>{% if app.status==1 %}正常{% else %}禁用{% endif %}</td>*/
/*             </tr>*/
/*             {% for action in app.child %}*/
/*             <tr>*/
/*                 <td>{{ action.id }}</td>*/
/*                 <td>*/
/*                     <div class="checkbox">*/
/*                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─{{ action.name }}*/
/*                 		<label>*/
/*                 			<input type="checkbox" name="access[]" value="{{ action.id }}_2" id='{{ app.id }}_{{ action.id }}' app="{{ app.id }}" action='true' {% if action.access==1 %} checked = "checked" {% endif %}>*/
/*                 		</label>*/
/*                 	</div>*/
/*                 </td>*/
/*                 <td>{{ action.remark }}</td>*/
/*                 <td>{% if action.status==1 %}正常{% else %} 禁用{% endif %}</td>*/
/*             </tr>*/
/*                 {% for method in action.child %}*/
/*                 <tr>*/
/*                     <td>{{ method.id }}</td>*/
/*                     <td>*/
/*                     <div class="checkbox">*/
/*                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */
/*                         └─{{ method.name }}*/
/*                     		<label>*/
/*                     			<input type="checkbox" name="access[]" value="{{ method.id }}_3" id='{{ app.id }}_{{ action.id }}' app="{{ app.id }}" action="{{ action.id }}"{% if method.access==1 %} checked = "checked" {% endif %}>*/
/*                     		</label>*/
/*                     </div>*/
/*                     </td>*/
/*                     <td>{{ method.remark }}</td>*/
/*                     <td>{% if method.status== 1 %}正常{% else %}禁用{% endif %}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*         <input type="hidden" name="rid" value="{{ rid }}" />*/
/* 		<input type="submit" class="link_btn" />*/
/* 	    </form>*/
/* */
/*        </tbody>*/
/*     </table>*/
/* </section>*/
/* <script type="text/javascript">*/
/* (function(){*/
/* 	var check = $('input[type=checkbox]');*/
/* 	check.click(function(){*/
/* 		var thisid = $(this).attr('id').split('_');*/
/* 		if(thisid.length == 1){*/
/* 			// var inputs = $('*[id*='+ thisid[0] +']');*/
/* 			var inputs = $('input[app='+ thisid[0] +']')*/
/* 			console.log(inputs)*/
/* 			if(!$(this).prop('checked')){*/
/* 				$(this).prop('checked',false);*/
/* 				inputs.prop('checked',false);*/
/* 				// inputs.removeAttr('checked');*/
/* 				console.log(1)*/
/* 			}else{*/
/* 				$(this).prop('checked','checked');*/
/* 				inputs.prop('checked','checked');*/
/* 				console.log(2)*/
/* 			}		*/
/* 		}else if(thisid.length == 2){*/
/* 			// var inputs = $('*[id*='+ thisid[0] +']');*/
/* 			var inputs = $('input[action='+ thisid[1] +']')*/
/* 			console.log(inputs)*/
/* 			if(!$(this).prop('checked')){*/
/* 				$(this).prop('checked',false);*/
/* 				inputs.prop('checked',false);*/
/* 				// inputs.removeAttr('checked');*/
/* 				console.log(1)*/
/* 			}else{*/
/* 				$(this).prop('checked','checked');*/
/* 				inputs.prop('checked','checked');*/
/* 				console.log(2)*/
/* 			}*/
/* 						*/
/* 		}*/
/* 	});*/
/* 	*/
/* })()*/
/* </script>*/
/* {% endblock %}*/
