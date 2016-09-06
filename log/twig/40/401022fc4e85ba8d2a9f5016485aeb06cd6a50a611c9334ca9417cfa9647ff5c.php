<?php

/* user-edit.html */
class __TwigTemplate_fd89a3c5c7abadb94f3dcc32c1c4884a97abe60fe55a2d6f48faf920e1c1942e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-edit.html", 2);
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
        echo "
<section>
\t<h2> <strong style=\"color:grey;\">添加会员</strong>
\t</h2>
\t<ul class=\"ulColumn2\">
\t<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/editUser\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"checkForm()\">
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">用户名：</span>
\t\t\t<input type=\"text\" name=\"username\" class=\"textbox textbox_295\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "\" onblur=\"checkUsername(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">密码：</span>
\t\t\t<input type=\"password\" name=\"password\" class=\"textbox textbox_295\" value=\"密码\" onblur=\"checkPassword(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">确认密码：</span>
\t\t\t<input type=\"password\" name=\"confirmpwd\" class=\"textbox textbox_295\" value=\"确认密码\" onblur=\"checkConfirmpwd(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">昵称：</span>
\t\t\t<input type=\"text\" name=\"nickname\" class=\"textbox textbox_295\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">姓名：</span>
\t\t\t<input type=\"text\" name=\"surname\" class=\"textbox textbox_295\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
        echo "\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">宝宝姓名：</span>
\t\t\t<input type=\"text\" name=\"babayname\" class=\"textbox textbox_295\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "babayname", array()), "html", null, true);
        echo "\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">宝宝生日：</span>
\t\t\t<input type=\"text\" name=\"babaybirthday\" class=\"textbox textbox_295\" onblur=\"checkBabybirthday(this)\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "babaybirthday", array()), "html", null, true);
        echo "\" onclick=\"laydate()\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">电话：</span>
\t\t\t<input type=\"text\" name=\"phone\" class=\"textbox textbox_295\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">邮箱：</span>
\t\t\t<input type=\"text\" name=\"email\" class=\"textbox textbox_295\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">地址：</span>
\t\t\t<input type=\"text\" name=\"address\" class=\"textbox textbox_295\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", array()), "html", null, true);
        echo "\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">性别：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\"";
        // line 64
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sex", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " name=\"sex\"/>
\t\t\t\t男
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"2\"";
        // line 68
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sex", array()) == 2)) {
            echo "checked=\"checked\"";
        }
        echo " name=\"sex\"/>
\t\t\t\t女
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\"";
        // line 72
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sex", array()) == 3)) {
            echo "checked=\"checked\"";
        }
        echo " name=\"sex\"/>
\t\t\t\t保密
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否锁定：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" checked=\"checked\" name=\"is_display\"/>
\t\t\t\t不锁定
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_display\"/>
\t\t\t\t锁定
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">上传图片：</span>
\t\t\t<label class=\"uploadImg\">
\t\t\t\t<input type=\"file\" id=\"file\" name=\"userimg\" accept=\"image/png,image/gif\" />
\t\t\t\t<span>上传图片</span>
\t\t\t\t<div class=\"previewImage\" style=\"width: 200px;height: 200px;overflow: hidden;border:1px solid #ddd;border-radius: 5px;\">
\t\t\t\t\t<img style=\"width:100%;height:100%;
\t\t\t\t\t\" src=\"\" id=\"img\">
\t\t\t\t</div>
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\" />
\t\t\t<span class=\"item_name\" style=\"width:120px;\"></span>
\t\t\t<input type=\"submit\" class=\"link_btn\"/>
\t\t</li>
\t</form>
\t</ul>
</section>

