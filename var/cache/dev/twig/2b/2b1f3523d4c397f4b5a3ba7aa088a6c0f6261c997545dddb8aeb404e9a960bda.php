<?php

/* StudioSiteBundle:Site:addPost.html.twig */
class __TwigTemplate_dac4df692c55d8046335b6d9d4380853683967b35033d98abbbdfbd5e2d07c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:addPost.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2265b96cb6a56fa55fb0c433331bfef8cf8b49e58712a36d1293e36932e8cc60 = $this->env->getExtension("native_profiler");
        $__internal_2265b96cb6a56fa55fb0c433331bfef8cf8b49e58712a36d1293e36932e8cc60->enter($__internal_2265b96cb6a56fa55fb0c433331bfef8cf8b49e58712a36d1293e36932e8cc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudioSiteBundle:Site:addPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2265b96cb6a56fa55fb0c433331bfef8cf8b49e58712a36d1293e36932e8cc60->leave($__internal_2265b96cb6a56fa55fb0c433331bfef8cf8b49e58712a36d1293e36932e8cc60_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8c934c382d4fd8edeed118bab21d74153ac57d73518e7428b42b6d36b4ffb15 = $this->env->getExtension("native_profiler");
        $__internal_a8c934c382d4fd8edeed118bab21d74153ac57d73518e7428b42b6d36b4ffb15->enter($__internal_a8c934c382d4fd8edeed118bab21d74153ac57d73518e7428b42b6d36b4ffb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
<div>
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
  
";
        
        $__internal_a8c934c382d4fd8edeed118bab21d74153ac57d73518e7428b42b6d36b4ffb15->leave($__internal_a8c934c382d4fd8edeed118bab21d74153ac57d73518e7428b42b6d36b4ffb15_prof);

    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:addPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig"%}*/
/* */
/* {% block content %}*/
/*     */
/* <div>*/
/*   {{ form(form) }}*/
/* </div>*/
/*   */
/* {% endblock %}*/
