<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6768f7ddf7162df45ee7bb8aeabab33f904bfdd0bc5b423e509ce6f66df3eac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f05a7bf5b4d6e4f1e02da3a7af6efc54c2250dcbff1acd1b4b63c81d563ae05d = $this->env->getExtension("native_profiler");
        $__internal_f05a7bf5b4d6e4f1e02da3a7af6efc54c2250dcbff1acd1b4b63c81d563ae05d->enter($__internal_f05a7bf5b4d6e4f1e02da3a7af6efc54c2250dcbff1acd1b4b63c81d563ae05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f05a7bf5b4d6e4f1e02da3a7af6efc54c2250dcbff1acd1b4b63c81d563ae05d->leave($__internal_f05a7bf5b4d6e4f1e02da3a7af6efc54c2250dcbff1acd1b4b63c81d563ae05d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4aab0362dbeca9a084142f5ced7bdbe519795cc01cfe228e1ed0e6c734b9cb0d = $this->env->getExtension("native_profiler");
        $__internal_4aab0362dbeca9a084142f5ced7bdbe519795cc01cfe228e1ed0e6c734b9cb0d->enter($__internal_4aab0362dbeca9a084142f5ced7bdbe519795cc01cfe228e1ed0e6c734b9cb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4aab0362dbeca9a084142f5ced7bdbe519795cc01cfe228e1ed0e6c734b9cb0d->leave($__internal_4aab0362dbeca9a084142f5ced7bdbe519795cc01cfe228e1ed0e6c734b9cb0d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
