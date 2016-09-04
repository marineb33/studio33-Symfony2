<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7fd74b8790c5a5b0852dd548a223ae3e2753fa779a2aef104d07348842f54298 extends Twig_Template
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
        $__internal_2bc53950dbf5515edd416edfb8e8a201607585245ce175908e396f7f55d8ef13 = $this->env->getExtension("native_profiler");
        $__internal_2bc53950dbf5515edd416edfb8e8a201607585245ce175908e396f7f55d8ef13->enter($__internal_2bc53950dbf5515edd416edfb8e8a201607585245ce175908e396f7f55d8ef13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2bc53950dbf5515edd416edfb8e8a201607585245ce175908e396f7f55d8ef13->leave($__internal_2bc53950dbf5515edd416edfb8e8a201607585245ce175908e396f7f55d8ef13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
