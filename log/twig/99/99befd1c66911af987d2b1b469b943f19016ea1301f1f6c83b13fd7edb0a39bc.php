<?php

/* test.html */
class __TwigTemplate_dfcfb13ce4b2ae8034ecc5b577e8d3a1cdd7ee29ac4926060d8e760ecb3a200e extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
    <form action=\"http://localhost/junmvc/index/i\" method=\"post\">
        <div>
            <label for=\"\">name:</label>
            <input type=\"text\" name=\"name\">
        </div>
        <div>
            <label for=\"\">name2:</label>
            <input type=\"text\" name=\"name2\">
        </div>
        <div>
            <label for=\"\">name3:</label>
            <input type=\"text\" name=\"name3\">
        </div>
        <div>
            <button type=\"submit\">go</button>
        </div>
    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Title</title>*/
/* </head>*/
/* <body>*/
/*     <form action="http://localhost/junmvc/index/i" method="post">*/
/*         <div>*/
/*             <label for="">name:</label>*/
/*             <input type="text" name="name">*/
/*         </div>*/
/*         <div>*/
/*             <label for="">name2:</label>*/
/*             <input type="text" name="name2">*/
/*         </div>*/
/*         <div>*/
/*             <label for="">name3:</label>*/
/*             <input type="text" name="name3">*/
/*         </div>*/
/*         <div>*/
/*             <button type="submit">go</button>*/
/*         </div>*/
/*     </form>*/
/* </body>*/
/* </html>*/
