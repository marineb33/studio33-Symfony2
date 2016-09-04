<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c783e6e567c949b8aad546d019aa57daa5c0f6fbe6b03731ef68a306dc76ba8e extends Twig_Template
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
        $__internal_ad8f48c5a6a4b47d0c2ad16998b040caa435df5105a9247392f199ddae918043 = $this->env->getExtension("native_profiler");
        $__internal_ad8f48c5a6a4b47d0c2ad16998b040caa435df5105a9247392f199ddae918043->enter($__internal_ad8f48c5a6a4b47d0c2ad16998b040caa435df5105a9247392f199ddae918043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ad8f48c5a6a4b47d0c2ad16998b040caa435df5105a9247392f199ddae918043->leave($__internal_ad8f48c5a6a4b47d0c2ad16998b040caa435df5105a9247392f199ddae918043_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
