<?php

/* StudioSiteBundle:Site:contact.html.twig */
class __TwigTemplate_f91afc1b564f3e308c6f4170b6202924a3af1e2875a5a1d9f34c1544de04beb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:contact.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "


<div class=\"row\">
    <div class=\"col-xs-12 col-sm-5\">
        <br>
        <h1>Formulaire de contact</h1>
        <br>
       
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

          ";
        // line 16
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

          <div class=\"form-group\">
            ";
        // line 20
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Vote nom"));
        echo "

            ";
        // line 23
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "

            <div class=\"col-sm-8\">
              ";
        // line 27
        echo "              ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>

          ";
        // line 32
        echo "          <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Votre téléphone"));
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'errors');
        echo "
            <div class=\"col-sm-8\">
              ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>

          <div class=\"form-group\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Votre email"));
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
            <div class=\"col-sm-8\">
              ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>

          <div class=\"form-group\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Sujet"));
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'errors');
        echo "
            <div class=\"col-sm-8\">
              ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>

          <div class=\"form-group\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Message"));
        echo "
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
            <div class=\"col-sm-8\">
              ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>


        ";
        // line 66
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row', array("label" => "Envoyez", "attr" => array("class" => "btn btn-default")));
        echo "


        ";
        // line 72
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        ";
        // line 75
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
    <div class=\"col-xs-12 col-sm-7\">
        <br>
        <h1>Où nous trouver</h1>
        <br>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.0116756009797!2d-0.5712735847323177!3d44.8416955790986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d19baa385b%3A0x10d80aa8d5f454ac!2sLe+Miroir+d&#39;eau!5e0!3m2!1sfr!2sfr!4v1471114735312\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    </div>
</div> 
";
    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 75,  153 => 72,  146 => 66,  138 => 60,  133 => 58,  129 => 57,  121 => 52,  116 => 50,  112 => 49,  104 => 44,  99 => 42,  95 => 41,  87 => 36,  82 => 34,  78 => 33,  75 => 32,  67 => 27,  60 => 23,  54 => 20,  47 => 16,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig"%}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/* <div class="row">*/
/*     <div class="col-xs-12 col-sm-5">*/
/*         <br>*/
/*         <h1>Formulaire de contact</h1>*/
/*         <br>*/
/*        */
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*           {# Les erreurs générales du formulaire. #}*/
/*           {{ form_errors(form) }}*/
/* */
/*           <div class="form-group">*/
/*             {# Génération du label. #}*/
/*             {{ form_label(form.name, "Vote nom", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(form.name) }}*/
/* */
/*             <div class="col-sm-8">*/
/*               {# Génération de l'input. #}*/
/*               {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/* */
/*           {# Idem pour un autre champ. #}*/
/*           <div class="form-group">*/
/*             {{ form_label(form.phone, "Votre téléphone", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*             {{ form_errors(form.phone) }}*/
/*             <div class="col-sm-8">*/
/*               {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.email, "Votre email", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*             {{ form_errors(form.email) }}*/
/*             <div class="col-sm-8">*/
/*               {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.subject, "Sujet", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*             {{ form_errors(form.subject) }}*/
/*             <div class="col-sm-8">*/
/*               {{ form_widget(form.subject, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             {{ form_label(form.message, "Message", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*             {{ form_errors(form.message) }}*/
/*             <div class="col-sm-8">*/
/*               {{ form_widget(form.message, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/* */
/* */
/*         {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*         {{ form_row(form.save, { 'label': 'Envoyez' ,'attr': {'class': 'btn btn-default'}}) }}*/
/* */
/* */
/*         {# Génération automatique des champs pas encore écrits.*/
/*            Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*            et tous les champs cachés (type « hidden »). #}*/
/*         {{ form_rest(form) }}*/
/* */
/*         {# Fermeture de la balise <form> du formulaire HTML #}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     <div class="col-xs-12 col-sm-7">*/
/*         <br>*/
/*         <h1>Où nous trouver</h1>*/
/*         <br>*/
/*         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.0116756009797!2d-0.5712735847323177!3d44.8416955790986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d19baa385b%3A0x10d80aa8d5f454ac!2sLe+Miroir+d&#39;eau!5e0!3m2!1sfr!2sfr!4v1471114735312" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/*     </div>*/
/* </div> */
/* {% endblock %}*/
/* */
