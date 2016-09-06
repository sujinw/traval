<?php

/* traval-add.html */
class __TwigTemplate_b4d1b3ab60842e352e3d8c1ec9f136ccd5196f061582f3ccc4a810d6e631a412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "traval-add.html", 2);
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/css/wangEditor-1.4.0.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/css/zyUpload.css\" />
<section>
\t<h2> <strong style=\"color:grey;\">添加会员</strong>
\t</h2>
\t<ul class=\"ulColumn2\">
\t<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/user/add\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<li>
        \t<span class=\"item_name\" style=\"width:120px;\">所属分类：</span>
        \t<select class=\"select\" name=\"cid\">
         \t\t<option>选择品牌</option>
        \t</select>
\t        <span class=\"errorTips\">错误提示信息...</span>
       </li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">标题：</span>
\t\t\t<input type=\"text\" name=\"title\" class=\"textbox textbox_295\" placeholder=\"标题\" onblur=\"checkUsername(this)\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">儿童参与年龄：</span>
\t\t\t<input type=\"text\" name=\"yearold\" class=\"textbox textbox_295\" placeholder=\"儿童参与年龄\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">报名时间：</span>
\t\t\t<input type=\"text\" name=\"signeuptime\" class=\"textbox textbox_295\" placeholder=\"报名时间\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">出行时间：</span>
\t\t\t<input type=\"text\" name=\"goouttime\" class=\"textbox textbox_295\" placeholder=\"出行时间\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">出行地址：</span>
\t\t\t<input type=\"text\" name=\"address\" class=\"textbox textbox_295\" placeholder=\"出行地址\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li style=\"width:80%\">
\t\t\t<span class=\"item_name\" style=\"width:120px;\">套餐详情：</span>
\t\t\t<textarea placeholder=\"套餐详情\" class=\"textarea\" name=\"contents\" id=\"contents\" style=\"width:83%;height:300px;\"></textarea>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li  style=\"width:80%\">
\t\t\t<span class=\"item_name\" style=\"width:120px;\">套餐宣传图片：</span>
\t    \t<div id=\"demo\" class=\"demo\"></div>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">排序：</span>
\t\t\t<input type=\"text\" name=\"sort\" class=\"textbox textbox_295\" value=\"0\"  placeholder=\"排序\" />
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">价格：</span>
\t\t\t<input type=\"text\" name=\"price\" class=\"textbox textbox_295\" placeholder=\"价格\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">出行天数：</span>
\t\t\t<input type=\"text\" name=\"days\" class=\"textbox textbox_295\" placeholder=\"邮箱\"/>
\t\t\t<span class=\"errorTips\">错误提示信息...</span>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">缩略图：</span>
\t\t\t<label class=\"uploadImg\">
\t\t\t\t<input type=\"file\" id=\"file\" name=\"thumb\" accept=\"image/png,image/gif\" />
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
<div id=\"uploadContainer\">
        <input type=\"button\" value=\"选择文件\" id=\"btnBrowse\" style=\"background-color:red;\"/>
\t    <input type=\"button\" value=\"上传文件\" id=\"btnUpload\">
\t    <ul id=\"fileList\"></ul>
    </div>
<script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/editor/dist/js/wangEditor-1.4.0.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/editor/plupload/lib/plupload/plupload.full.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/zyFile.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/zyUpload.js\"></script>

<script type=\"text/javascript\">


 \t\t//获取dom节点
        var \$uploadContainer = \$('#uploadContainer'),
            \$fileList = \$('#fileList'),
