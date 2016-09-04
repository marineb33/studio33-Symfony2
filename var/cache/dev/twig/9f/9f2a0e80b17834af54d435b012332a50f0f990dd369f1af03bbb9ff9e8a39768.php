<?php

/* StudioSiteBundle:Site:quel_objectif_et_pour_quoi_faire.html.twig */
class __TwigTemplate_98d1d8a35ad7055d57290c8a7a7d61ee2ca83b838c6261d4574e0f8ca7e12899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:quel_objectif_et_pour_quoi_faire.html.twig", 1);
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
        $__internal_6d52329fc362dc6d5993b365684e8db081bbef02786fcbc7e2298a5fc1d20172 = $this->env->getExtension("native_profiler");
        $__internal_6d52329fc362dc6d5993b365684e8db081bbef02786fcbc7e2298a5fc1d20172->enter($__internal_6d52329fc362dc6d5993b365684e8db081bbef02786fcbc7e2298a5fc1d20172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudioSiteBundle:Site:quel_objectif_et_pour_quoi_faire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d52329fc362dc6d5993b365684e8db081bbef02786fcbc7e2298a5fc1d20172->leave($__internal_6d52329fc362dc6d5993b365684e8db081bbef02786fcbc7e2298a5fc1d20172_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_83695940069c97d33b1ecc0e37bd22751df7cbe5d216b80fd1cc46017d05c7e2 = $this->env->getExtension("native_profiler");
        $__internal_83695940069c97d33b1ecc0e37bd22751df7cbe5d216b80fd1cc46017d05c7e2->enter($__internal_83695940069c97d33b1ecc0e37bd22751df7cbe5d216b80fd1cc46017d05c7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo " 
<h1 class=\"text-center\">Quel objectif et pour quoi faire ?</h1>   
<br>

<div class=\"row\">
    <div class=\"col-xs-12 col-md-6\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\">
                <span  class=\"thumbnail\"><img src=\"/images/objectif/lens-1209823_1920.jpg\" alt=\"objectif\"/></span>
            </div>
            <div class=\"col-xs-12 col-md-6\"> 
                <span class=\"thumbnail\"><img src=\"/images/objectif/photo-256888_1920.jpg\" alt=\"objectif\"/></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h2>Le sport en intérieur ou extérieur:</h2>
                    <p>Plus vous êtes loin du sujet, plus vous choisirez un grossissement important (téléobjectif) avec un grand nombre de mm en deuxième position et une grande ouverture (F petit chiffre) pour la luminosité pour les sports en intérieur. NB que pour les circuits auto moto il est préférable d'avoir un minimum de 200mm</p>
                    <h2>La nature et les fleurs:</h2>
                    <p>Objectifs macro, et à peu près tout le reste.</p>
                    <h2>Les insectes:</h2>
                    <p>Objectifs macro, ou gros objectif exemple 70-300 (macro) le couplage de l’objectif à des bagues allonge ou l’utilisation de bonnette est vivement conseillée.</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class=\"col-xs-12 col-md-6\">
        <h2>Les paysages:</h2>
        <p>Le grand angle 10-20mm ; 18-55mm ; 28-70mm, Le macro 50mm<br>
        Pour avoir un angle de vue large on utilisera la focale la plus basse. Petit conseil prévoyez un filtre polarisant et ou un filtre UV.
        </p>
        <h2>Les portraits, natures mortes, sujet proche ...</h2>
        <p>Les fixes 50 mm; 80mm; 85mm. <br>
            Les multi : le 18-55mm; 28-135mm etc.<br>
            L’objectif macro 50mm<br>
            Entre 50mm et 85mm les résultats sont très bon pour ce style photographique !
        </p>
        <h2>Les bois, sous bois, gibier, et les oiseaux:</h2>
        <p>Le gibier étant assez craintif, il est préférable d’avoir un téléobjectif au dessus de 200mm sans oublier que les bois et sous bois sont assez ombrager donc prévoir un objectif avec une grande ouverture.
            Pour les photos de rivières et autres cours d’eau prévoyez les filtres UV et pola.<br>
            Pour les adeptes du « je shoote tout ce que je vois » les objectifs de grandes plage focales sont conseillés 28-300 etc. Ces exemples ne sont bien sur pas la règle absolue, car il est dans la plus par des cas possible de faire à peu près tout avec presque tout, on va dire alors que c’est préférable pour tel ou tel style d’avoir tel ou tel objectif.
        </p>
        
    </div>
</div>

<a class=\"btn btn-default glyphicon glyphicon-arrow-left\" aria-hidden=\"true\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("studio_site_blog");
        echo "\" role=\"button\"> Retour</a>  

<br>

";
        
        $__internal_83695940069c97d33b1ecc0e37bd22751df7cbe5d216b80fd1cc46017d05c7e2->leave($__internal_83695940069c97d33b1ecc0e37bd22751df7cbe5d216b80fd1cc46017d05c7e2_prof);

    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:quel_objectif_et_pour_quoi_faire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 50,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block content %}*/
/*  */
/* <h1 class="text-center">Quel objectif et pour quoi faire ?</h1>   */
/* <br>*/
/* */
/* <div class="row">*/
/*     <div class="col-xs-12 col-md-6">*/
/*         <div class="row">*/
/*             <div class="col-xs-12 col-md-6">*/
/*                 <span  class="thumbnail"><img src="/images/objectif/lens-1209823_1920.jpg" alt="objectif"/></span>*/
/*             </div>*/
/*             <div class="col-xs-12 col-md-6"> */
/*                 <span class="thumbnail"><img src="/images/objectif/photo-256888_1920.jpg" alt="objectif"/></span>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     <h2>Le sport en intérieur ou extérieur:</h2>*/
/*                     <p>Plus vous êtes loin du sujet, plus vous choisirez un grossissement important (téléobjectif) avec un grand nombre de mm en deuxième position et une grande ouverture (F petit chiffre) pour la luminosité pour les sports en intérieur. NB que pour les circuits auto moto il est préférable d'avoir un minimum de 200mm</p>*/
/*                     <h2>La nature et les fleurs:</h2>*/
/*                     <p>Objectifs macro, et à peu près tout le reste.</p>*/
/*                     <h2>Les insectes:</h2>*/
/*                     <p>Objectifs macro, ou gros objectif exemple 70-300 (macro) le couplage de l’objectif à des bagues allonge ou l’utilisation de bonnette est vivement conseillée.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/*     <div class="col-xs-12 col-md-6">*/
/*         <h2>Les paysages:</h2>*/
/*         <p>Le grand angle 10-20mm ; 18-55mm ; 28-70mm, Le macro 50mm<br>*/
/*         Pour avoir un angle de vue large on utilisera la focale la plus basse. Petit conseil prévoyez un filtre polarisant et ou un filtre UV.*/
/*         </p>*/
/*         <h2>Les portraits, natures mortes, sujet proche ...</h2>*/
/*         <p>Les fixes 50 mm; 80mm; 85mm. <br>*/
/*             Les multi : le 18-55mm; 28-135mm etc.<br>*/
/*             L’objectif macro 50mm<br>*/
/*             Entre 50mm et 85mm les résultats sont très bon pour ce style photographique !*/
/*         </p>*/
/*         <h2>Les bois, sous bois, gibier, et les oiseaux:</h2>*/
/*         <p>Le gibier étant assez craintif, il est préférable d’avoir un téléobjectif au dessus de 200mm sans oublier que les bois et sous bois sont assez ombrager donc prévoir un objectif avec une grande ouverture.*/
/*             Pour les photos de rivières et autres cours d’eau prévoyez les filtres UV et pola.<br>*/
/*             Pour les adeptes du « je shoote tout ce que je vois » les objectifs de grandes plage focales sont conseillés 28-300 etc. Ces exemples ne sont bien sur pas la règle absolue, car il est dans la plus par des cas possible de faire à peu près tout avec presque tout, on va dire alors que c’est préférable pour tel ou tel style d’avoir tel ou tel objectif.*/
/*         </p>*/
/*         */
/*     </div>*/
/* </div>*/
/* */
/* <a class="btn btn-default glyphicon glyphicon-arrow-left" aria-hidden="true" href="{{ path("studio_site_blog") }}" role="button"> Retour</a>  */
/* */
/* <br>*/
/* */
/* {% endblock %} */
/* */
