<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1c1d04f707e80dd4286933a125383837b741c85c736617eaa0526bcf54e4d641 extends Twig_Template
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
        $__internal_e5c65c1af8d4e4946e38da1660196a6e82ce13e87e8294a5fdeee9bffd8757fe = $this->env->getExtension("native_profiler");
        $__internal_e5c65c1af8d4e4946e38da1660196a6e82ce13e87e8294a5fdeee9bffd8757fe->enter($__internal_e5c65c1af8d4e4946e38da1660196a6e82ce13e87e8294a5fdeee9bffd8757fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e5c65c1af8d4e4946e38da1660196a6e82ce13e87e8294a5fdeee9bffd8757fe->leave($__internal_e5c65c1af8d4e4946e38da1660196a6e82ce13e87e8294a5fdeee9bffd8757fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
