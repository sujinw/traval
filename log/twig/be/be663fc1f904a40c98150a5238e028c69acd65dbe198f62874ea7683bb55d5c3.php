<?php

/* user-add.html */
class __TwigTemplate_7e0844c4d289f526879fca7040b707c1a65ae81116d4f7a2d2aa906b8dda50d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user-add.html", 2);
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
        echo "/user/add\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">用户名：</span>
\t\t\t<input type=\"text\" name=\"username\" class=\"textbox textbox_295\" placeholder=\"用户名\" onblur=\"checkUsername(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">密码：</span>
\t\t\t<input type=\"password\" name=\"password\" class=\"textbox textbox_295\" placeholder=\"密码\" onblur=\"checkPassword(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">确认密码：</span>
\t\t\t<input type=\"password\" name=\"confirmpwd\" class=\"textbox textbox_295\" placeholder=\"确认密码\" onblur=\"checkConfirmpwd(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">昵称：</span>
\t\t\t<input type=\"text\" name=\"nickname\" class=\"textbox textbox_295\" placeholder=\"昵称\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">姓名：</span>
\t\t\t<input type=\"text\" name=\"surname\" class=\"textbox textbox_295\" placeholder=\"姓名\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">宝宝姓名：</span>
\t\t\t<input type=\"text\" name=\"babayname\" class=\"textbox textbox_295\" placeholder=\"宝宝姓名\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">宝宝生日：</span>
\t\t\t<input type=\"text\" name=\"babaybirthday\" class=\"textbox textbox_295\" onblur=\"checkBabybirthday(this)\" placeholder=\"宝宝生日\" onclick=\"laydate()\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">电话：</span>
\t\t\t<input type=\"text\" name=\"phone\" class=\"textbox textbox_295\" placeholder=\"电话\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">邮箱：</span>
\t\t\t<input type=\"text\" name=\"email\" class=\"textbox textbox_295\" placeholder=\"邮箱\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">地址：</span>
\t\t\t<input type=\"text\" name=\"address\" class=\"textbox textbox_295\" placeholder=\"地址\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">性别：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" name=\"sex\"/>
\t\t\t\t男
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"2\" name=\"sex\"/>
\t\t\t\t女
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" checked=\"checked\" name=\"sex\"/>
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
\talert(1)
\tvar val = \$(\"input[name='username']\").val();
\tvar exp = /^\\w{6,16}\$/; //定义3-16个字符的正则
\tif(val == \"\"){
\t\t\$(\"input[name='username']\").next('.errorTips').html(\"用户名不能为空\").show();
\t\t\$(\"input[name='username']\").focus();
\t\te.preventDefault();
\t\treturn false;
\t}else if(!exp.test(val)){
\t\t\$(\"input[name='username']\").next('.errorTips').html(\"用户名必须为6-16位的数字字母下划线组成！\").show();
\t\t\$(\"input[name='username']\").focus();
\t\te.preventDefault();
\t\treturn false;
\t}else{
\t\t\$(\"input[name='username']\").next('.errorTips').hide();
\t}

\tvar val = \$(\"input[name='password'\").val();
\tvar exp1 = /^\\w{8,16}\$/; //定义3-16个字符的正则
\tif(val == \"\"){
\t\t\$(\"input[name='password'\").next('.errorTips').html(\"密码不能为空\").show();
\t\t\$(\"input[name='password'\").focus();
\t\te.preventDefault();
\t\treturn false;
\t}else if(!exp1.test(val)){
\t\t\$(\"input[name='password'\").next('.errorTips').html(\"密码必须为8-16位的数字字母下划线组成！\").show();
\t\t\$(\"input[name='password'\").focus();
\t\te.preventDefault();
\t\treturn false;
\t}else{
\t\t\$(\"input[name='username']\").next('.errorTips').hide();
\t}

\tif(new Date(\$(\"input[name='babaybirthday']\").val()).getTime() > new Date().getTime()){
\t\t\$(\"input[name='babaybirthday']\").next('.errorTips').html(\"生日不能大于当前时间\").show();
\t\t\$(\"input[name='babaybirthday']\").focus();
\t\t\$(o).submit(false);
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
        return "user-add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  31 => 5,  28 => 4,  11 => 2,);
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
/* 	<form action="{{ APP }}/user/add" method="post" enctype="multipart/form-data">*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">用户名：</span>*/
/* 			<input type="text" name="username" class="textbox textbox_295" placeholder="用户名" onblur="checkUsername(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">密码：</span>*/
/* 			<input type="password" name="password" class="textbox textbox_295" placeholder="密码" onblur="checkPassword(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">确认密码：</span>*/
/* 			<input type="password" name="confirmpwd" class="textbox textbox_295" placeholder="确认密码" onblur="checkConfirmpwd(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">昵称：</span>*/
/* 			<input type="text" name="nickname" class="textbox textbox_295" placeholder="昵称"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">姓名：</span>*/
/* 			<input type="text" name="surname" class="textbox textbox_295" placeholder="姓名"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">宝宝姓名：</span>*/
/* 			<input type="text" name="babayname" class="textbox textbox_295" placeholder="宝宝姓名"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">宝宝生日：</span>*/
/* 			<input type="text" name="babaybirthday" class="textbox textbox_295" onblur="checkBabybirthday(this)" placeholder="宝宝生日" onclick="laydate()"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">电话：</span>*/
/* 			<input type="text" name="phone" class="textbox textbox_295" placeholder="电话"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">邮箱：</span>*/
/* 			<input type="text" name="email" class="textbox textbox_295" placeholder="邮箱"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">地址：</span>*/
/* 			<input type="text" name="address" class="textbox textbox_295" placeholder="地址"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">性别：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" name="sex"/>*/
/* 				男*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="2" name="sex"/>*/
/* 				女*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" checked="checked" name="sex"/>*/
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
/* 	alert(1)*/
/* 	var val = $("input[name='username']").val();*/
/* 	var exp = /^\w{6,16}$/; //定义3-16个字符的正则*/
/* 	if(val == ""){*/
/* 		$("input[name='username']").next('.errorTips').html("用户名不能为空").show();*/
/* 		$("input[name='username']").focus();*/
/* 		e.preventDefault();*/
/* 		return false;*/
/* 	}else if(!exp.test(val)){*/
/* 		$("input[name='username']").next('.errorTips').html("用户名必须为6-16位的数字字母下划线组成！").show();*/
/* 		$("input[name='username']").focus();*/
/* 		e.preventDefault();*/
/* 		return false;*/
/* 	}else{*/
/* 		$("input[name='username']").next('.errorTips').hide();*/
/* 	}*/
/* */
/* 	var val = $("input[name='password'").val();*/
/* 	var exp1 = /^\w{8,16}$/; //定义3-16个字符的正则*/
/* 	if(val == ""){*/
/* 		$("input[name='password'").next('.errorTips').html("密码不能为空").show();*/
/* 		$("input[name='password'").focus();*/
/* 		e.preventDefault();*/
/* 		return false;*/
/* 	}else if(!exp1.test(val)){*/
/* 		$("input[name='password'").next('.errorTips').html("密码必须为8-16位的数字字母下划线组成！").show();*/
/* 		$("input[name='password'").focus();*/
/* 		e.preventDefault();*/
/* 		return false;*/
/* 	}else{*/
/* 		$("input[name='username']").next('.errorTips').hide();*/
/* 	}*/
/* */
/* 	if(new Date($("input[name='babaybirthday']").val()).getTime() > new Date().getTime()){*/
/* 		$("input[name='babaybirthday']").next('.errorTips').html("生日不能大于当前时间").show();*/
/* 		$("input[name='babaybirthday']").focus();*/
/* 		$(o).submit(false);*/
/* 		return false;*/
/* 	}else{*/
/* 		$("input[name='username']").next('.errorTips').hide();*/
/* 	}*/
/* */
/* 	return true;*/
/* });*/
/* </script>*/
/* {% endblock %}*/
