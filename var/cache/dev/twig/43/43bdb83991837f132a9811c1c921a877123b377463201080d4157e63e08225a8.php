<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f92adad10b42907c0d75289b2227017fc56391ccfa450192b01ed5ec25f2852b extends Twig_Template
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
        $__internal_f40a5561196780a18c6d67661bddc039a7754c05d9618d06de732b81c625c469 = $this->env->getExtension("native_profiler");
        $__internal_f40a5561196780a18c6d67661bddc039a7754c05d9618d06de732b81c625c469->enter($__internal_f40a5561196780a18c6d67661bddc039a7754c05d9618d06de732b81c625c469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f40a5561196780a18c6d67661bddc039a7754c05d9618d06de732b81c625c469->leave($__internal_f40a5561196780a18c6d67661bddc039a7754c05d9618d06de732b81c625c469_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
