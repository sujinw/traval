<?php

/* traval-edit.html */
class __TwigTemplate_45d0bf22538c0feb60a3c708994d565dc8292603ba0631a2ddb345bdf783b0af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "traval-edit.html", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/css/wangEditor-1.4.0.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/css/zyUpload.css\" />
<section>
\t<h2> <strong style=\"color:grey;\">添加会员</strong>
\t</h2>
\t<ul class=\"ulColumn2\">
\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/traval/editDetails\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">所属地区：</span>
\t\t\t\t<select class=\"select\" name=\"area_id\">
\t\t\t\t\t<option value='0'>选择旅游套餐地区</option>
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["area"]) ? $context["area"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 15
            echo "\t\t\t\t\t<option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "id", array()), "html", null, true);
            echo "'";
            if (($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "cid", array()) == $this->getAttribute($context["ar"], "id", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "_name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</select>
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">所属分类：</span>
\t\t\t\t<select class=\"select\" name=\"cid\">
\t\t\t\t\t<option value=\"0\">选择旅游套餐分类</option>
\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cla"]) ? $context["cla"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 25
            echo "\t\t\t\t\t<option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "cid", array()), "html", null, true);
            echo "'";
            if (($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "area_id", array()) == $this->getAttribute($context["cl"], "id", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "title", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t</select>
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">标题：</span>
\t\t\t\t<input type=\"text\" name=\"title\" class=\"textbox textbox_295\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "title", array()), "html", null, true);
        echo "\" placeholder=\"标题\" />
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">儿童参与年龄：</span>
\t\t\t\t<input type=\"text\" name=\"yearold\" class=\"textbox textbox_295\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "yearold", array()), "html", null, true);
        echo "\" placeholder=\"儿童参与年龄\" />
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">报名时间：</span>
\t\t\t\t<input type=\"text\" name=\"signeuptime\" class=\"textbox textbox_295\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "signeuptime", array()), "html", null, true);
        echo "\" placeholder=\"报名时间\" />
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">出行时间：</span>
\t\t\t\t<input type=\"text\" name=\"goouttime\" class=\"textbox textbox_295\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "gooutime", array()), "html", null, true);
        echo "\" placeholder=\"出行时间\"/>
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">出行地址：</span>
\t\t\t\t<input type=\"text\" name=\"address\" class=\"textbox textbox_295\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "address", array()), "html", null, true);
        echo "\" placeholder=\"出行地址\"/>
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li style=\"width:80%\">
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">套餐详情：</span>
\t\t\t\t<textarea placeholder=\"套餐详情\" class=\"textarea\" name=\"contents\" id=\"contents\" style=\"width:83%;height:300px;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "contents", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li  style=\"width:80%\">
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">套餐宣传图片：</span>
\t\t\t\t<div id=\"demo\" class=\"demo\"></div>
\t\t\t\t<input type=\"hidden\" name=\"imgs\" id=\"imgs\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "imgs", array()), "html", null, true);
        echo "\" />
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">排序：</span>
\t\t\t\t<input type=\"text\" name=\"sort\" class=\"textbox textbox_295\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "sort", array()), "html", null, true);
        echo "\"  placeholder=\"排序\" />
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">价格：</span>
\t\t\t\t<input type=\"text\" name=\"price\" class=\"textbox textbox_295\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "price", array()), "html", null, true);
        echo "\" placeholder=\"价格\"/>
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">出行天数：</span>
\t\t\t\t<input type=\"text\" name=\"days\" class=\"textbox textbox_295\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "days", array()), "html", null, true);
        echo "\" placeholder=\"出行天数\"/>
\t\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\">缩略图：</span>
\t\t\t\t<label class=\"uploadImg\">
\t\t\t\t\t<input type=\"file\" id=\"file\" name=\"thumb\" accept=\"image/png,image/gif\" />
\t\t\t\t\t<input type=\"hidden\" name=\"thumbs\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "thumb", array()), "html", null, true);
        echo "\" accept=\"image/png,image/gif\" />
\t\t\t\t\t<span>上传图片</span>
\t\t\t\t\t<div class=\"previewImage\" style=\"width: 200px;height: 200px;overflow: hidden;border:1px solid #ddd;border-radius: 5px;\">
\t\t\t\t\t\t<img style=\"width:100%;height:100%;
\t\t\t\t\t\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "thumb", array()), "html", null, true);
        echo "\" id=\"img\"></div>
\t\t\t\t</label>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<input type=\"hidden\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "id", array()), "html", null, true);
        echo "\" name=\"id\" />
\t\t\t\t<span class=\"item_name\" style=\"width:120px;\"></span>
\t\t\t\t<input type=\"submit\" class=\"link_btn\"/>
\t\t\t</li>
\t\t</form>
\t</ul>
</section>
<div id=\"uploadContainer\">
\t<input type=\"button\" value=\"选择文件\" id=\"btnBrowse\" style=\"background-color:red;\"/>
\t<input type=\"button\" value=\"上传文件\" id=\"btnUpload\">
\t<ul id=\"fileList\"></ul>
</div>

<script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/editor/dist/js/wangEditor-1.4.0.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/editor/plupload/lib/plupload/plupload.full.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/zyFile.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/zyUpload.js\"></script>

<script type=\"text/javascript\">
\$(document).ready(function(){



 \t\t//获取dom节点
        var \$uploadContainer = \$('#uploadContainer'),
            \$fileList = \$('#fileList'),
\t\t\t\$btnUpload = \$('#btnUpload');
        var editor = \$('#contents').wangEditor({
            'uploadImgComponent': \$uploadContainer
        });
        console.log(\$btnUpload)
        //实例化一个上传对象
        var uploader = new plupload.Uploader({
            browse_button: 'btnBrowse',
            url: '";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/uploads',
            filters: {
                mime_types: [
                  //只允许上传图片文件
                  { title: \"图片文件\", extensions: \"jpg,gif,png,bmp\" }
                ]
            },
            multipart_params:{
            \tuploadType:\"details\"
            }
        });
        //存储多个图片的url地址
        var urls = [];
        //存储触犯上传事件的事件对象
        var event;
        //初始化
        uploader.init();
        //绑定文件添加到队列的事件
        uploader.bind('FilesAdded', function (uploader, files) {
            \$.each(files, function (key, value) {
                var fileName = value.name,
\t\t\t\t\thtml = '<li id=\"file-' + value.id + '\">' +
\t\t\t\t\t\t\t'\t<p class=\"file-name\">' + fileName + '</p>' +
\t\t\t\t\t\t\t'\t<p class=\"progress\"></p>' +
\t\t\t\t\t\t\t'</li>';
                \$fileList.append(html);
            });
        });
        //绑定上传进度
        uploader.bind('UploadProgress', function (uploader, file) {
            \$fileList.find('.progress').text(file.percent + '%');
        });
        //单个文件上传之后
        uploader.bind('FileUploaded', function (uploader, file, responseObject) {
            //从服务器返回图片url地址
            var url = responseObject.response;
            //先将url地址存储来，待所有图片都上传完了，再
            urls.push(url);
        });
        //全部文件上传时候
        uploader.bind('UploadComplete', function (uploader, files) {
            
            \$.each(urls, function (key, value) {
                //把每一个图片的url，都插入到编辑器中
                editor.command(event, 'insertHTML', '<img src=\"' + value + '\"/>');
            });
            //清空url数组
            urls = [];
            //清空显示列表
            \$fileList.html('');
        });
        //上传事件
        \$btnUpload.click(function (e) {
            event = e;
            uploader.start();
        });

\t// 初始化插件
\t\$(\"#demo\").sladeUpload({
\t\twidth            :   \"80%\",                 // 宽度
\t\theight           :   \"300px\",                 // 宽度
\t\titemWidth        :   \"120px\",                 // 文件项的宽度
\t\titemHeight       :   \"100px\",                 // 文件项的高度
\t\turl              :   \"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/uploads\",     // 上传文件的路径
\t\tmultiple         :   true,                    // 是否可以多个文件上传
\t\tdragDrop         :   true,                    // 是否可以拖动上传文件
\t\tdel              :   true,                    // 是否可以删除文件
\t\tfinishDel        :   false,  \t\t\t\t  // 是否在上传文件完成后删除预览
\t});
});  
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
        return "traval-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 189,  251 => 126,  230 => 108,  226 => 107,  222 => 106,  218 => 105,  202 => 92,  195 => 88,  188 => 84,  178 => 77,  170 => 72,  162 => 67,  155 => 63,  146 => 57,  138 => 52,  130 => 47,  122 => 42,  114 => 37,  106 => 32,  99 => 27,  84 => 25,  80 => 24,  71 => 17,  56 => 15,  52 => 14,  44 => 9,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/css/wangEditor-1.4.0.css" />*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/css/zyUpload.css" />*/
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加会员</strong>*/
/* 	</h2>*/
/* 	<ul class="ulColumn2">*/
/* 		<form action="{{ APP }}/traval/editDetails" method="post" enctype="multipart/form-data">*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">所属地区：</span>*/
/* 				<select class="select" name="area_id">*/
/* 					<option value='0'>选择旅游套餐地区</option>*/
/* 					{% for ar in area %}*/
/* 					<option value='{{ ar.id }}'{% if details.cid==ar.id %}selected="selected"{% endif %}>{{ ar._name }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">所属分类：</span>*/
/* 				<select class="select" name="cid">*/
/* 					<option value="0">选择旅游套餐分类</option>*/
/* 					{% for cl in cla %}*/
/* 					<option value='{{ cl.cid }}'{% if details.area_id==cl.id %}selected="selected"{% endif %}>{{ cl.title }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">标题：</span>*/
/* 				<input type="text" name="title" class="textbox textbox_295" value="{{ details.title }}" placeholder="标题" />*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">儿童参与年龄：</span>*/
/* 				<input type="text" name="yearold" class="textbox textbox_295" value="{{ details.yearold }}" placeholder="儿童参与年龄" />*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">报名时间：</span>*/
/* 				<input type="text" name="signeuptime" class="textbox textbox_295" value="{{ details.signeuptime }}" placeholder="报名时间" />*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">出行时间：</span>*/
/* 				<input type="text" name="goouttime" class="textbox textbox_295" value="{{ details.gooutime }}" placeholder="出行时间"/>*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">出行地址：</span>*/
/* 				<input type="text" name="address" class="textbox textbox_295" value="{{ details.address }}" placeholder="出行地址"/>*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li style="width:80%">*/
/* 				<span class="item_name" style="width:120px;">套餐详情：</span>*/
/* 				<textarea placeholder="套餐详情" class="textarea" name="contents" id="contents" style="width:83%;height:300px;">{{ details.contents }}</textarea>*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li  style="width:80%">*/
/* 				<span class="item_name" style="width:120px;">套餐宣传图片：</span>*/
/* 				<div id="demo" class="demo"></div>*/
/* 				<input type="hidden" name="imgs" id="imgs" value="{{ details.imgs }}" />*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">排序：</span>*/
/* 				<input type="text" name="sort" class="textbox textbox_295" value="{{ details.sort }}"  placeholder="排序" />*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">价格：</span>*/
/* 				<input type="text" name="price" class="textbox textbox_295" value="{{ details.price }}" placeholder="价格"/>*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">出行天数：</span>*/
/* 				<input type="text" name="days" class="textbox textbox_295" value="{{ details.days }}" placeholder="出行天数"/>*/
/* 				<span class="errorTips">错误提示信息...</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="item_name" style="width:120px;">缩略图：</span>*/
/* 				<label class="uploadImg">*/
/* 					<input type="file" id="file" name="thumb" accept="image/png,image/gif" />*/
/* 					<input type="hidden" name="thumbs" value="{{ details.thumb }}" accept="image/png,image/gif" />*/
/* 					<span>上传图片</span>*/
/* 					<div class="previewImage" style="width: 200px;height: 200px;overflow: hidden;border:1px solid #ddd;border-radius: 5px;">*/
/* 						<img style="width:100%;height:100%;*/
/* 					" src="{{ details.thumb }}" id="img"></div>*/
/* 				</label>*/
/* 			</li>*/
/* 			<li>*/
/* 				<input type="hidden" value="{{ details.id }}" name="id" />*/
/* 				<span class="item_name" style="width:120px;"></span>*/
/* 				<input type="submit" class="link_btn"/>*/
/* 			</li>*/
/* 		</form>*/
/* 	</ul>*/
/* </section>*/
/* <div id="uploadContainer">*/
/* 	<input type="button" value="选择文件" id="btnBrowse" style="background-color:red;"/>*/
/* 	<input type="button" value="上传文件" id="btnUpload">*/
/* 	<ul id="fileList"></ul>*/
/* </div>*/
/* */
/* <script type="text/javascript" src="{{ static }}/editor/dist/js/wangEditor-1.4.0.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/editor/plupload/lib/plupload/plupload.full.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/js/zyFile.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/js/zyUpload.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* $(document).ready(function(){*/
/* */
/* */
/* */
/*  		//获取dom节点*/
/*         var $uploadContainer = $('#uploadContainer'),*/
/*             $fileList = $('#fileList'),*/
/* 			$btnUpload = $('#btnUpload');*/
/*         var editor = $('#contents').wangEditor({*/
/*             'uploadImgComponent': $uploadContainer*/
/*         });*/
/*         console.log($btnUpload)*/
/*         //实例化一个上传对象*/
/*         var uploader = new plupload.Uploader({*/
/*             browse_button: 'btnBrowse',*/
/*             url: '{{ APP }}/uploads',*/
/*             filters: {*/
/*                 mime_types: [*/
/*                   //只允许上传图片文件*/
/*                   { title: "图片文件", extensions: "jpg,gif,png,bmp" }*/
/*                 ]*/
/*             },*/
/*             multipart_params:{*/
/*             	uploadType:"details"*/
/*             }*/
/*         });*/
/*         //存储多个图片的url地址*/
/*         var urls = [];*/
/*         //存储触犯上传事件的事件对象*/
/*         var event;*/
/*         //初始化*/
/*         uploader.init();*/
/*         //绑定文件添加到队列的事件*/
/*         uploader.bind('FilesAdded', function (uploader, files) {*/
/*             $.each(files, function (key, value) {*/
/*                 var fileName = value.name,*/
/* 					html = '<li id="file-' + value.id + '">' +*/
/* 							'	<p class="file-name">' + fileName + '</p>' +*/
/* 							'	<p class="progress"></p>' +*/
/* 							'</li>';*/
/*                 $fileList.append(html);*/
/*             });*/
/*         });*/
/*         //绑定上传进度*/
/*         uploader.bind('UploadProgress', function (uploader, file) {*/
/*             $fileList.find('.progress').text(file.percent + '%');*/
/*         });*/
/*         //单个文件上传之后*/
/*         uploader.bind('FileUploaded', function (uploader, file, responseObject) {*/
/*             //从服务器返回图片url地址*/
/*             var url = responseObject.response;*/
/*             //先将url地址存储来，待所有图片都上传完了，再*/
/*             urls.push(url);*/
/*         });*/
/*         //全部文件上传时候*/
/*         uploader.bind('UploadComplete', function (uploader, files) {*/
/*             */
/*             $.each(urls, function (key, value) {*/
/*                 //把每一个图片的url，都插入到编辑器中*/
/*                 editor.command(event, 'insertHTML', '<img src="' + value + '"/>');*/
/*             });*/
/*             //清空url数组*/
/*             urls = [];*/
/*             //清空显示列表*/
/*             $fileList.html('');*/
/*         });*/
/*         //上传事件*/
/*         $btnUpload.click(function (e) {*/
/*             event = e;*/
/*             uploader.start();*/
/*         });*/
/* */
/* 	// 初始化插件*/
/* 	$("#demo").sladeUpload({*/
/* 		width            :   "80%",                 // 宽度*/
/* 		height           :   "300px",                 // 宽度*/
/* 		itemWidth        :   "120px",                 // 文件项的宽度*/
/* 		itemHeight       :   "100px",                 // 文件项的高度*/
/* 		url              :   "{{ APP }}/uploads",     // 上传文件的路径*/
/* 		multiple         :   true,                    // 是否可以多个文件上传*/
/* 		dragDrop         :   true,                    // 是否可以拖动上传文件*/
/* 		del              :   true,                    // 是否可以删除文件*/
/* 		finishDel        :   false,  				  // 是否在上传文件完成后删除预览*/
/* 	});*/
/* });  */
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
