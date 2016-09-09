<?php

/* traval-area.html */
class __TwigTemplate_44aa118dfeb405b3dc4fd0cb78facd402ef359eea6bf840a267b7f10097f5fe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "traval-area.html", 2);
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
\t\t<h2 class=\"fl\">旅游套餐地区列表</h2>
\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/traval/addArea\" class=\"fr top_rt_btn\">添加地区</a>
\t</div>
\t<table class=\"table\">
\t\t<tr>
\t\t\t<th>id</th>
\t\t\t<th>地区名称</th>
\t\t\t<th>地区排序</th>
\t\t\t<th>地区描述</th>
\t\t\t<th>操作</th>
\t\t</tr>
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["area"]) ? $context["area"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 19
            echo "\t\t<tr>
\t\t\t<td align=\"center\">
\t\t\t\t<input type=\"checkbox\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "sort", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "remark", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">
\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "/traval/editArea/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "\">编辑</a>
\t\t\t\t<a href=\"jsvascript:;\" onclick=\"delUser(";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo ")\" class=\"inner_btn\">删除</a>
\t\t\t</td>
\t\t</tr>
\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cl"], "child", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cl1"]) {
                // line 33
                echo "\t\t\t<td align=\"center\">
\t\t\t\t<input type=\"checkbox\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "id", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "id", array()), "html", null, true);
                echo "\" />
\t\t\t\t";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "id", array()), "html", null, true);
                echo "
\t\t\t</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "name", array()), "html", null, true);
                echo "</td>
            <td align=\"center\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "sort", array()), "html", null, true);
                echo "</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "remark", array()), "html", null, true);
                echo "</td>
            <td align=\"center\">
\t\t\t\t<a href=\"";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
                echo "/traval/editArea/id/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "id", array()), "html", null, true);
                echo "\">编辑</a>
\t\t\t\t<a href=\"jsvascript:;\" onclick=\"delUser(";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "id", array()), "html", null, true);
                echo ")\" class=\"inner_btn\">删除</a>
\t\t\t</td>
\t\t";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cl1"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                    // line 45
                    echo "        <tr align=\"center\">
            <td><input type=\"checkbox\" value=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "\" />";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
                    echo "</td>
            <td align=\"center\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cl1"], "sort", array()), "html", null, true);
                    echo "</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "remark", array()), "html", null, true);
                    echo "</td>
             <td align=\"center\">
\t\t\t\t<a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
                    echo "/traval/editArea/id/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo "\">编辑</a>
\t\t\t\t<a href=\"jsvascript:;\" onclick=\"delUser(";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
                    echo ")\" class=\"inner_btn\">删除</a>
\t\t\t</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t</table>
</section>
<section class=\"pop_bg\">
\t<div class=\"pop_cont\">
\t\t<!--title-->
\t\t<h3>弹出提示标题</h3>
\t\t<!--content-->
\t\t<div class=\"pop_cont_input\">
\t\t\t
\t\t</div>
\t\t<!--以pop_cont_text分界-->
\t\t<div class=\"pop_cont_text\">确定要删除这一条数据吗？</div>
\t\t<!--bottom:operate->
\t\tbutton-->
\t\t<div class=\"btm_btn\">
\t\t\t<input type=\"button\" value=\"确认\" class=\"input_btn trueBtn\"/>
\t\t\t<input type=\"button\" value=\"关闭\" class=\"input_btn falseBtn\"/>
\t\t</div>
\t</div>
</section>
<!--结束：弹出框效果-->

<script type=\"text/javascript\">

