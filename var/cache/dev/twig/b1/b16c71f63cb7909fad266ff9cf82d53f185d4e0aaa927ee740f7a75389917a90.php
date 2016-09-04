<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9dd98cc413ad5177f832dcc82005bbe0209d1c90ba45fa3a18e213334b151cdb extends Twig_Template
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
        $__internal_bffdc808087193a909046b32c97e890cefd1a9f27adc179ac613ab8c852c07d4 = $this->env->getExtension("native_profiler");
        $__internal_bffdc808087193a909046b32c97e890cefd1a9f27adc179ac613ab8c852c07d4->enter($__internal_bffdc808087193a909046b32c97e890cefd1a9f27adc179ac613ab8c852c07d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bffdc808087193a909046b32c97e890cefd1a9f27adc179ac613ab8c852c07d4->leave($__internal_bffdc808087193a909046b32c97e890cefd1a9f27adc179ac613ab8c852c07d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
