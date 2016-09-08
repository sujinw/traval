<?php

/* traval-classify-add.html */
class __TwigTemplate_7b8b0bef098be597852e53766e7c174732943672d28e4da07fb2f164bac15bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "traval-classify-add.html", 2);
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
\t<h2> <strong style=\"color:grey;\">添加旅游套餐分类</strong>
\t</h2>
\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/traval/addClassify\" id=\"addAdminType\" method=\"post\" enctype=\"multipart/form-data\">
\t<ul class=\"ulColumn2\">
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">分类标题：</span>
\t\t\t<input type=\"text\" name='title' class=\"textbox textbox_295\" placeholder=\"分类标题\"/>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">分类描述：</span>
\t\t\t<textarea name=\"desc\" placeholder=\"分类描述\" class=\"textarea\" style=\"width:500px;height:100px;\"></textarea>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">是否显示：</span>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" checked value=\"1\" name=\"is_display\"/>
\t\t\t\t是
\t\t\t</label>
\t\t\t<label class=\"single_selection\">
\t\t\t\t<input type=\"radio\" value=\"0\" name=\"is_display\"/>
\t\t\t\t否
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<span class=\"item_name\" style=\"width:120px;\">栏目图标：</span>
\t\t\t<label class=\"uploadImg\">
\t\t\t\t<input type=\"file\" id=\"file\" name=\"classimg\" accept=\"image/png,image/gif\" />
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
\t</ul>
\t</form>
</section>
<script>
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
\$(function(){
  \t\$(\"#addAdminType\").validate({
    \ttitle:{
      \t\trule:{
        \trequired: true,
        \tajax:{
          \t\turl:\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/traval/checkClass\"
        \t}
      \t},
        error:{
        \t\trequired: \"名称不能为空\",
        \t\tajax:\"角色已经存在\"
     \t\t}
    \t}
\t});
})
</script>
";
    }

    public function getTemplateName()
    {
        return "traval-classify-add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 74,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<h2> <strong style="color:grey;">添加旅游套餐分类</strong>*/
/* 	</h2>*/
/* 	<form action="{{ APP }}/traval/addClassify" id="addAdminType" method="post" enctype="multipart/form-data">*/
/* 	<ul class="ulColumn2">*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">分类标题：</span>*/
/* 			<input type="text" name='title' class="textbox textbox_295" placeholder="分类标题"/>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">分类描述：</span>*/
/* 			<textarea name="desc" placeholder="分类描述" class="textarea" style="width:500px;height:100px;"></textarea>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">是否显示：</span>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" checked value="1" name="is_display"/>*/
/* 				是*/
/* 			</label>*/
/* 			<label class="single_selection">*/
/* 				<input type="radio" value="0" name="is_display"/>*/
/* 				否*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<span class="item_name" style="width:120px;">栏目图标：</span>*/
/* 			<label class="uploadImg">*/
/* 				<input type="file" id="file" name="classimg" accept="image/png,image/gif" />*/
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
/* 	</ul>*/
/* 	</form>*/
/* </section>*/
/* <script>*/
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
/* $(function(){*/
/*   	$("#addAdminType").validate({*/
/*     	title:{*/
/*       		rule:{*/
/*         	required: true,*/
/*         	ajax:{*/
/*           		url:"{{ APP }}/traval/checkClass"*/
/*         	}*/
/*       	},*/
/*         error:{*/
/*         		required: "名称不能为空",*/
/*         		ajax:"角色已经存在"*/
/*      		}*/
/*     	}*/
/* 	});*/
/* })*/
/* </script>*/
/* {% endblock %}*/
