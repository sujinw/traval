<?php

/* config-index.html */
class __TwigTemplate_83505a33767f6d4c9eafb915ccfb87456aa2416475e7394fb04bbe328ab6a0d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "config-index.html", 2);
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
        echo "/config/index\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">网站标题：</span>
\t\t\t<input type=\"text\" name=\"site_title\" class=\"textbox textbox_295\" placeholder=\"网站标题\" onblur=\"checkUsername(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">网站描述：</span>
\t\t\t<input type=\"text\" name=\"site_des\" class=\"textbox textbox_295\" placeholder=\"网站描述\"  />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">网站关键词：</span>
\t\t\t<input type=\"text\" name=\"site_keywords\" class=\"textbox textbox_295\" placeholder=\"网站关键词\"  />
\t\t\t<span class=\"errorTips\" style=\"color：green\">请用英文状态下的,分割</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">网站简称：</span>
\t\t\t<input type=\"text\" name=\"site_mintitle\" class=\"textbox textbox_295\" placeholder=\"网站简称\" onblur=\"checkPassword(this)\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">会员积分名称：</span>
\t\t\t<input type=\"text\" name=\"site_vbname\" class=\"textbox textbox_295\" placeholder=\"积分名称\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">注册成功提示信息：</span>
\t\t\t<input type=\"text\" name=\"site_regitsermessage\" class=\"textbox textbox_295\" placeholder=\"注册成功提示信息\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">注册成功送积分：</span>
\t\t\t<input type=\"number\" max=\"9999999999\" name=\"site_tovbfirst\" class=\"textbox textbox_295\" placeholder=\"注册送积分\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">网站备案：</span>
\t\t\t<input type=\"text\" name=\"site_icp\" class=\"textbox textbox_295\" placeholder=\"网站备案\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">站长联系邮箱：</span>
\t\t\t<input type=\"text\" name=\"admin_email\" class=\"textbox textbox_295\" placeholder=\"站长邮箱\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">站长联系qq：</span>
\t\t\t<input type=\"number\" max=\"99999999999\" name=\"admin_qq\" class=\"textbox textbox_295\" placeholder=\"站长qq\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是开启网站：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" name=\"site_register_state\"/>
\t\t\t\t关闭
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" checked=\"checked\" name=\"site_state\"/>
\t\t\t\t开启
\t\t\t</label>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否开启注册：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" name=\"site_register_state\"/>
\t\t\t\t关闭
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" checked=\"checked\" name=\"site_register_state\"/>
\t\t\t\t开启
\t\t\t</label>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否开启qq注册：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" name=\"site_qq_register\"/>
\t\t\t\t关闭
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" checked=\"checked\" name=\"site_qq_register\"/>
\t\t\t\t开启
\t\t\t</label>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否开启微信注册：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" name=\"site_wx_register\"/>
\t\t\t\t关闭
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" checked=\"checked\" name=\"site_wx_register\"/>
\t\t\t\t开启
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否微信支付：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" checked=\"checked\" name=\"site_wxpay_state\"/>
\t\t\t\t关闭
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"1\" name=\"site_wxpay_state\"/>
\t\t\t\t开启
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">验证码的位数：</span>
\t\t\t<input type=\"text\" name=\"code_length\" class=\"textbox textbox_295\" placeholder=\"验证码位数\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">网站logo：</span>
\t\t\t<label class=\"uploadImg\">
\t\t\t\t<input type=\"file\" id=\"file\" name=\"site_logo\" accept=\"image/png,image/gif\" />
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
\t\t\$(o).next('.errorTips').html(\"网站标题不能为空\").show();
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
\t\t\$(o).next('.errorTips').html(\"简称不能为空\").show();
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
\tif(val == \"\"){
\t\t\$(\"input[name='username']\").next('.errorTips').html(\"网站标题不能为空\").show();
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
        return "config-index.html";
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
/* 	<form action="{{ APP }}/config/index" method="post" enctype="multipart/form-data">*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">网站标题：</span>*/
/* 			<input type="text" name="site_title" class="textbox textbox_295" placeholder="网站标题" onblur="checkUsername(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">网站描述：</span>*/
/* 			<input type="text" name="site_des" class="textbox textbox_295" placeholder="网站描述"  />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">网站关键词：</span>*/
/* 			<input type="text" name="site_keywords" class="textbox textbox_295" placeholder="网站关键词"  />*/
/* 			<span class="errorTips" style="color：green">请用英文状态下的,分割</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">网站简称：</span>*/
/* 			<input type="text" name="site_mintitle" class="textbox textbox_295" placeholder="网站简称" onblur="checkPassword(this)"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">会员积分名称：</span>*/
/* 			<input type="text" name="site_vbname" class="textbox textbox_295" placeholder="积分名称"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">注册成功提示信息：</span>*/
/* 			<input type="text" name="site_regitsermessage" class="textbox textbox_295" placeholder="注册成功提示信息"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">注册成功送积分：</span>*/
/* 			<input type="number" max="9999999999" name="site_tovbfirst" class="textbox textbox_295" placeholder="注册送积分"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">网站备案：</span>*/
/* 			<input type="text" name="site_icp" class="textbox textbox_295" placeholder="网站备案"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">站长联系邮箱：</span>*/
/* 			<input type="text" name="admin_email" class="textbox textbox_295" placeholder="站长邮箱"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">站长联系qq：</span>*/
/* 			<input type="number" max="99999999999" name="admin_qq" class="textbox textbox_295" placeholder="站长qq"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是开启网站：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" name="site_register_state"/>*/
/* 				关闭*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" checked="checked" name="site_state"/>*/
/* 				开启*/
/* 			</label>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否开启注册：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" name="site_register_state"/>*/
/* 				关闭*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" checked="checked" name="site_register_state"/>*/
/* 				开启*/
/* 			</label>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否开启qq注册：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" name="site_qq_register"/>*/
/* 				关闭*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" checked="checked" name="site_qq_register"/>*/
/* 				开启*/
/* 			</label>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否开启微信注册：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" name="site_wx_register"/>*/
/* 				关闭*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" checked="checked" name="site_wx_register"/>*/
/* 				开启*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否微信支付：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" checked="checked" name="site_wxpay_state"/>*/
/* 				关闭*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="1" name="site_wxpay_state"/>*/
/* 				开启*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">验证码的位数：</span>*/
/* 			<input type="text" name="code_length" class="textbox textbox_295" placeholder="验证码位数"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">网站logo：</span>*/
/* 			<label class="uploadImg">*/
/* 				<input type="file" id="file" name="site_logo" accept="image/png,image/gif" />*/
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
/* 		$(o).next('.errorTips').html("网站标题不能为空").show();*/
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
/* 		$(o).next('.errorTips').html("简称不能为空").show();*/
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
/* 	if(val == ""){*/
/* 		$("input[name='username']").next('.errorTips').html("网站标题不能为空").show();*/
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
