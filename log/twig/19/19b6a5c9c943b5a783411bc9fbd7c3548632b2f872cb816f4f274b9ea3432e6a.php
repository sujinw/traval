<?php

/* user-node.html */
class __TwigTemplate_ec179276ae5446f07ebe7dd12c79cb31bedb3bb133b3dbedb21274988cb2639c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-node.html", 2);
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
\t\t<h2 class=\"fl\">管理权限节点列表</h2>
\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/addNode\" class=\"fr top_rt_btn\">添加节点</a>
\t</div>
\t<table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th width=\"10%\">ID</th>
            <th width=\"20%\">节点名称</th>
            <th width=\"30%\">节点描述</th>
            <th width=\"10%\">节点状态</th>
            <th width=\"30%\">操作</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["node"]) ? $context["node"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 22
            echo "        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "</td>
            <td><span class=\"inputbox\"></span>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "remark", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            if (($this->getAttribute($context["app"], "status", array()) == 1)) {
                echo "正常 ";
            } else {
                echo "禁用";
            }
            echo "</td>
            <td>
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "/user/addNode/pid/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "/level/2\" class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-plus\"></span> 添加控制器</a>
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "/user/editNode/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "/level/1\" class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span> 编辑</a>
                <a href=\"javascript:;\" onclick=\"delNode(";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo ");\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> 删除</a>
            </td>
        </tr>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["app"], "child", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 34
                echo "        <tr>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                echo "</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─<span class=\"inputbox\"><input type=\"checkbox\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                echo "\"/></span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "name", array()), "html", null, true);
                echo "</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "remark", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                if (($this->getAttribute($context["action"], "status", array()) == 1)) {
                    echo "正常";
                } else {
                    echo "禁用";
                }
                echo "</td>
            <td>
                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
                echo "/user/addNode/pid/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                echo "/level/3\" class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-plus\"></span> 添加动作方法</a>
                <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
                echo "/user/editNode/id/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                echo "/level/2\" class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span> 编辑</a>
                <a href=\"javascript:;\" onclick=\"delNode(";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                echo ")\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> 删除</a>
            </td>
        </tr>
        ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                    // line 46
                    echo "        <tr>
            <td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─<span class=\"inputbox\"><input type=\"checkbox\" value=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "\"/></span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
                    echo "</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "remark", array()), "html", null, true);
                    echo "</td>
            <td>";
                    // line 50
                    if (($this->getAttribute($context["method"], "status", array()) == 1)) {
                        echo " 正常";
                    } else {
                        echo "禁用";
                    }
                    echo "</td>
            <td>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
                    echo "/user/editNode/id/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "/level/3\" class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span> 编辑</a>
                <a href=\"javascript:;\" onclick=\"delNode(";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo ");\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> 删除</a>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "       </tbody>
    </table>
