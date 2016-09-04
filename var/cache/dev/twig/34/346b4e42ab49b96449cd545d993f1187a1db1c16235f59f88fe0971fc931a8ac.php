<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_96d105c070429ad5a13da52204a34afd7f4b9d05073fc2fbf513ba6fababc4c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a2d7daa8c353f8b1c434eef3fa6b17dd53f81c6e057ed66066e5dc937b56dec = $this->env->getExtension("native_profiler");
        $__internal_6a2d7daa8c353f8b1c434eef3fa6b17dd53f81c6e057ed66066e5dc937b56dec->enter($__internal_6a2d7daa8c353f8b1c434eef3fa6b17dd53f81c6e057ed66066e5dc937b56dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2d7daa8c353f8b1c434eef3fa6b17dd53f81c6e057ed66066e5dc937b56dec->leave($__internal_6a2d7daa8c353f8b1c434eef3fa6b17dd53f81c6e057ed66066e5dc937b56dec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f6547301984de9d5e3b6c47abd2aaaa8fc580628dfe2884c5e75d62d701cd85 = $this->env->getExtension("native_profiler");
        $__internal_8f6547301984de9d5e3b6c47abd2aaaa8fc580628dfe2884c5e75d62d701cd85->enter($__internal_8f6547301984de9d5e3b6c47abd2aaaa8fc580628dfe2884c5e75d62d701cd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8f6547301984de9d5e3b6c47abd2aaaa8fc580628dfe2884c5e75d62d701cd85->leave($__internal_8f6547301984de9d5e3b6c47abd2aaaa8fc580628dfe2884c5e75d62d701cd85_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c87f18503418fbd70bb3dbfac8a84afac781a1b59f30c13934e2a97d4878c2dd = $this->env->getExtension("native_profiler");
        $__internal_c87f18503418fbd70bb3dbfac8a84afac781a1b59f30c13934e2a97d4878c2dd->enter($__internal_c87f18503418fbd70bb3dbfac8a84afac781a1b59f30c13934e2a97d4878c2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c87f18503418fbd70bb3dbfac8a84afac781a1b59f30c13934e2a97d4878c2dd->leave($__internal_c87f18503418fbd70bb3dbfac8a84afac781a1b59f30c13934e2a97d4878c2dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
