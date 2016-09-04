<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c2ad4d8d400c77219bfecc042934f9db792d631de0d1ee157642af14c15a5cb5 extends Twig_Template
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
        $__internal_453f5b73daccfaaf08b60ad9d1c25b6d03445397cfa2649ab5c5be7af55d57e4 = $this->env->getExtension("native_profiler");
        $__internal_453f5b73daccfaaf08b60ad9d1c25b6d03445397cfa2649ab5c5be7af55d57e4->enter($__internal_453f5b73daccfaaf08b60ad9d1c25b6d03445397cfa2649ab5c5be7af55d57e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_453f5b73daccfaaf08b60ad9d1c25b6d03445397cfa2649ab5c5be7af55d57e4->leave($__internal_453f5b73daccfaaf08b60ad9d1c25b6d03445397cfa2649ab5c5be7af55d57e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
