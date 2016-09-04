<?php

/* StudioSiteBundle:Site:portraits.html.twig */
class __TwigTemplate_b93d52513c0bcb353fcc9819fc7d6231f310a33e4f6b959db28ce441a19c7152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:portraits.html.twig", 1);
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
        echo "<section>
<br>
<h1>Le portrait</h1>
<br>
<h2>La perspective sur le corps et le visage</h2>

    <p>Il faut tout d’abord comprendre et admettre que la représentation photographique est très différente de la vision humaine. 
    L’objectif construit une image à partir d’un unique point de vue. Projette celle-ci en une fois sur la surface plane du lm ou du capteur. 
    Nos yeux, au contraire, procèdent à l’analyse successive de tous les points de la scène. 
    Un peu à la manière d’une caméra de télévision, en rendant compte du relief dont la sensation nous est donnée par la vision binoculaire (stéréoscopie). 
    Combinée à l’effort d’accommodation des deux yeux dont les axes optiques convergent sur le point analysé à un instant donné.
    Tandis que les cristallins, les lentilles de nos yeux, s’aplatissent ou se bombent pour assurer la mise au point en fonction de la distance de l’élément du sujet regardé.</p>

<h2>Focale et point de vue</h2>

    <p>S’il s’agit d’un portrait en buste, le visage n’occupe alors que le tiers ou la moitié de la hauteur du format.
    On peut adopter une focale plus courte, par exemple 75 à 85 mm en 24 x 36. Dans ce cas, l’angle de champ est plus grand.
    Mais puisque l’on doit prendre plus de recul pour cadrer le sujet, la distance du point de vue est du même ordre et la perspective est inchangée.
    Vous pouvez raccourcir davantage la focale pour un portrait en pied. Surtout si le personnage (ou les personnages s’il s’agit d’un groupe) n’est pas placé trop près d’un des bords du format. 
    Les déformations s’il y en a ne sont jamais gênantes vers le centre de l’image.
    Cependant, l’argument fondamental en faveur d’une plus courte focale que la « théorique » est d’ordre pratique. 
    En intérieur ou en studio on ne dispose généralement pas du recul qui serait nécessaire !</p>


<div class=\"row\">

    <div class=\"col-xs-12 col-sm-4\">
        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("studio_site_kids");
        echo "\">
            <img class=\"image_portrait thumbnail\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portraits/girl-714212_1280.jpg"), "html", null, true);
        echo "\" alt=\"petite fille\">
        </a>
        <p class=\"text-center\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("studio_site_kids");
        echo "\">Les photos d'enfant</p></a>
    </div>

    <div class=\"col-xs-12 col-sm-4\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("studio_site_adult");
        echo "\">
            <img class=\"image_portrait thumbnail\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portraits/girl-1527959_1280.jpg"), "html", null, true);
        echo "\" alt=\"portrait femme\">
        </a>
        <p class=\"text-center\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("studio_site_adult");
        echo "\">Les photos d'adulte</p></a>
    </div>

    <div class=\"col-xs-12 col-sm-4\">
        <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("studio_site_family");
        echo "\">
            <img class=\"image_portrait thumbnail\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portraits/family-932245_1280.jpg"), "html", null, true);
        echo "\" alt=\"famille dans une voiture\">
        </a>
        <p class=\"text-center\"><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("studio_site_family");
        echo "\">Les photos de famille</p></a>
    </div>

</div>
<br>   
</section>
";
    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:portraits.html.twig";
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
/* <section>*/
/* <br>*/
/* <h1>Le portrait</h1>*/
/* <br>*/
/* <h2>La perspective sur le corps et le visage</h2>*/
/* */
/*     <p>Il faut tout d’abord comprendre et admettre que la représentation photographique est très différente de la vision humaine. */
/*     L’objectif construit une image à partir d’un unique point de vue. Projette celle-ci en une fois sur la surface plane du lm ou du capteur. */
/*     Nos yeux, au contraire, procèdent à l’analyse successive de tous les points de la scène. */
/*     Un peu à la manière d’une caméra de télévision, en rendant compte du relief dont la sensation nous est donnée par la vision binoculaire (stéréoscopie). */
/*     Combinée à l’effort d’accommodation des deux yeux dont les axes optiques convergent sur le point analysé à un instant donné.*/
/*     Tandis que les cristallins, les lentilles de nos yeux, s’aplatissent ou se bombent pour assurer la mise au point en fonction de la distance de l’élément du sujet regardé.</p>*/
/* */
/* <h2>Focale et point de vue</h2>*/
/* */
/*     <p>S’il s’agit d’un portrait en buste, le visage n’occupe alors que le tiers ou la moitié de la hauteur du format.*/
/*     On peut adopter une focale plus courte, par exemple 75 à 85 mm en 24 x 36. Dans ce cas, l’angle de champ est plus grand.*/
/*     Mais puisque l’on doit prendre plus de recul pour cadrer le sujet, la distance du point de vue est du même ordre et la perspective est inchangée.*/
/*     Vous pouvez raccourcir davantage la focale pour un portrait en pied. Surtout si le personnage (ou les personnages s’il s’agit d’un groupe) n’est pas placé trop près d’un des bords du format. */
/*     Les déformations s’il y en a ne sont jamais gênantes vers le centre de l’image.*/
/*     Cependant, l’argument fondamental en faveur d’une plus courte focale que la « théorique » est d’ordre pratique. */
/*     En intérieur ou en studio on ne dispose généralement pas du recul qui serait nécessaire !</p>*/
/* */
/* */
/* <div class="row">*/
/* */
/*     <div class="col-xs-12 col-sm-4">*/
/*         <a href="{{ path('studio_site_kids')}}">*/
/*             <img class="image_portrait thumbnail" src="{{ asset("images/portraits/girl-714212_1280.jpg")}}" alt="petite fille">*/
/*         </a>*/
/*         <p class="text-center"><a href="{{ path('studio_site_kids')}}">Les photos d'enfant</p></a>*/
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-sm-4">*/
/*         <a href="{{ path('studio_site_adult')}}">*/
/*             <img class="image_portrait thumbnail" src="{{ asset("images/portraits/girl-1527959_1280.jpg")}}" alt="portrait femme">*/
/*         </a>*/
/*         <p class="text-center"><a href="{{ path('studio_site_adult')}}">Les photos d'adulte</p></a>*/
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-sm-4">*/
/*         <a href="{{ path('studio_site_family')}}">*/
/*             <img class="image_portrait thumbnail" src="{{ asset("images/portraits/family-932245_1280.jpg")}}" alt="famille dans une voiture">*/
/*         </a>*/
/*         <p class="text-center"><a href="{{ path('studio_site_family')}}">Les photos de famille</p></a>*/
/*     </div>*/
/* */
/* </div>*/
/* <br>   */
/* </section>*/
/* {% endblock %}*/
