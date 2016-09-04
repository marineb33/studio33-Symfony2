<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_17f25c7def94be7f4073e4316658bd3da909c5df1fa31cf41524ababfdb9ef6f extends Twig_Template
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
        $__internal_cbfe7bd6e85927edbd9f07684c77787ca8cb4b25c3bb0e6416e8dba03ae1b0ae = $this->env->getExtension("native_profiler");
        $__internal_cbfe7bd6e85927edbd9f07684c77787ca8cb4b25c3bb0e6416e8dba03ae1b0ae->enter($__internal_cbfe7bd6e85927edbd9f07684c77787ca8cb4b25c3bb0e6416e8dba03ae1b0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cbfe7bd6e85927edbd9f07684c77787ca8cb4b25c3bb0e6416e8dba03ae1b0ae->leave($__internal_cbfe7bd6e85927edbd9f07684c77787ca8cb4b25c3bb0e6416e8dba03ae1b0ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
