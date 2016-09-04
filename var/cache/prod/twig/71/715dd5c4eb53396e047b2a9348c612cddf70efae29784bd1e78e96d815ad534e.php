<?php

/* StudioSiteBundle:Site:quel_objectif_et_pour_quoi_faire.html.twig */
class __TwigTemplate_e48dd8bcf54e10bb7789276ddf32ef89fd0066edd2abb873db7a4e3a5706d514 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        return array (  79 => 50,  31 => 4,  28 => 3,  11 => 1,);
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
