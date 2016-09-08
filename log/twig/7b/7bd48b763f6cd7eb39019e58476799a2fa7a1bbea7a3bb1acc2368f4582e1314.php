<?php

/* user-index.html */
class __TwigTemplate_3789f3cf5eeb746cb7bd07a9ace654dda6ce8637b0b2a73f3907bdddf374c958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "user-index.html", 1);
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
        echo "
<section>
\t<div class=\"page_title\">
\t\t<h2 class=\"fl\">会员列表</h2>
\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/add\" class=\"fr top_rt_btn\">添加会员</a>
\t</div>
\t<table class=\"table\">
\t\t<tr>
\t\t\t<th>id</th>
\t\t\t<th>用户名/用户昵称(姓名)</th>
\t\t\t<th>宝宝姓名</th>
\t\t\t<th>宝宝生日</th>
\t\t\t<th>电话</th>
\t\t\t<th>邮箱</th>
\t\t\t<th>地址</th>
\t\t\t<th>操作</th>
\t\t</tr>
\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td align=\"center\">
\t\t\t\t<input type=\"checkbox\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td align=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "surname", array()), "html", null, true);
            echo ")</td>
\t\t\t<td align=\"center\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "babayname", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "babaybirthday", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address", array()), "html", null, true);
            echo "</td>
\t\t\t<td align=\"center\">
\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "/user/userToRole/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"inner_btn\">配置管理角色</a>
\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "/user/editUser/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"inner_btn\">编辑</a>
\t\t\t\t<a href=\"jsvascript:;\" onclick=\"delUser(";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo ")\">删除</a>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "page", array()), "html", null, true);
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
        // line 86
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
        return "user-index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 86,  154 => 69,  123 => 40,  113 => 36,  107 => 35,  101 => 34,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  72 => 27,  67 => 25,  61 => 24,  57 => 22,  53 => 21,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* */
/* <section>*/
/* 	<div class="page_title">*/
/* 		<h2 class="fl">会员列表</h2>*/
/* 		<a href="{{ APP }}/user/add" class="fr top_rt_btn">添加会员</a>*/
/* 	</div>*/
/* 	<table class="table">*/
/* 		<tr>*/
/* 			<th>id</th>*/
/* 			<th>用户名/用户昵称(姓名)</th>*/
/* 			<th>宝宝姓名</th>*/
/* 			<th>宝宝生日</th>*/
/* 			<th>电话</th>*/
/* 			<th>邮箱</th>*/
/* 			<th>地址</th>*/
/* 			<th>操作</th>*/
/* 		</tr>*/
/* 		{% for user in users %}*/
/* 		<tr>*/
/* 			<td align="center">*/
/* 				<input type="checkbox" value="{{ user.id }}" id="{{ user.id }}" />*/
/* 				{{ user.id }}*/
/* 			</td>*/
/* 			<td align="center">{{ user.username }}/{{ user.nickname }}({{ user.surname }})</td>*/
/* 			<td align="center">{{ user.babayname }}</td>*/
/* 			<td align="center">{{ user.babaybirthday }}</td>*/
/* 			<td align="center">{{ user.phone }}</td>*/
/* 			<td align="center">{{ user.email }}</td>*/
/* 			<td align="center">{{ user.address }}</td>*/
/* 			<td align="center">*/
/* 				<a href="{{ APP }}/user/userToRole/id/{{ user.id }}" class="inner_btn">配置管理角色</a>*/
/* 				<a href="{{ APP }}/user/editUser/id/{{ user.id }}" class="inner_btn">编辑</a>*/
/* 				<a href="jsvascript:;" onclick="delUser({{ user.id }})">删除</a>*/
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
/* 	var page = escape2Html("{{ userData.page }}");*/
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
