<?php

/* login.html */
class __TwigTemplate_b2d94f5ed973de9c6fb89d525d3990c8a0ced950925bf2bd8b07062e71b3911b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<title>后台登录</title>
<meta name=\"author\" content=\"DeathGhost\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/css/style.css\" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/jquery.js\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/verificationNumbers.js\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["static"]) ? $context["static"] : null), "html", null, true);
        echo "/js/Particleground.js\"></script>
<script>
\$(document).ready(function() {
  //粒子背景特效
  \$('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
  //测试提交，对接程序删除即可
  \$(\".submit_btn\").click(function(){
\t  location.href=\"index.html\";
\t  });
});
</script>
</head>
<body>
<dl class=\"admin_login\">
 <dt>
  <strong>站点后台管理系统</strong>
  <em>Management System</em>
 </dt>
 <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/adminLogin\" method=\"post\">
 <dd class=\"user_icon\">
  <input type=\"text\" placeholder=\"账号\" name=\"traval_username\" class=\"login_txtbx\"/>
 </dd>
 <dd class=\"pwd_icon\">
  <input type=\"password\" placeholder=\"密码\" name=\"traval_password\" class=\"login_txtbx\"/>
 </dd>
 <dd class=\"val_icon\">
  <div class=\"checkcode\" style=\"width:218px\">
    <input type=\"text\" style=\"width:87px\" id=\"J_codetext\" name=\"code\" placeholder=\"验证码\" maxlength=\"4\" class=\"login_txtbx\">
    <img class=\"J_codeimg\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/getcode\" onclick=\"this.src='";
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/getcode'\" />
  </div>
  <input type=\"button\" value=\"验证码核验\" class=\"ver_btn\" onClick=\"valiCode();\">
 </dd>
 <dd>
  <input type=\"submit\" value=\"立即登陆\" class=\"submit_btn\"/>
 </dd>
  </form>
 <dd>
  <p>© 2015-2016 **旅游 版权所有</p>
  <p>123345678</p>
 </dd>
</dl>
<script type=\"text/javascript\">
\$(\"form\").submit(function(){
  if(\$(\"input[name='traval_username']\").val() == \"\"){
    alert(\"用户名不能为空！\")
    return false;
  }
  if(\$(\"input[name='traval_password']\").val() == \"\"){
    alert(\"密码不能为空！\")
    return false;
  }
  if(\$(\"input[name='code']\").val() == \"\"){
    alert(\"验证码不能为空！\")
    return false;
  }
 
})
function valiCode(){
  var inpvalue = \$('#J_codetext').val();
  \$.ajax({

    type:\"post\",
    dataType:\"json\",
    url:\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "/login/check\",
    data:{'code':inpvalue},
    success:function(data){
      if(data.code == 20001){
        alert(data.msg);
      }
    }
  });
}
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 82,  82 => 47,  69 => 37,  43 => 14,  39 => 13,  35 => 12,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* <meta charset="utf-8"/>*/
/* <title>后台登录</title>*/
/* <meta name="author" content="DeathGhost" />*/
/* <link rel="stylesheet" type="text/css" href="{{ static }}/css/style.css" />*/
/* <style>*/
/* body{height:100%;background:#16a085;overflow:hidden;}*/
/* canvas{z-index:-1;position:absolute;}*/
/* </style>*/
/* <script src="{{ static }}/js/jquery.js"></script>*/
/* <script src="{{ static }}/js/verificationNumbers.js"></script>*/
/* <script src="{{ static }}/js/Particleground.js"></script>*/
/* <script>*/
/* $(document).ready(function() {*/
/*   //粒子背景特效*/
/*   $('body').particleground({*/
/*     dotColor: '#5cbdaa',*/
/*     lineColor: '#5cbdaa'*/
/*   });*/
/*   //验证码*/
/*   createCode();*/
/*   //测试提交，对接程序删除即可*/
/*   $(".submit_btn").click(function(){*/
/* 	  location.href="index.html";*/
/* 	  });*/
/* });*/
/* </script>*/
/* </head>*/
/* <body>*/
/* <dl class="admin_login">*/
/*  <dt>*/
/*   <strong>站点后台管理系统</strong>*/
/*   <em>Management System</em>*/
/*  </dt>*/
/*  <form action="{{ APP }}/login/adminLogin" method="post">*/
/*  <dd class="user_icon">*/
/*   <input type="text" placeholder="账号" name="traval_username" class="login_txtbx"/>*/
/*  </dd>*/
/*  <dd class="pwd_icon">*/
/*   <input type="password" placeholder="密码" name="traval_password" class="login_txtbx"/>*/
/*  </dd>*/
/*  <dd class="val_icon">*/
/*   <div class="checkcode" style="width:218px">*/
/*     <input type="text" style="width:87px" id="J_codetext" name="code" placeholder="验证码" maxlength="4" class="login_txtbx">*/
/*     <img class="J_codeimg" src="{{ APP }}/login/getcode" onclick="this.src='{{ APP }}/login/getcode'" />*/
/*   </div>*/
/*   <input type="button" value="验证码核验" class="ver_btn" onClick="valiCode();">*/
/*  </dd>*/
/*  <dd>*/
/*   <input type="submit" value="立即登陆" class="submit_btn"/>*/
/*  </dd>*/
/*   </form>*/
/*  <dd>*/
/*   <p>© 2015-2016 **旅游 版权所有</p>*/
/*   <p>123345678</p>*/
/*  </dd>*/
/* </dl>*/
/* <script type="text/javascript">*/
/* $("form").submit(function(){*/
/*   if($("input[name='traval_username']").val() == ""){*/
/*     alert("用户名不能为空！")*/
/*     return false;*/
/*   }*/
/*   if($("input[name='traval_password']").val() == ""){*/
/*     alert("密码不能为空！")*/
/*     return false;*/
/*   }*/
/*   if($("input[name='code']").val() == ""){*/
/*     alert("验证码不能为空！")*/
/*     return false;*/
/*   }*/
/*  */
/* })*/
/* function valiCode(){*/
/*   var inpvalue = $('#J_codetext').val();*/
/*   $.ajax({*/
/* */
/*     type:"post",*/
/*     dataType:"json",*/
/*     url:"{{ APP }}/login/check",*/
/*     data:{'code':inpvalue},*/
/*     success:function(data){*/
/*       if(data.code == 20001){*/
/*         alert(data.msg);*/
/*       }*/
/*     }*/
/*   });*/
/* }*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