//弹出：取消或关闭按钮
\$(\".falseBtn\").click(function(){
\t\$(\".pop_bg\").fadeOut();
});
</script>
<script type=\"text/javascript\">
function callTips(txt){
    \$(document.body).append('<style>.new_tips{z-index:301;position:fixed;width:150px;border-radius:30px;line-height:40px;margin:0 auto;left:0;right:0;bottom:100px; background-color: rgba(0,0,0,0.7); color:#FFF;text-align:center;font-size:18px}</style><div class=\"new_tips\">'+txt+'</div>');setTimeout(function () {\$('.new_tips').prev('style').remove();\$('.new_tips').remove();}, 2000);
}
function delUser(id){
\t\$(\".pop_bg\").fadeIn();
\t//弹出：确认按钮
\t\$(\".trueBtn\").bind('click',function(){
\t\t\$.ajax({
\t\t\turl:\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/traval/delArea\",
\t\t\ttype:\"POST\",
\t\t\tdata:{'id':id},
\t\t\tdataType:\"JSON\",
\t\t\ttimeout:30000,
\t\t\tsuccess:function(data){
\t\t\t\tif(data.code == 20001){
\t\t\t\t\tcallTips(\"地区删除成功!\");
\t\t\t\t\twindow.location.href=window.location.href;
\t\t\t\t}else{
\t\t\t\t\tcallTips(\"地区删除失败!\");
\t\t\t\t}
\t\t\t}
\t\t})
\t\t\$(\".pop_bg\").fadeOut();
\t});
\t

}
</script>
";
    }

    public function getTemplateName()
    {
        return "traval-area.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 96,  191 => 58,  185 => 57,  179 => 56,  169 => 52,  163 => 51,  158 => 49,  154 => 48,  150 => 47,  142 => 46,  139 => 45,  135 => 44,  130 => 42,  124 => 41,  119 => 39,  115 => 38,  111 => 37,  106 => 35,  100 => 34,  97 => 33,  93 => 32,  87 => 29,  81 => 28,  76 => 26,  72 => 25,  68 => 24,  63 => 22,  57 => 21,  53 => 19,  49 => 18,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<div class="page_title">*/
/* 		<h2 class="fl">旅游套餐地区列表</h2>*/
/* 		<a href="{{ APP }}/traval/addArea" class="fr top_rt_btn">添加地区</a>*/
/* 	</div>*/
/* 	<table class="table">*/
/* 		<tr>*/
/* 			<th>id</th>*/
/* 			<th>地区名称</th>*/
/* 			<th>地区排序</th>*/
/* 			<th>地区描述</th>*/
/* 			<th>操作</th>*/
/* 		</tr>*/
/* 		{% for cl in area %}*/
/* 		<tr>*/
/* 			<td align="center">*/
/* 				<input type="checkbox" value="{{ cl.id }}" id="{{ cl.id }}" />*/
/* 				{{ cl.id }}*/
/* 			</td>*/
/* 			<td>{{ cl.name }}</td>*/
/* 			<td align="center">{{ cl.sort }}</td>*/
/* 			<td>{{ cl.remark }}</td>*/
/* 			<td align="center">*/
/* 				<a href="{{ APP }}/traval/editArea/id/{{ cl.id }}">编辑</a>*/
/* 				<a href="jsvascript:;" onclick="delUser({{ cl.id }})" class="inner_btn">删除</a>*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% for cl1 in cl.child %}*/
/* 			<td align="center">*/
/* 				<input type="checkbox" value="{{ cl1.id }}" id="{{ cl1.id }}" />*/
/* 				{{ cl1.id }}*/
/* 			</td>*/
/*             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─{{ cl1.name }}</td>*/
/*             <td align="center">{{ cl1.sort }}</td>*/
/*             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─{{ cl1.remark }}</td>*/
/*             <td align="center">*/
/* 				<a href="{{ APP }}/traval/editArea/id/{{ cl1.id }}">编辑</a>*/
/* 				<a href="jsvascript:;" onclick="delUser({{ cl1.id }})" class="inner_btn">删除</a>*/
/* 			</td>*/
/* 		{% for method in cl1.child %}*/
/*         <tr align="center">*/
/*             <td><input type="checkbox" value="{{ method.id }}" id="{{ method.id }}" />{{ method.id }}</td>*/
/*             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─{{ method.name }}</td>*/
/*             <td align="center">{{ cl1.sort }}</td>*/
/*             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─{{ method.remark }}</td>*/
/*              <td align="center">*/
/* 				<a href="{{ APP }}/traval/editArea/id/{{ method.id }}">编辑</a>*/
/* 				<a href="jsvascript:;" onclick="delUser({{ method.id }})" class="inner_btn">删除</a>*/
/* 			</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/* 		{% endfor %}*/
/* 		{% endfor %}*/
/* 	</table>*/
/* </section>*/
/* <section class="pop_bg">*/
/* 	<div class="pop_cont">*/
/* 		<!--title-->*/
/* 		<h3>弹出提示标题</h3>*/
/* 		<!--content-->*/
/* 		<div class="pop_cont_input">*/
/* 			*/
/* 		</div>*/
/* 		<!--以pop_cont_text分界-->*/
/* 		<div class="pop_cont_text">确定要删除这一条数据吗？</div>*/
/* 		<!--bottom:operate->*/
/* 		button-->*/
/* 		<div class="btm_btn">*/
/* 			<input type="button" value="确认" class="input_btn trueBtn"/>*/
/* 			<input type="button" value="关闭" class="input_btn falseBtn"/>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <!--结束：弹出框效果-->*/
/* */
/* <script type="text/javascript">*/
/* */
/* //弹出：取消或关闭按钮*/
/* $(".falseBtn").click(function(){*/
/* 	$(".pop_bg").fadeOut();*/
/* });*/
/* </script>*/
/* <script type="text/javascript">*/
/* function callTips(txt){*/
/*     $(document.body).append('<style>.new_tips{z-index:301;position:fixed;width:150px;border-radius:30px;line-height:40px;margin:0 auto;left:0;right:0;bottom:100px; background-color: rgba(0,0,0,0.7); color:#FFF;text-align:center;font-size:18px}</style><div class="new_tips">'+txt+'</div>');setTimeout(function () {$('.new_tips').prev('style').remove();$('.new_tips').remove();}, 2000);*/
/* }*/
/* function delUser(id){*/
/* 	$(".pop_bg").fadeIn();*/
/* 	//弹出：确认按钮*/
/* 	$(".trueBtn").bind('click',function(){*/
/* 		$.ajax({*/
/* 			url:"{{ APP }}/traval/delArea",*/
/* 			type:"POST",*/
/* 			data:{'id':id},*/
/* 			dataType:"JSON",*/
/* 			timeout:30000,*/
/* 			success:function(data){*/
/* 				if(data.code == 20001){*/
/* 					callTips("地区删除成功!");*/
/* 					window.location.href=window.location.href;*/
/* 				}else{*/
/* 					callTips("地区删除失败!");*/
/* 				}*/
/* 			}*/
/* 		})*/
/* 		$(".pop_bg").fadeOut();*/
/* 	});*/
/* 	*/
/* */
/* }*/
/* </script>*/
/* {% endblock %}*/
