<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3e6564328426257876984f99bc9f0e8b60cd7a0324180930e858603c033236d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_901fb15e422ac1a0a20857b21781a7a0f52f74f3e64931149f924025a944fac0 = $this->env->getExtension("native_profiler");
        $__internal_901fb15e422ac1a0a20857b21781a7a0f52f74f3e64931149f924025a944fac0->enter($__internal_901fb15e422ac1a0a20857b21781a7a0f52f74f3e64931149f924025a944fac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_901fb15e422ac1a0a20857b21781a7a0f52f74f3e64931149f924025a944fac0->leave($__internal_901fb15e422ac1a0a20857b21781a7a0f52f74f3e64931149f924025a944fac0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8640e0def6d2373b9c9cb81a1b158b8353d0e5354fae86b777217d775113e8f3 = $this->env->getExtension("native_profiler");
        $__internal_8640e0def6d2373b9c9cb81a1b158b8353d0e5354fae86b777217d775113e8f3->enter($__internal_8640e0def6d2373b9c9cb81a1b158b8353d0e5354fae86b777217d775113e8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8640e0def6d2373b9c9cb81a1b158b8353d0e5354fae86b777217d775113e8f3->leave($__internal_8640e0def6d2373b9c9cb81a1b158b8353d0e5354fae86b777217d775113e8f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8133dee2a92004ee150c36f580e8f8363eba020c067ddd2f5cbf9a7df1879b4f = $this->env->getExtension("native_profiler");
        $__internal_8133dee2a92004ee150c36f580e8f8363eba020c067ddd2f5cbf9a7df1879b4f->enter($__internal_8133dee2a92004ee150c36f580e8f8363eba020c067ddd2f5cbf9a7df1879b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8133dee2a92004ee150c36f580e8f8363eba020c067ddd2f5cbf9a7df1879b4f->leave($__internal_8133dee2a92004ee150c36f580e8f8363eba020c067ddd2f5cbf9a7df1879b4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5645bbb7b345096459e17bec2415870f2c2c4d6c05cd2e4473aa831f1fc95968 = $this->env->getExtension("native_profiler");
        $__internal_5645bbb7b345096459e17bec2415870f2c2c4d6c05cd2e4473aa831f1fc95968->enter($__internal_5645bbb7b345096459e17bec2415870f2c2c4d6c05cd2e4473aa831f1fc95968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5645bbb7b345096459e17bec2415870f2c2c4d6c05cd2e4473aa831f1fc95968->leave($__internal_5645bbb7b345096459e17bec2415870f2c2c4d6c05cd2e4473aa831f1fc95968_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
