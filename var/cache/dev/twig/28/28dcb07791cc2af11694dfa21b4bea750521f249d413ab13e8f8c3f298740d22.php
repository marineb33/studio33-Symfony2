<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_dd612eb582f04ba13d1978bbf38a155898917811750d531b08980f9a939d56db extends Twig_Template
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
        $__internal_f95987796f1565465e70e3a3158f7c18594501f431fc38f3aac53bff83ecb942 = $this->env->getExtension("native_profiler");
        $__internal_f95987796f1565465e70e3a3158f7c18594501f431fc38f3aac53bff83ecb942->enter($__internal_f95987796f1565465e70e3a3158f7c18594501f431fc38f3aac53bff83ecb942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f95987796f1565465e70e3a3158f7c18594501f431fc38f3aac53bff83ecb942->leave($__internal_f95987796f1565465e70e3a3158f7c18594501f431fc38f3aac53bff83ecb942_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
