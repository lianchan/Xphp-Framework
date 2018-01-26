<?php

/* layout.html */
class __TwigTemplate_a46d95939b6a5608808a66278acffed05af19483a181e365b7b66db9ff8a4b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Xphp - Hello World</title>
    <link href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
      <script src=\"https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <content>
        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "    </content>
    <footer class=\"footer\">
        <div class=\"container\">
            <p class=\"text-muted\">All right Reserved! Xphp group</p>
        </div>
    </footer>
    <script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  </body>
  <style>
  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
    background-color: #f5f5f5;
  </style>
</html>";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  60 => 16,  39 => 19,  37 => 16,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Xphp - Hello World</title>
    <link href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
      <script src=\"https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <content>
        {% block content %}
            
        {% endblock %}
    </content>
    <footer class=\"footer\">
        <div class=\"container\">
            <p class=\"text-muted\">All right Reserved! Xphp group</p>
        </div>
    </footer>
    <script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  </body>
  <style>
  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
    background-color: #f5f5f5;
  </style>
</html>", "layout.html", "D:\\phpStudy\\WWW\\Xphp\\app\\views\\layout.html");
    }
}
