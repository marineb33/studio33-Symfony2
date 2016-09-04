<?php

/* StudioSiteBundle:Site:comment.html.twig */
class __TwigTemplate_45410f1bda6203e3fe0624541455214e4b128841f0e59a499cec3671c8ab5c44 extends Twig_Template
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
        $__internal_5704e750f2ba4a4107112581a62792ed9a44d3caa9c0a9aefc2ac9cd8f13e091 = $this->env->getExtension("native_profiler");
        $__internal_5704e750f2ba4a4107112581a62792ed9a44d3caa9c0a9aefc2ac9cd8f13e091->enter($__internal_5704e750f2ba4a4107112581a62792ed9a44d3caa9c0a9aefc2ac9cd8f13e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudioSiteBundle:Site:comment.html.twig"));

        // line 1
        echo "<h2>Laisser un commentaire</h2>

<div class=\"well\">
<div class=\"row\">
    <div class=\"col-xs-8\">
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-xs-2 control-label"), "label" => "Vote nom"));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "

        <div class=\"col-xs-6\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        </div>

     
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'label', array("label_attr" => array("class" => "col-xs-2 control-label"), "label" => "Votre commentaire"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
        <div class=\"col-xs-6\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        </div>
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post", array()), 'row');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Envoyez", "attr" => array("class" => "btn btn-default")));
        echo "
    </div>
</div>
</div>";
        
        $__internal_5704e750f2ba4a4107112581a62792ed9a44d3caa9c0a9aefc2ac9cd8f13e091->leave($__internal_5704e750f2ba4a4107112581a62792ed9a44d3caa9c0a9aefc2ac9cd8f13e091_prof);

    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  77 => 27,  73 => 26,  67 => 23,  62 => 21,  58 => 20,  49 => 14,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <h2>Laisser un commentaire</h2>*/
/* */
/* <div class="well">*/
/* <div class="row">*/
/*     <div class="col-xs-8">*/
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.name, "Vote nom", {'label_attr': {'class': 'col-xs-2 control-label'}}) }}*/
/*             {{ form_errors(form.name) }}*/
/* */
/*         <div class="col-xs-6">*/
/*             {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*         </div>*/
/* */
/*      */
/*         <div class="form-group">*/
/*             {{ form_label(form.message, "Votre commentaire", {'label_attr': {'class': 'col-xs-2 control-label'}}) }}*/
/*             {{ form_errors(form.message) }}*/
/*         <div class="col-xs-6">*/
/*             {{ form_widget(form.message, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*         </div>*/
/*         {{ form_row(form.post) }}*/
/*         {{ form_widget(form._token) }}*/
/*         {{ form_widget(form.save, { 'label': 'Envoyez' ,'attr': {'class': 'btn btn-default'}}) }}*/
/*     </div>*/
/* </div>*/
/* </div>*/
