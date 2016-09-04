<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6ee1cd24201653aee3aa2fcaf8f7a984230521fed150d2a5dda2e6927e7c5e5a extends Twig_Template
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
        $__internal_1f8dc02fc4099c0c216d6d4cbbd016848376006b05a578763e18ec86e0b9a17d = $this->env->getExtension("native_profiler");
        $__internal_1f8dc02fc4099c0c216d6d4cbbd016848376006b05a578763e18ec86e0b9a17d->enter($__internal_1f8dc02fc4099c0c216d6d4cbbd016848376006b05a578763e18ec86e0b9a17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1f8dc02fc4099c0c216d6d4cbbd016848376006b05a578763e18ec86e0b9a17d->leave($__internal_1f8dc02fc4099c0c216d6d4cbbd016848376006b05a578763e18ec86e0b9a17d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