</section>
<script type=\"text/javascript\">
function delNode(id){
   hd_confirm(\"是否要删除这条信息\", function(){
             \$.ajax({
                type:\"post\",
                dataType:\"json\",
                url:\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/delNode\",
                data:{\"id\":id},
                success:function(data){
                    if(data.code == 20001){
                        new dialog_message(\"删除成功！\",3000);
                    }else{
                        new dialog_message(\"删除失败！\",3000);
                    }
                    window.location.reload();
                }
            });
        }, function(){
            return false;
        });
    
}


 
</script>
";
    }

    public function getTemplateName()
    {
        return "user-node.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 68,  210 => 59,  204 => 58,  198 => 57,  188 => 53,  182 => 52,  173 => 50,  169 => 49,  159 => 48,  155 => 47,  152 => 46,  148 => 45,  142 => 42,  136 => 41,  130 => 40,  121 => 38,  117 => 37,  109 => 36,  105 => 35,  102 => 34,  98 => 33,  92 => 30,  86 => 29,  80 => 28,  71 => 26,  67 => 25,  63 => 24,  59 => 23,  56 => 22,  52 => 21,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<div class="page_title">*/
/* 		<h2 class="fl">管理权限节点列表</h2>*/
/* 		<a href="{{ APP }}/user/addNode" class="fr top_rt_btn">添加节点</a>*/
/* 	</div>*/
/* 	<table class="table table-striped table-hover">*/
/*         <thead>*/
/*         <tr>*/
/*             <th width="10%">ID</th>*/
/*             <th width="20%">节点名称</th>*/
/*             <th width="30%">节点描述</th>*/
/*             <th width="10%">节点状态</th>*/
/*             <th width="30%">操作</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for app in node %}*/
/*         <tr>*/
/*             <td>{{ app.id }}</td>*/
/*             <td><span class="inputbox"></span>{{ app.name }}</td>*/
/*             <td>{{ app.remark }}</td>*/
/*             <td>{% if app.status==1 %}正常 {% else %}禁用{% endif %}</td>*/
/*             <td>*/
/*                 <a href="{{ APP }}/user/addNode/pid/{{ app.id }}/level/2" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> 添加控制器</a>*/
/*                 <a href="{{ APP }}/user/editNode/id/{{ app.id }}/level/1" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span> 编辑</a>*/
/*                 <a href="javascript:;" onclick="delNode({{ app.id }});" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> 删除</a>*/
/*             </td>*/
/*         </tr>*/
/*         {% for action in app.child %}*/
/*         <tr>*/
/*             <td>{{ action.id }}</td>*/
/*             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─<span class="inputbox"><input type="checkbox" value="{{ app.id }}_{{ action.id }}"/></span>{{ action.name }}</td>*/
/*             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─{{ action.remark }}</td>*/
/*             <td>{% if action.status==1 %}正常{% else %}禁用{% endif %}</td>*/
/*             <td>*/
/*                 <a href="{{ APP }}/user/addNode/pid/{{ action.id }}/level/3" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> 添加动作方法</a>*/
/*                 <a href="{{ APP }}/user/editNode/id/{{ action.id }}/level/2" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span> 编辑</a>*/
/*                 <a href="javascript:;" onclick="delNode({{ action.id }})" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> 删除</a>*/
/*             </td>*/
/*         </tr>*/
/*         {% for method in action.child %}*/
/*         <tr>*/
/*             <td>{{ method.id }}</td>*/
/*             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─<span class="inputbox"><input type="checkbox" value="{{ app.id }}_{{ action.id }}_{{ method.id }}"/></span>{{ method.name }}</td>*/
/*             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─{{ method.remark }}</td>*/
/*             <td>{% if method.status== 1 %} 正常{% else %}禁用{% endif %}</td>*/
/*             <td>*/
/*                 <a href="{{ APP }}/user/editNode/id/{{ method.id }}/level/3" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span> 编辑</a>*/
/*                 <a href="javascript:;" onclick="delNode({{ method.id }});" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> 删除</a>*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% endfor %}*/
/*         {% endfor %}*/
/*        </tbody>*/
/*     </table>*/
/* </section>*/
/* <script type="text/javascript">*/
/* function delNode(id){*/
/*    hd_confirm("是否要删除这条信息", function(){*/
/*              $.ajax({*/
/*                 type:"post",*/
/*                 dataType:"json",*/
/*                 url:"{{ APP }}/user/delNode",*/
/*                 data:{"id":id},*/
/*                 success:function(data){*/
/*                     if(data.code == 20001){*/
/*                         new dialog_message("删除成功！",3000);*/
/*                     }else{*/
/*                         new dialog_message("删除失败！",3000);*/
/*                     }*/
/*                     window.location.reload();*/
/*                 }*/
/*             });*/
/*         }, function(){*/
/*             return false;*/
/*         });*/
/*     */
/* }*/
/* */
/* */
/*  */
/* </script>*/
/* {% endblock %}*/
