<?php

/* user-editleve.html */
class __TwigTemplate_38695449b5eba58da48d6110fa2109f6fe42eeaffcad8b2c80b6c93330281b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-editleve.html", 2);
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
\t<h2> <strong style=\"color:grey;\">添加会员</strong>
\t</h2>
\t<ul class=\"ulColumn2\">
\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/addleve\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">会员等级名称：</span>
\t\t\t<input type=\"text\" name=\"name\" class=\"textbox textbox_295\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leve"]) ? $context["leve"] : null), "leve_name", array()), "html", null, true);
        echo "\" placeholder=\"会员等级名称\" onblur=\"checkUsername(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">会员等级描述：</span>
\t\t\t<textarea value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leve"]) ? $context["leve"] : null), "leve_des", array()), "html", null, true);
        echo "\" placeholder=\"等级描述\" class=\"textarea\" name=\"levedes\" style=\"width:500px;height:100px;\"></textarea>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">排序：</span>
\t\t\t<input type=\"text\" name=\"rid\" class=\"textbox textbox_295\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leve"]) ? $context["leve"] : null), "leve_rid", array()), "html", null, true);
        echo "\" placeholder=\"0\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否锁定：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" ";
        // line 28
        if (($this->getAttribute((isset($context["leve"]) ? $context["leve"] : null), "is_display", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo "  name=\"is_display\"/>
\t\t\t\t不锁定
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" ";
        // line 32
        if (($this->getAttribute((isset($context["leve"]) ? $context["leve"] : null), "is_display", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " name=\"is_display\"/>
\t\t\t\t锁定
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">上传图片：</span>
\t\t\t<label class=\"uploadImg\">
\t\t\t\t<input type=\"file\" id=\"file\" name=\"leveimg\" accept=\"image/png,image/gif\" />
\t\t\t\t<span>上传图片</span>
\t\t\t\t<div class=\"previewImage\" style=\"width: 200px;height: 200px;overflow: hidden;border:1px solid #ddd;border-radius: 5px;\">
\t\t\t\t\t<img style=\"width:100%;height:100%;
\t\t\t\t\t\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["ROOT"]) ? $context["ROOT"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leve"]) ? $context["leve"] : null), "leve_img", array()), "html", null, true);
        echo "\" id=\"img\">
\t\t\t\t</div>
\t\t\t</label>
\t\t</li>
\t\t<li>
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
\tif(val == \"\"){
\t\t\$(o).next('.errorTips').html(\"用户名不能为空\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}else{
\t\t\$(o).next('.errorTips').hide();
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
\t}else{
\t\t\$(o).next('.errorTips').hide();
\t}
}
//用户免验证
function checkConfirmpwd(o){
\tif(\$(o).val() != \$(\"input[name='password']\").val() ){
\t\t\$(o).next('.errorTips').html(\"密码不相同\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}else{
\t\t\$(o).next('.errorTips').hide();
\t}
}

//生日验证
function checkBabybirthday(o){
\tif(new Date(\$(o).val()).getTime() > new Date().getTime()){
\t\t\$(o).next('.errorTips').html(\"生日不能大于当前时间\").show();
\t\t\$(o).focus();
\t\treturn false;
\t}else{
\t\t\$(o).next('.errorTips').hide();
\t}
}

function mySubmit(flag){  
    return flag;  
} 
\$(\"form\").submit(function(e){
\tvar val = \$(\"input[name='username']\").val();
\tvar exp = /^\\w{6,16}\$/; //定义3-16个字符的正则
\tif(val == \"\"){
\t\t\$(\"input[name='username']\").next('.errorTips').html(\"用户名不能为空\").show();
\t\t\$(\"input[name='username']\").focus();
\t\te.preventDefault();
\t\treturn false;
\t}else{
\t\t\$(\"input[name='username']\").next('.errorTips').hide();
\t}
\treturn true;
});
</script>
";
    }

    public function getTemplateName()
    {
        return "user-editleve.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 43,  77 => 32,  68 => 28,  59 => 22,  51 => 17,  43 => 12,  37 => 9,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加会员</strong>*/
/* 	</h2>*/
/* 	<ul class="ulColumn2">*/
/* 	<form action="{{ APP }}/user/addleve" method="post" enctype="multipart/form-data">*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">会员等级名称：</span>*/
/* 			<input type="text" name="name" class="textbox textbox_295" value="{{ leve.leve_name }}" placeholder="会员等级名称" onblur="checkUsername(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">会员等级描述：</span>*/
/* 			<textarea value="{{ leve.leve_des }}" placeholder="等级描述" class="textarea" name="levedes" style="width:500px;height:100px;"></textarea>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">排序：</span>*/
/* 			<input type="text" name="rid" class="textbox textbox_295" value="{{ leve.leve_rid }}" placeholder="0" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否锁定：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" {% if leve.is_display ==0 %}checked="checked"{% endif %}  name="is_display"/>*/
/* 				不锁定*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" {% if leve.is_display ==1 %}checked="checked"{% endif %} name="is_display"/>*/
/* 				锁定*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">上传图片：</span>*/
/* 			<label class="uploadImg">*/
/* 				<input type="file" id="file" name="leveimg" accept="image/png,image/gif" />*/
/* 				<span>上传图片</span>*/
/* 				<div class="previewImage" style="width: 200px;height: 200px;overflow: hidden;border:1px solid #ddd;border-radius: 5px;">*/
/* 					<img style="width:100%;height:100%;*/
/* 					" src="{{ ROOT }}/{{ leve.leve_img }}" id="img">*/
/* 				</div>*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;"></span>*/
/* 			<input type="submit" class="link_btn"/>*/
/* 		</li>*/
/* 	</form>*/
/* 	</ul>*/
/* </section>*/
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
/* 	if(val == ""){*/
/* 		$(o).next('.errorTips').html("用户名不能为空").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}else{*/
/* 		$(o).next('.errorTips').hide();*/
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
/* 	}else{*/
/* 		$(o).next('.errorTips').hide();*/
/* 	}*/
/* }*/
/* //用户免验证*/
/* function checkConfirmpwd(o){*/
/* 	if($(o).val() != $("input[name='password']").val() ){*/
/* 		$(o).next('.errorTips').html("密码不相同").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}else{*/
/* 		$(o).next('.errorTips').hide();*/
/* 	}*/
/* }*/
/* */
/* //生日验证*/
/* function checkBabybirthday(o){*/
/* 	if(new Date($(o).val()).getTime() > new Date().getTime()){*/
/* 		$(o).next('.errorTips').html("生日不能大于当前时间").show();*/
/* 		$(o).focus();*/
/* 		return false;*/
/* 	}else{*/
/* 		$(o).next('.errorTips').hide();*/
/* 	}*/
/* }*/
/* */
/* function mySubmit(flag){  */
/*     return flag;  */
/* } */
/* $("form").submit(function(e){*/
/* 	var val = $("input[name='username']").val();*/
/* 	var exp = /^\w{6,16}$/; //定义3-16个字符的正则*/
/* 	if(val == ""){*/
/* 		$("input[name='username']").next('.errorTips').html("用户名不能为空").show();*/
/* 		$("input[name='username']").focus();*/
/* 		e.preventDefault();*/
/* 		return false;*/
/* 	}else{*/
/* 		$("input[name='username']").next('.errorTips').hide();*/
/* 	}*/
/* 	return true;*/
/* });*/
/* </script>*/
/* {% endblock %}*/
