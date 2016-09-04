<?php

/* StudioSiteBundle:Site:wedding.html.twig */
class __TwigTemplate_d93406b3d4a82a79ec71eed6c243e442421a1aaa10ac966975672717de5e36cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:wedding.html.twig", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    

<section>
<br>
<h1>Photographier votre mariage</h1>
<br>
<h2>Pourquoi un professionnel plutôt que le voisin?</h2>

    <p>Vous allez vous marier et vous souhaitez garder un souvenir photographique de cette journée. 
    Qui choisir ? Un membre de votre famille qui possède le dernier reflex numérique? 
    Un pseudo photographe qui propose les prix les plus bas? Vous allez vous marier et vous souhaitez garder un souvenir photographique de cette journée.
    Pour que ce jour exceptionnel reste inoubliable, faites le choix d’un photographe exerçant avec un statut professionnel respectant les règles en vigueur.
    C’est aussi l’assurance d’une écoute et de conseils personnalisés, du respect des engagements pris avec les futurs mariés, de la remise d’une facture à l’issue du paiement des travaux, d’un travail de qualité, d’un savoir faire issu de l’expérience et de la formation.</p>

<h2>Mon objectif</h2>

    <p>Participer à la réussite de cet événement familial, c'est mon métier.<br>
    Le grand jour approche, vous souhaiteriez immortaliser cet évènement pour préparer une petite surprise aux mariés. 
    Mais êtes-vous sûr d'avoir tout préparer pour être dans les meilleures conditions ? 
    L'officialisation d'une union est un évènement marquant qui revêt une importance particulière aux yeux des mariés. 
    Et quoi de mieux pour se remémorer cette journée que de magnifiques photos? 
    C'est la raison pour laquelle les clichés réalisés ce jour là se doivent d'être à la hauteur.</p>


<div class=\"row\">

    <div class=\"col-xs-12 col-md-4\">
        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("studio_site_day");
        echo "\">
            <img class=\"image_paysage thumbnail\"  src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wedding/flowers-837159_1920.jpg"), "html", null, true);
        echo "\" alt=\"bouquet de fleur\">
        </a>
        <p class=\"text-center\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("studio_site_day");
        echo "\">Au fil de la journée</p></a>
    </div>

    <div class=\"col-xs-12 col-md-4\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("studio_site_couple");
        echo "\">
            <img class=\"image_paysage thumbnail\" class=\"image_paysage thumbnail\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wedding//in-love-1071325_1920.jpg"), "html", null, true);
        echo "\" alt=\"couple de marié\">
        </a>
        <p class=\"text-center\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("studio_site_couple");
        echo "\">Les photos de couple</p></a>
    </div>

    <div class=\"col-xs-12 col-md-4\">
        <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("studio_site_group");
        echo "\" >
            <img class=\"image_paysage thumbnail\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wedding/fun-663196_1280.jpg"), "html", null, true);
        echo "\" alt=\"photo de famille à un mariage\">
        </a>
        <p class=\"text-center\"><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("studio_site_group");
        echo "\">Les photos de groupe</p></a>
    </div>

</div>

<p>Plusieurs forfaits s'offrent à vous selon vos envies. 
Je m'adapte à vous désirs en vous proposant des forfaits \"à la carte\" pour vous satisfaire et que le résultat soit à la hauteur de cet événement.
N'hésitez pas à me contacter pour des questions ou pour un devis personnalisé.</p>
<br>
</section>

";
    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:wedding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  96 => 47,  92 => 46,  85 => 42,  80 => 40,  76 => 39,  69 => 35,  64 => 33,  60 => 32,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* */
/* {% block content %}*/
/*     */
/* */
/* <section>*/
/* <br>*/
/* <h1>Photographier votre mariage</h1>*/
/* <br>*/
/* <h2>Pourquoi un professionnel plutôt que le voisin?</h2>*/
/* */
/*     <p>Vous allez vous marier et vous souhaitez garder un souvenir photographique de cette journée. */
/*     Qui choisir ? Un membre de votre famille qui possède le dernier reflex numérique? */
/*     Un pseudo photographe qui propose les prix les plus bas? Vous allez vous marier et vous souhaitez garder un souvenir photographique de cette journée.*/
/*     Pour que ce jour exceptionnel reste inoubliable, faites le choix d’un photographe exerçant avec un statut professionnel respectant les règles en vigueur.*/
/*     C’est aussi l’assurance d’une écoute et de conseils personnalisés, du respect des engagements pris avec les futurs mariés, de la remise d’une facture à l’issue du paiement des travaux, d’un travail de qualité, d’un savoir faire issu de l’expérience et de la formation.</p>*/
/* */
/* <h2>Mon objectif</h2>*/
/* */
/*     <p>Participer à la réussite de cet événement familial, c'est mon métier.<br>*/
/*     Le grand jour approche, vous souhaiteriez immortaliser cet évènement pour préparer une petite surprise aux mariés. */
/*     Mais êtes-vous sûr d'avoir tout préparer pour être dans les meilleures conditions ? */
/*     L'officialisation d'une union est un évènement marquant qui revêt une importance particulière aux yeux des mariés. */
/*     Et quoi de mieux pour se remémorer cette journée que de magnifiques photos? */
/*     C'est la raison pour laquelle les clichés réalisés ce jour là se doivent d'être à la hauteur.</p>*/
/* */
/* */
/* <div class="row">*/
/* */
/*     <div class="col-xs-12 col-md-4">*/
/*         <a href="{{ path('studio_site_day')}}">*/
/*             <img class="image_paysage thumbnail"  src="{{ asset("images/wedding/flowers-837159_1920.jpg")}}" alt="bouquet de fleur">*/
/*         </a>*/
/*         <p class="text-center"><a href="{{ path('studio_site_day')}}">Au fil de la journée</p></a>*/
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-md-4">*/
/*         <a href="{{ path('studio_site_couple')}}">*/
/*             <img class="image_paysage thumbnail" class="image_paysage thumbnail" src="{{ asset("images/wedding//in-love-1071325_1920.jpg")}}" alt="couple de marié">*/
/*         </a>*/
/*         <p class="text-center"><a href="{{ path('studio_site_couple')}}">Les photos de couple</p></a>*/
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-md-4">*/
/*         <a href="{{ path('studio_site_group')}}" >*/
/*             <img class="image_paysage thumbnail" src="{{ asset("images/wedding/fun-663196_1280.jpg")}}" alt="photo de famille à un mariage">*/
/*         </a>*/
/*         <p class="text-center"><a href="{{ path('studio_site_group')}}">Les photos de groupe</p></a>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <p>Plusieurs forfaits s'offrent à vous selon vos envies. */
/* Je m'adapte à vous désirs en vous proposant des forfaits "à la carte" pour vous satisfaire et que le résultat soit à la hauteur de cet événement.*/
/* N'hésitez pas à me contacter pour des questions ou pour un devis personnalisé.</p>*/
/* <br>*/
/* </section>*/
/* */
/* {% endblock %}*/
