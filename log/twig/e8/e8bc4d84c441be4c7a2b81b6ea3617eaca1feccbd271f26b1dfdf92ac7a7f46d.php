<?php

/* user-leve.html */
class __TwigTemplate_3bcb4a4e4b93038411ff50320d886991dcbd7e37ef30da9d768a03514ffb9c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-leve.html", 2);
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
\t\t<h2 class=\"fl\">会员等级列表</h2>
\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/addleve\" class=\"fr top_rt_btn\">添加会员等级</a>
\t</div>
\t<table class=\"table\">
\t\t<tr>
\t\t\t<th>id</th>
\t\t\t<th>等级名称</th>
\t\t\t<th>等级图标</th>
\t\t\t<th>等级排序</th>
\t\t\t<th>等级描述</th>
\t\t\t<th>操作</th>
\t\t</tr>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leve"]) ? $context["leve"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "\t\t<tr>
\t\t\t<td align=\"center\">
\t\t\t\t<input type=\"checkbox\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_id", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_id", array()), "html", null, true);
            echo "\" />
\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_id", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td align=\"center\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_name", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\"><img style=\"width:80px;height:80px;\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["ROOT"]) ? $context["ROOT"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_img", array()), "html", null, true);
            echo "\" /></td>
\t\t\t<td align=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_rid", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_des", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">
\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "/user/editUserLeve/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_id", array()), "html", null, true);
            echo "\">编辑</a>
\t\t\t\t<a href=\"jsvascript:;\" onclick=\"delUser(";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "leve_id", array()), "html", null, true);
            echo ")\" class=\"inner_btn\">删除</a>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</table>
\t<aside class=\"paging\"></aside>
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
function escape2Html(str) {
 var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'\"'};
 return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
}
\$().ready(function(){
\tvar page = escape2Html(\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leves"]) ? $context["leves"] : null), "page", array()), "html", null, true);
        echo "\");
\t\$(\".paging\").html(page);
});
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
        // line 81
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/del/id/\"+id,
\t\t\ttype:\"POST\",
\t\t\tdataType:\"JSON\",
\t\t\ttimeout:30000,
\t\t\tsuccess:function(data){
\t\t\t\tif(data.code == 20001){
\t\t\t\t\tcallTips(\"会员删除成功!\");
\t\t\t\t\twindow.location.href=window.location.href;
\t\t\t\t}else{
\t\t\t\t\tcallTips(\"会员删除失败!\");
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
        return "user-leve.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 81,  135 => 64,  104 => 35,  94 => 31,  88 => 30,  83 => 28,  79 => 27,  73 => 26,  69 => 25,  64 => 23,  58 => 22,  54 => 20,  50 => 19,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<div class="page_title">*/
/* 		<h2 class="fl">会员等级列表</h2>*/
/* 		<a href="{{ APP }}/user/addleve" class="fr top_rt_btn">添加会员等级</a>*/
/* 	</div>*/
/* 	<table class="table">*/
/* 		<tr>*/
/* 			<th>id</th>*/
/* 			<th>等级名称</th>*/
/* 			<th>等级图标</th>*/
/* 			<th>等级排序</th>*/
/* 			<th>等级描述</th>*/
/* 			<th>操作</th>*/
/* 		</tr>*/
/* 		{% for user in leve %}*/
/* 		<tr>*/
/* 			<td align="center">*/
/* 				<input type="checkbox" value="{{ user.leve_id }}" id="{{ user.leve_id }}" />*/
/* 				{{ user.leve_id }}*/
/* 			</td>*/
/* 			<td align="center">{{ user.leve_name }}</td>*/
/* 			<td align="center"><img style="width:80px;height:80px;" src="{{ ROOT }}/{{ user.leve_img }}" /></td>*/
/* 			<td align="center">{{ user.leve_rid }}</td>*/
/* 			<td align="center">{{ user.leve_des }}</td>*/
/* 			<td align="center">*/
/* 				<a href="{{ APP }}/user/editUserLeve/id/{{ user.leve_id }}">编辑</a>*/
/* 				<a href="jsvascript:;" onclick="delUser({{ user.leve_id }})" class="inner_btn">删除</a>*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% endfor %}*/
/* 	</table>*/
/* 	<aside class="paging"></aside>*/
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
/* function escape2Html(str) {*/
/*  var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'"'};*/
/*  return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});*/
/* }*/
/* $().ready(function(){*/
/* 	var page = escape2Html("{{ leves.page }}");*/
/* 	$(".paging").html(page);*/
/* });*/
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
/* 			url:"{{ APP }}/user/del/id/"+id,*/
/* 			type:"POST",*/
/* 			dataType:"JSON",*/
/* 			timeout:30000,*/
/* 			success:function(data){*/
/* 				if(data.code == 20001){*/
/* 					callTips("会员删除成功!");*/
/* 					window.location.href=window.location.href;*/
/* 				}else{*/
/* 					callTips("会员删除失败!");*/
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
