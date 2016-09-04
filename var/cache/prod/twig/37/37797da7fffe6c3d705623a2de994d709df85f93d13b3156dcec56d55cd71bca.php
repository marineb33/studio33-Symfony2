<?php

/* StudioSiteBundle:Site:addPost.html.twig */
class __TwigTemplate_c55d7e2db579d8d2710ad1c51ceb66c643f108d706d7984b3018d87f94de0972 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
<div>
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
</div>
  
";
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
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
