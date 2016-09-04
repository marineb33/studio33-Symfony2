<?php

/* StudioSiteBundle:Site:comment.html.twig */
class __TwigTemplate_b02cbdcbd6fd971b68e4fb13bd4a2ad6e78cc0f3270fc5e2d39ed7de2a10c0d9 extends Twig_Template
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
        // line 1
        echo "<h2>Laisser un commentaire</h2>

<div class=\"well\">
<div class=\"row\">
    <div class=\"col-xs-8\">
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label', array("label_attr" => array("class" => "col-xs-2 control-label"), "label" => "Vote nom"));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "

        <div class=\"col-xs-6\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        </div>

     
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'label', array("label_attr" => array("class" => "col-xs-2 control-label"), "label" => "Votre commentaire"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
        <div class=\"col-xs-6\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        </div>
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "post", array()), 'row');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("label" => "Envoyez", "attr" => array("class" => "btn btn-default")));
        echo "
    </div>
</div>
</div>";
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
        return array (  78 => 28,  74 => 27,  70 => 26,  64 => 23,  59 => 21,  55 => 20,  46 => 14,  40 => 11,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
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
