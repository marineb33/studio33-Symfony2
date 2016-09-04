<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_690f0792fc4aa1e448501fded63234ac26ed6c4826b9b407f7d3673901ab713b extends Twig_Template
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
        $__internal_022a004286b4a143b7006e6ef583e5bcdf53702efb37fc9101e965a3c7a59d5d = $this->env->getExtension("native_profiler");
        $__internal_022a004286b4a143b7006e6ef583e5bcdf53702efb37fc9101e965a3c7a59d5d->enter($__internal_022a004286b4a143b7006e6ef583e5bcdf53702efb37fc9101e965a3c7a59d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_022a004286b4a143b7006e6ef583e5bcdf53702efb37fc9101e965a3c7a59d5d->leave($__internal_022a004286b4a143b7006e6ef583e5bcdf53702efb37fc9101e965a3c7a59d5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