<script type=\"text/javascript\">
//图片预览
document.getElementById('file').onchange = function(evt) {  
    // 如果浏览器不支持FileReader，则不处理  
    if (!window.FileReader) return;
    var files = evt.target.files;  
    for (var i = 0, f; f = files[i]; i++) {  
        if (!f.type.match('image.*')) {  
            continue;  
        }
        var reader = new FileReader();  
        reader.onload = (function(theFile) {  
            return function(e) {  
                // img 元素  
                document.getElementById('img').src = e.target.result;  
            };  
        })(f); 
        reader.readAsDataURL(f);  
    }  
  
}  
//用户名验证
function checkUsername(o){
\tvar val = \$(o).val();
\tvar exp = /^\\w{6,16}\$/; //定义3-16个字符的正则
\tif(val == \"\"){
\t\t\$(o).next('.errorTips').html(\"用户名不能为空\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}else if(!exp.test(val)){
\t\t\$(o).next('.errorTips').html(\"用户名必须为6-16位的数字字母下划线组成！\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}
}

//用户免验证
function checkPassword(o){
\tvar val = \$(o).val();
\tvar exp = /^\\w{8,16}\$/; //定义3-16个字符的正则
\tif(val == \"\"){
\t\t\$(o).next('.errorTips').html(\"密码不能为空\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}else if(!exp.test(val)){
\t\t\$(o).next('.errorTips').html(\"密码必须为8-16位的数字字母下划线组成！\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}
}
//用户免验证
function checkConfirmpwd(o){
\tif(\$(o).val() != \$(\"input[name='password']\").val() ){
\t\t\$(o).next('.errorTips').html(\"密码不相同\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}
}

//生日验证
function checkBabybirthday(o){
\tif(new Date(\$(o).val()).getTime() > new Date().getTime()){
\t\t\$(o).next('.errorTips').html(\"生日不能大于当前时间\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}
}
function checkForm(){
\tvar val = \$(\"input[name='username']\").val();
\tvar exp = /^\\w{6,16}\$/; //定义3-16个字符的正则
\tif(val == \"\"){
\t\t\$(\"input[name='username']\").next('.errorTips').html(\"用户名不能为空\").show();
\t\t\$(\"input[name='username']\").focus();
\t\treturn false;
\t}else if(!exp.test(val)){
\t\t\$(\"input[name='username']\").next('.errorTips').html(\"用户名必须为6-16位的数字字母下划线组成！\").show();
\t\t\$(\"input[name='username']\").focus();
\t\treturn false;
\t}

\tvar val = \$(\"input[name='password'\").val();
\tvar exp1 = /^\\w{8,16}\$/; //定义3-16个字符的正则
\tif(val == \"\"){
\t\t\$(\"input[name='password'\").next('.errorTips').html(\"密码不能为空\").show();
\t\t\$(\"input[name='password'\").focus();
\t\treturn false;
\t}else if(!exp1.test(val)){
\t\t\$(\"input[name='password'\").next('.errorTips').html(\"密码必须为8-16位的数字字母下划线组成！\").show();
\t\t\$(\"input[name='password'\").focus();
\t\treturn false;
\t}

\tif(new Date(\$(\"input[name='babaybirthday']\").val()).getTime() > new Date().getTime()){
\t\t\$(\"input[name='babaybirthday']\").next('.errorTips').html(\"生日不能大于当前时间\").show();
\t\t\$(\"input[name='babaybirthday']\").focus();
\t\treturn false;
\t}
}
</script>
";
    }

    public function getTemplateName()
    {
        return "user-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 99,  137 => 72,  128 => 68,  119 => 64,  110 => 58,  102 => 53,  94 => 48,  86 => 43,  78 => 38,  70 => 33,  62 => 28,  44 => 13,  38 => 10,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* */
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加会员</strong>*/
/* 	</h2>*/
/* 	<ul class="ulColumn2">*/
/* 	<form action="{{ APP }}/user/editUser" method="post" enctype="multipart/form-data" onsubmit="checkForm()">*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">用户名：</span>*/
/* 			<input type="text" name="username" class="textbox textbox_295" value="{{ user.username }}" onblur="checkUsername(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">密码：</span>*/
/* 			<input type="password" name="password" class="textbox textbox_295" value="密码" onblur="checkPassword(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">确认密码：</span>*/
/* 			<input type="password" name="confirmpwd" class="textbox textbox_295" value="确认密码" onblur="checkConfirmpwd(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">昵称：</span>*/
/* 			<input type="text" name="nickname" class="textbox textbox_295" value="{{ user.nickname }}"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">姓名：</span>*/
/* 			<input type="text" name="surname" class="textbox textbox_295" value="{{ user.surname }}"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">宝宝姓名：</span>*/
/* 			<input type="text" name="babayname" class="textbox textbox_295" value="{{ user.babayname }}"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">宝宝生日：</span>*/
/* 			<input type="text" name="babaybirthday" class="textbox textbox_295" onblur="checkBabybirthday(this)" value="{{ user.babaybirthday }}" onclick="laydate()"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">电话：</span>*/
/* 			<input type="text" name="phone" class="textbox textbox_295" value="{{ user.phone }}"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">邮箱：</span>*/
/* 			<input type="text" name="email" class="textbox textbox_295" value="{{ user.email }}"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">地址：</span>*/
/* 			<input type="text" name="address" class="textbox textbox_295" value="{{ user.address }}"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">性别：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1"{% if(user.sex==1) %}checked="checked"{% endif %} name="sex"/>*/
/* 				男*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="2"{% if(user.sex==2) %}checked="checked"{% endif %} name="sex"/>*/
/* 				女*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0"{% if(user.sex==3) %}checked="checked"{% endif %} name="sex"/>*/
/* 				保密*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否锁定：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" checked="checked" name="is_display"/>*/
/* 				不锁定*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" name="is_display"/>*/
/* 				锁定*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">上传图片：</span>*/
/* 			<label class="uploadImg">*/
/* 				<input type="file" id="file" name="userimg" accept="image/png,image/gif" />*/
/* 				<span>上传图片</span>*/
/* 				<div class="previewImage" style="width: 200px;height: 200px;overflow: hidden;border:1px solid #ddd;border-radius: 5px;">*/
/* 					<img style="width:100%;height:100%;*/
/* 					" src="" id="img">*/
/* 				</div>*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<input type="hidden" name="id" value="{{ user.id }}" />*/
/* 			<span class="item_name" style="width:120px;"></span>*/
/* 			<input type="submit" class="link_btn"/>*/
/* 		</li>*/
/* 	</form>*/
/* 	</ul>*/
/* </section>*/
/* */
/* <script type="text/javascript">*/
/* //图片预览*/
/* document.getElementById('file').onchange = function(evt) {  */
/*     // 如果浏览器不支持FileReader，则不处理  */
/*     if (!window.FileReader) return;*/
/*     var files = evt.target.files;  */
/*     for (var i = 0, f; f = files[i]; i++) {  */
/*         if (!f.type.match('image.*')) {  */
/*             continue;  */
/*         }*/
/*         var reader = new FileReader();  */
/*         reader.onload = (function(theFile) {  */
/*             return function(e) {  */
/*                 // img 元素  */
/*                 document.getElementById('img').src = e.target.result;  */
/*             };  */
/*         })(f); */
/*         reader.readAsDataURL(f);  */
/*     }  */
/*   */
/* }  */
/* //用户名验证*/
/* function checkUsername(o){*/
/* 	var val = $(o).val();*/
/* 	var exp = /^\w{6,16}$/; //定义3-16个字符的正则*/
/* 	if(val == ""){*/
/* 		$(o).next('.errorTips').html("用户名不能为空").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}else if(!exp.test(val)){*/
/* 		$(o).next('.errorTips').html("用户名必须为6-16位的数字字母下划线组成！").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}*/
/* }*/
/* */
/* //用户免验证*/
/* function checkPassword(o){*/
/* 	var val = $(o).val();*/
/* 	var exp = /^\w{8,16}$/; //定义3-16个字符的正则*/
/* 	if(val == ""){*/
/* 		$(o).next('.errorTips').html("密码不能为空").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}else if(!exp.test(val)){*/
/* 		$(o).next('.errorTips').html("密码必须为8-16位的数字字母下划线组成！").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}*/
/* }*/
/* //用户免验证*/
/* function checkConfirmpwd(o){*/
/* 	if($(o).val() != $("input[name='password']").val() ){*/
/* 		$(o).next('.errorTips').html("密码不相同").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}*/
/* }*/
/* */
/* //生日验证*/
/* function checkBabybirthday(o){*/
/* 	if(new Date($(o).val()).getTime() > new Date().getTime()){*/
/* 		$(o).next('.errorTips').html("生日不能大于当前时间").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}*/
/* }*/
/* function checkForm(){*/
/* 	var val = $("input[name='username']").val();*/
/* 	var exp = /^\w{6,16}$/; //定义3-16个字符的正则*/
/* 	if(val == ""){*/
/* 		$("input[name='username']").next('.errorTips').html("用户名不能为空").show();*/
/* 		$("input[name='username']").focus();*/
/* 		return false;*/
/* 	}else if(!exp.test(val)){*/
/* 		$("input[name='username']").next('.errorTips').html("用户名必须为6-16位的数字字母下划线组成！").show();*/
/* 		$("input[name='username']").focus();*/
/* 		return false;*/
/* 	}*/
/* */
/* 	var val = $("input[name='password'").val();*/
/* 	var exp1 = /^\w{8,16}$/; //定义3-16个字符的正则*/
/* 	if(val == ""){*/
/* 		$("input[name='password'").next('.errorTips').html("密码不能为空").show();*/
/* 		$("input[name='password'").focus();*/
/* 		return false;*/
/* 	}else if(!exp1.test(val)){*/
/* 		$("input[name='password'").next('.errorTips').html("密码必须为8-16位的数字字母下划线组成！").show();*/
/* 		$("input[name='password'").focus();*/
/* 		return false;*/
/* 	}*/
/* */
/* 	if(new Date($("input[name='babaybirthday']").val()).getTime() > new Date().getTime()){*/
/* 		$("input[name='babaybirthday']").next('.errorTips').html("生日不能大于当前时间").show();*/
/* 		$("input[name='babaybirthday']").focus();*/
/* 		return false;*/
/* 	}*/
/* }*/
/* </script>*/
/* {% endblock %}*/
