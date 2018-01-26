<?php

/* index.html */
class __TwigTemplate_64dbb2251f51e53e0ab89e4c50dd5515384b907a77bc0bae3efd362413e60e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
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
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["val"] ?? null), "title", array()), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
        Hello World
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">{{val.title}}</div>
    <div class=\"panel-body\">
        Hello World
    </div>
</div>

{% endblock %}
", "index.html", "D:\\phpStudy\\WWW\\Xphp\\app\\views\\index.html");
    }
}
