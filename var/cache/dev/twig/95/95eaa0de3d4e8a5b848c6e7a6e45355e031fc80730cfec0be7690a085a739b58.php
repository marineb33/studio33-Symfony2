<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_24c6e86bf153be7e1d56ec189c65a56da23d9127e086b79e3cc4f006e8a6c594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_022dee069aa4e843ae3c1ce49ab76ba905b673f8947fd93a2d82d4558703fae5 = $this->env->getExtension("native_profiler");
        $__internal_022dee069aa4e843ae3c1ce49ab76ba905b673f8947fd93a2d82d4558703fae5->enter($__internal_022dee069aa4e843ae3c1ce49ab76ba905b673f8947fd93a2d82d4558703fae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022dee069aa4e843ae3c1ce49ab76ba905b673f8947fd93a2d82d4558703fae5->leave($__internal_022dee069aa4e843ae3c1ce49ab76ba905b673f8947fd93a2d82d4558703fae5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_99575e22679b147fc37d0a7b6cfac766b59772c9ae9b4568a564e8fe015f8da9 = $this->env->getExtension("native_profiler");
        $__internal_99575e22679b147fc37d0a7b6cfac766b59772c9ae9b4568a564e8fe015f8da9->enter($__internal_99575e22679b147fc37d0a7b6cfac766b59772c9ae9b4568a564e8fe015f8da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_99575e22679b147fc37d0a7b6cfac766b59772c9ae9b4568a564e8fe015f8da9->leave($__internal_99575e22679b147fc37d0a7b6cfac766b59772c9ae9b4568a564e8fe015f8da9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8937d846f3334fe09c0f9a3ff03efabb85fff911514899ad95688ff2d3ad2ed8 = $this->env->getExtension("native_profiler");
        $__internal_8937d846f3334fe09c0f9a3ff03efabb85fff911514899ad95688ff2d3ad2ed8->enter($__internal_8937d846f3334fe09c0f9a3ff03efabb85fff911514899ad95688ff2d3ad2ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8937d846f3334fe09c0f9a3ff03efabb85fff911514899ad95688ff2d3ad2ed8->leave($__internal_8937d846f3334fe09c0f9a3ff03efabb85fff911514899ad95688ff2d3ad2ed8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_89feeba32fb5847c811d999b2592b4a42b673ce4d154080292d2e9d122d34d70 = $this->env->getExtension("native_profiler");
        $__internal_89feeba32fb5847c811d999b2592b4a42b673ce4d154080292d2e9d122d34d70->enter($__internal_89feeba32fb5847c811d999b2592b4a42b673ce4d154080292d2e9d122d34d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_89feeba32fb5847c811d999b2592b4a42b673ce4d154080292d2e9d122d34d70->leave($__internal_89feeba32fb5847c811d999b2592b4a42b673ce4d154080292d2e9d122d34d70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
