<?php

/* StudioSiteBundle:Site:group.html.twig */
class __TwigTemplate_0b608b02576282c82d8fb20cf987637fb92aff5112a374170f3f971cca2f5d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:group.html.twig", 1);
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
<h1>Les photos de groupe</h1>
<br>
<h2>Bien réussir les photos de groupe</h2>

    <p>Les photos de groupes sont quasi inévitables. Même si vous ne désirez pas en faire, un de vos invités exprimera toujours le souhait d’emporter un souvenir photographique des mariés.
    Ainsi débute l’effet boule de neige. Si l’un des invités peut poser avec vous, pourquoi pas les autres. 
    Il faut donc bien vous entendre avec votre photographe sur les prises de vues des groupes.
    Il y en aura t’il ? Oui ou non. Pas d’improvisation ! Dans cet exercice de style, je vais me transformer en gentille organisatrice, surdouée de patience et organisation. 
    Gagner du temps et profiter de la meilleure luminosité. Les mariés doivent patienter le temps du défilé des invités pour pauser avec eux. 
    Chaque sourire doit paraître naturel. Pour cela nous devons être efficaces et gagner du temps. Je doit être professionnelle, faire preuve de célérité et doit mener la séance avec créativité et récréativité. De façon que cela se passe le plus aisément possible, vous pouvez me confier la tâche. Avec mes astuces, un peu d’humour et d’autodérision, je ferai en sorte que vous ne poireautiez pas en sueur dans votre robe de mariée. Vous pouvez également me rédiger une liste de noms par groupe pour que moi-même me charge de l’appel.
    
    
<img class=\"image_paysage_panorama thumbnail\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wedding/group/wedding-1439008_1280.jpg"), "html", null, true);
        echo "\" alt=\"les mariés avec les filles et les garcons d'honneur a la plage\" class=\"img-responsive\">
 <div class=\"row\">

    <div class=\"col-xs-12 col-sm-4 \">
        <img class=\"image_paysage thumbnail\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wedding/group/sports-1482019_1280.jpg"), "html", null, true);
        echo "\" alt=\"tir a la corde entre hommes et femmes (mariage)\">
    </div>

    <div class=\"col-xs-12 col-sm-4 \">
        <img class=\"image_paysage thumbnail\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wedding/group/fun-663196_1280.jpg"), "html", null, true);
        echo "\" alt=\"photo de famille faisant des grimaces à un mariage\">
    </div>

    <div class=\"col-xs-12 col-sm-4 \">
        <img class=\"image_paysage thumbnail\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wedding/group/asian-1341650_1280.jpg"), "html", null, true);
        echo "\" alt=\"demoiselles et hommes d'onneur\">
    </div>

</div>

<a class=\"btn btn-default glyphicon glyphicon-arrow-left\" aria-hidden=\"true\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("studio_site_wedding");
        echo "\" role=\"button\"> Retour</a>
<br>
</section>
";
    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  69 => 32,  62 => 28,  55 => 24,  48 => 20,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* */
/* {% block content %}*/
/*     */
/* <section>*/
/* <br>   */
/* <h1>Les photos de groupe</h1>*/
/* <br>*/
/* <h2>Bien réussir les photos de groupe</h2>*/
/* */
/*     <p>Les photos de groupes sont quasi inévitables. Même si vous ne désirez pas en faire, un de vos invités exprimera toujours le souhait d’emporter un souvenir photographique des mariés.*/
/*     Ainsi débute l’effet boule de neige. Si l’un des invités peut poser avec vous, pourquoi pas les autres. */
/*     Il faut donc bien vous entendre avec votre photographe sur les prises de vues des groupes.*/
/*     Il y en aura t’il ? Oui ou non. Pas d’improvisation ! Dans cet exercice de style, je vais me transformer en gentille organisatrice, surdouée de patience et organisation. */
/*     Gagner du temps et profiter de la meilleure luminosité. Les mariés doivent patienter le temps du défilé des invités pour pauser avec eux. */
/*     Chaque sourire doit paraître naturel. Pour cela nous devons être efficaces et gagner du temps. Je doit être professionnelle, faire preuve de célérité et doit mener la séance avec créativité et récréativité. De façon que cela se passe le plus aisément possible, vous pouvez me confier la tâche. Avec mes astuces, un peu d’humour et d’autodérision, je ferai en sorte que vous ne poireautiez pas en sueur dans votre robe de mariée. Vous pouvez également me rédiger une liste de noms par groupe pour que moi-même me charge de l’appel.*/
/*     */
/*     */
/* <img class="image_paysage_panorama thumbnail" src="{{ asset("images/wedding/group/wedding-1439008_1280.jpg")}}" alt="les mariés avec les filles et les garcons d'honneur a la plage" class="img-responsive">*/
/*  <div class="row">*/
/* */
/*     <div class="col-xs-12 col-sm-4 ">*/
/*         <img class="image_paysage thumbnail" src="{{ asset("images/wedding/group/sports-1482019_1280.jpg")}}" alt="tir a la corde entre hommes et femmes (mariage)">*/
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-sm-4 ">*/
/*         <img class="image_paysage thumbnail" src="{{ asset("images/wedding/group/fun-663196_1280.jpg")}}" alt="photo de famille faisant des grimaces à un mariage">*/
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-sm-4 ">*/
/*         <img class="image_paysage thumbnail" src="{{ asset("images/wedding/group/asian-1341650_1280.jpg")}}" alt="demoiselles et hommes d'onneur">*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <a class="btn btn-default glyphicon glyphicon-arrow-left" aria-hidden="true" href="{{ path('studio_site_wedding')}}" role="button"> Retour</a>*/
/* <br>*/
/* </section>*/
/* {% endblock %}*/