\t\t\t\$btnUpload = \$('#btnUpload');
        var editor = \$('#contents').wangEditor({
            'uploadImgComponent': \$uploadContainer
        });
        //实例化一个上传对象
        var uploader = new plupload.Uploader({
            browse_button: 'btnBrowse',
            url: '";
        // line 110
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

    var imgsArr = [];
\t// 初始化插件
\t\$(\"#demo\").zyUpload({
\t\twidth            :   \"650px\",                 // 宽度
\t\theight           :   \"400px\",                 // 宽度
\t\titemWidth        :   \"120px\",                 // 文件项的宽度
\t\titemHeight       :   \"100px\",                 // 文件项的高度
\t\turl              :   \"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/uploads\",     // 上传文件的路径
\t\tmultiple         :   true,                    // 是否可以多个文件上传
\t\tdragDrop         :   true,                    // 是否可以拖动上传文件
\t\tdel              :   true,                    // 是否可以删除文件
\t\tfinishDel        :   false,  \t\t\t\t  // 是否在上传文件完成后删除预览
\t\t/* 外部获得的回调接口 */
\t\tonSelect: function(files, allFiles){                    // 选择文件的回调方法
\t\t\tconsole.info(\"当前选择了以下文件：\");
\t\t\tconsole.info(files);
\t\t\tconsole.info(\"之前没上传的文件：\");
\t\t\tconsole.info(allFiles);
\t\t},
\t\tonDelete: function(file, surplusFiles){                     // 删除一个文件的回调方法
\t\t\tconsole.info(\"当前删除了此文件：\");
\t\t\tconsole.info(file);
\t\t\tconsole.info(\"当前剩余的文件：\");
\t\t\tconsole.info(surplusFiles);
\t\t},
\t\tonSuccess: function(file,responseInfo){                    // 文件上传成功的回调方法
\t\t\tconsole.info(\"此文件上传成功：\");
\t\t\tconsole.info(\"====\"+responseInfo);
\t\t\talert(file)
\t\t\timgsArr.push();
\t\t},
\t\tonFailure: function(file){                    // 文件上传失败的回调方法
\t\t\tconsole.info(\"此文件上传失败：\");
\t\t\tconsole.info(\"====\"+file);
\t\t},
\t\tonComplete: function(responseInfo){           // 上传完成的回调方法
\t\t\tconsole.info(\"文件上传完成\");
\t\t\tconsole.info(\"===============\"+responseInfo);
\t\t}
\t});

   
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
        return "traval-add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 174,  158 => 110,  140 => 95,  136 => 94,  131 => 92,  127 => 91,  44 => 11,  36 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/css/wangEditor-1.4.0.css" />*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/css/zyUpload.css" />*/
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加会员</strong>*/
/* 	</h2>*/
/* 	<ul class="ulColumn2">*/
/* 	<form action="{{ APP }}/user/add" method="post" enctype="multipart/form-data">*/
/* 		<li>*/
/*         	<span class="item_name" style="width:120px;">所属分类：</span>*/
/*         	<select class="select" name="cid">*/
/*          		<option>选择品牌</option>*/
/*         	</select>*/
/* 	        <span class="errorTips">错误提示信息...</span>*/
/*        </li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">标题：</span>*/
/* 			<input type="text" name="title" class="textbox textbox_295" placeholder="标题" onblur="checkUsername(this)" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">儿童参与年龄：</span>*/
/* 			<input type="text" name="yearold" class="textbox textbox_295" placeholder="儿童参与年龄" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">报名时间：</span>*/
/* 			<input type="text" name="signeuptime" class="textbox textbox_295" placeholder="报名时间" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">出行时间：</span>*/
/* 			<input type="text" name="goouttime" class="textbox textbox_295" placeholder="出行时间"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">出行地址：</span>*/
/* 			<input type="text" name="address" class="textbox textbox_295" placeholder="出行地址"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li style="width:80%">*/
/* 			<span class="item_name" style="width:120px;">套餐详情：</span>*/
/* 			<textarea placeholder="套餐详情" class="textarea" name="contents" id="contents" style="width:83%;height:300px;"></textarea>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li  style="width:80%">*/
/* 			<span class="item_name" style="width:120px;">套餐宣传图片：</span>*/
/* 	    	<div id="demo" class="demo"></div>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">排序：</span>*/
/* 			<input type="text" name="sort" class="textbox textbox_295" value="0"  placeholder="排序" />*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">价格：</span>*/
/* 			<input type="text" name="price" class="textbox textbox_295" placeholder="价格"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">出行天数：</span>*/
/* 			<input type="text" name="days" class="textbox textbox_295" placeholder="邮箱"/>*/
/* 			<span class="errorTips">错误提示信息...</span>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">缩略图：</span>*/
/* 			<label class="uploadImg">*/
/* 				<input type="file" id="file" name="thumb" accept="image/png,image/gif" />*/
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
/* <div id="uploadContainer">*/
/*         <input type="button" value="选择文件" id="btnBrowse" style="background-color:red;"/>*/
/* 	    <input type="button" value="上传文件" id="btnUpload">*/
/* 	    <ul id="fileList"></ul>*/
/*     </div>*/
/* <script type="text/javascript" src="{{ static }}/editor/dist/js/wangEditor-1.4.0.min.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/editor/plupload/lib/plupload/plupload.full.min.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ static }}/js/zyFile.js"></script>*/
/* <script type="text/javascript" src="{{ static }}/js/zyUpload.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* */
/* */
/*  		//获取dom节点*/
/*         var $uploadContainer = $('#uploadContainer'),*/
/*             $fileList = $('#fileList'),*/
/* 			$btnUpload = $('#btnUpload');*/
/*         var editor = $('#contents').wangEditor({*/
/*             'uploadImgComponent': $uploadContainer*/
/*         });*/
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
/*     var imgsArr = [];*/
/* 	// 初始化插件*/
/* 	$("#demo").zyUpload({*/
/* 		width            :   "650px",                 // 宽度*/
/* 		height           :   "400px",                 // 宽度*/
/* 		itemWidth        :   "120px",                 // 文件项的宽度*/
/* 		itemHeight       :   "100px",                 // 文件项的高度*/
/* 		url              :   "{{ APP }}/uploads",     // 上传文件的路径*/
/* 		multiple         :   true,                    // 是否可以多个文件上传*/
/* 		dragDrop         :   true,                    // 是否可以拖动上传文件*/
/* 		del              :   true,                    // 是否可以删除文件*/
/* 		finishDel        :   false,  				  // 是否在上传文件完成后删除预览*/
/* 		/* 外部获得的回调接口 *//* */
/* 		onSelect: function(files, allFiles){                    // 选择文件的回调方法*/
/* 			console.info("当前选择了以下文件：");*/
/* 			console.info(files);*/
/* 			console.info("之前没上传的文件：");*/
/* 			console.info(allFiles);*/
/* 		},*/
/* 		onDelete: function(file, surplusFiles){                     // 删除一个文件的回调方法*/
/* 			console.info("当前删除了此文件：");*/
/* 			console.info(file);*/
/* 			console.info("当前剩余的文件：");*/
/* 			console.info(surplusFiles);*/
/* 		},*/
/* 		onSuccess: function(file,responseInfo){                    // 文件上传成功的回调方法*/
/* 			console.info("此文件上传成功：");*/
/* 			console.info("===="+responseInfo);*/
/* 			alert(file)*/
/* 			imgsArr.push();*/
/* 		},*/
/* 		onFailure: function(file){                    // 文件上传失败的回调方法*/
/* 			console.info("此文件上传失败：");*/
/* 			console.info("===="+file);*/
/* 		},*/
/* 		onComplete: function(responseInfo){           // 上传完成的回调方法*/
/* 			console.info("文件上传完成");*/
/* 			console.info("==============="+responseInfo);*/
/* 		}*/
/* 	});*/
/* */
/*    */
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
