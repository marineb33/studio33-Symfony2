<?php

/* StudioSiteBundle:Site:price.html.twig */
class __TwigTemplate_9eef66d7e0637d944623de61e5d36c2e1cd2ac9f71231c13704e8e645009c3eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:price.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/hover.css"), "html", null, true);
        echo "\">
<link href=\"https://fonts.googleapis.com/css?family=Cookie|Ubuntu+Condensed\" rel=\"stylesheet\">

";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "    <title>Studio33 Price</title>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    

<br>
<h1>Les tarifs</h1>
<br>
   
<div class=\"row\">
    <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"hovereffect\">
            <img class=\"img-responsive\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/price/kid-849363_1280.jpg"), "html", null, true);
        echo "\" alt=\"bébé nu avec une cravate\">
            <div class=\"overlay\">
                <h2>Portrait bébé</h2>
                <span class=\"info\" >
                    <ul>
                       <li>En studio, chez vous ou à l'endroit de votre choix ;</li>
                       <li>plusieurs fonds et accessoires à disposition ;</li>
                       <li>prise de vue 75 photos numériques en HD ;</li>
                       <li>10 photos retouchées en HD.</li>
                    </ul>
                    <p class=\"text-center\">130 euros.</p>
                </span>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"hovereffect\">
            <img class=\"img-responsive\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/price/girl-714212_1280.jpg"), "html", null, true);
        echo "\" alt=\"petite fille qui mange une clémentine\">
            <div class=\"overlay\">
               <h2>Portrait enfant</h2>
               <span class=\"info\" >
                    <ul>
                       <li>En studio, chez vous ou à l'endroit de votre choix ;</li>
                       <li>plusieurs fonds à disposition ;</li>
                       <li>prise de vue 100 photos numériques en HD ;</li>
                       <li>15 photos retouchées en HD.</li>
                    </ul>
                   <p class=\"text-center\">130 euros.</p>
                </span>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"hovereffect\">
            <img class=\"img-responsive\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/price/face-1146038_1920.jpg"), "html", null, true);
        echo "\" alt=\"portrait d'une femme\">
            <div class=\"overlay\">
               <h2>Portrait féminin</h2>
               <span class=\"info\" >
                    <ul>
                       <li>En studio, chez vous ou à l'endroit de votre choix ;</li>
                       <li>5 tenues différentes ;</li>
                       <li>shooting 3h ;</li>
                       <li>3 fonds différents ;</li>
                       <li>maquillage et coiffure ;</li>
                       <li>prise de vue 100 photos numériques en HD ;</li>
                       <li>15 photos retouchées en HD.</li>
                    </ul>
                   <p class=\"text-center\">200 euros.</p>
                </span>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"hovereffect\">
            <img class=\"img-responsive\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/price/handsome-1504988_1920.jpg"), "html", null, true);
        echo "\" alt=\"portrait d'un homme\">
            <div class=\"overlay\">
               <h2>Portrait masculin</h2>
                <span class=\"info\" >
                    <ul>
                       <li>En studio, chez vous ou à l'endroit de votre choix ;</li>
                       <li>2-3 tenues différentes ;</li>
                       <li>shooting 1h30 ;</li>
                       <li>2 fonds différents ;</li>
                       <li>prise de vue 100 photos numériques en HD ;</li>
                       <li>15 photos retouchées en HD.</li>
                    </ul>
                   <p class=\"text-center\">130 euros.</p>
                </span>
            </div>
        </div>
    </div>
</div>
<br>
    
<div class=\"row\">
    <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"hovereffect\">
            <img class=\"img-responsive\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/price/baby-17374_1920.jpg"), "html", null, true);
        echo "\" alt=\"portrait parents avec un bébé\">
            <div class=\"overlay\">
               <h2>Famille 3-4 personnes</h2>
                <span class=\"info\" >
                    <ul>
                       <li>En studio, chez vous ou à l'endroit de votre choix ;</li>
                       <li>2-3 tenues différentes ;</li>
                       <li>shooting 2h ;</li>
                       <li>2 fonds différents ;</li>
                       <li>prise de vue 150 photos numériques en HD ;</li>
                       <li>20 photos retouchées en HD.</li>
                    </ul>
                   <p class=\"text-center\">200 euros.</p>
                </span>
            </div>
        </div>
    </div>

    <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"hovereffect\">
            <img class=\"img-responsive\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/price/stockvault-family124687.jpg"), "html", null, true);
        echo "\" alt=\"parents avec 4enfants sur la plage\">
            <div class=\"overlay\">
                <h2>Famille 5-6 personnes</h2>
                <span class=\"info\" >
                    <ul>
                       <li>En studio, chez vous ou à l'endroit de votre choix ;</li>
                       <li>2-3 tenues différentes ;</li>
                       <li>shooting 2h30 ;</li>
                       <li>2 fonds différents ;</li>
                       <li>prise de vue 150 photos numériques en HD ;</li>
                       <li>25 photos retouchées en HD.</li>
                    </ul>
                    <p class=\"text-center\">260 euros.<br>
                    (Au-delà de 6 personnes, compter 25 euros par personne supplémentaire)</p>
                </span>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"hovereffect\">
            <img class=\"img-responsive\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/price/bride-454144_1280.jpg"), "html", null, true);
        echo "\" alt=\"mariés qui s'embrassent\">
            <div class=\"overlay\">
               <h2>Mariage reportage journée</h2>
               <span class=\"info\" >
                   <ul>
                       <li>Photos des préparatifs ;</li>
                       <li>cérémonie civile, cérémonie religieuse ou laïque ;</li>
                       <li>photos de couple ;</li>
                       <li>photos de groupe ;</li>
                       <li>photos du cocktail et début du dîner ;</li>
                       <li>Galerie photo HD internet durant 3 mois.</li>
                    </ul>
                    <p class=\"text-center\">1500 euros.<br>
                    Livre photo 250 euros supplémentaires</p>
               </span>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"hovereffect\">
            <img class=\"img-responsive\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/price/ring-634531_1280.jpg"), "html", null, true);
        echo "\" alt=\"bouquet de la mariée avec une alliance\">
            <div class=\"overlay\">
               <h2>Mariage à la carte</h2>
               <span class=\"info text-center\" >Si vous avez envie d'un photographe juste pour la cérémonie, juste pour les photos de couple ou pour un moment de la journée, contactez-moi pour un devis personnalisé.
               </span>
            </div>
        </div>
    </div>
</div>
<br>
";
    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 159,  202 => 139,  179 => 119,  156 => 99,  130 => 76,  107 => 56,  87 => 39,  67 => 22,  56 => 13,  53 => 12,  48 => 10,  45 => 9,  37 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block stylesheets %}*/
/* {{parent()}}*/
/* <link rel="stylesheet" href="{{ asset('css/hover.css')}}">*/
/* <link href="https://fonts.googleapis.com/css?family=Cookie|Ubuntu+Condensed" rel="stylesheet">*/
/* */
/* {% endblock %}*/
/* {% block head %}*/
/*     <title>Studio33 Price</title>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     */
/* */
/* <br>*/
/* <h1>Les tarifs</h1>*/
/* <br>*/
/*    */
/* <div class="row">*/
/*     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="hovereffect">*/
/*             <img class="img-responsive" src="{{ asset("images/price/kid-849363_1280.jpg")}}" alt="bébé nu avec une cravate">*/
/*             <div class="overlay">*/
/*                 <h2>Portrait bébé</h2>*/
/*                 <span class="info" >*/
/*                     <ul>*/
/*                        <li>En studio, chez vous ou à l'endroit de votre choix ;</li>*/
/*                        <li>plusieurs fonds et accessoires à disposition ;</li>*/
/*                        <li>prise de vue 75 photos numériques en HD ;</li>*/
/*                        <li>10 photos retouchées en HD.</li>*/
/*                     </ul>*/
/*                     <p class="text-center">130 euros.</p>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="hovereffect">*/
/*             <img class="img-responsive" src="{{ asset("images/price/girl-714212_1280.jpg")}}" alt="petite fille qui mange une clémentine">*/
/*             <div class="overlay">*/
/*                <h2>Portrait enfant</h2>*/
/*                <span class="info" >*/
/*                     <ul>*/
/*                        <li>En studio, chez vous ou à l'endroit de votre choix ;</li>*/
/*                        <li>plusieurs fonds à disposition ;</li>*/
/*                        <li>prise de vue 100 photos numériques en HD ;</li>*/
/*                        <li>15 photos retouchées en HD.</li>*/
/*                     </ul>*/
/*                    <p class="text-center">130 euros.</p>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="hovereffect">*/
/*             <img class="img-responsive" src="{{ asset("images/price/face-1146038_1920.jpg")}}" alt="portrait d'une femme">*/
/*             <div class="overlay">*/
/*                <h2>Portrait féminin</h2>*/
/*                <span class="info" >*/
/*                     <ul>*/
/*                        <li>En studio, chez vous ou à l'endroit de votre choix ;</li>*/
/*                        <li>5 tenues différentes ;</li>*/
/*                        <li>shooting 3h ;</li>*/
/*                        <li>3 fonds différents ;</li>*/
/*                        <li>maquillage et coiffure ;</li>*/
/*                        <li>prise de vue 100 photos numériques en HD ;</li>*/
/*                        <li>15 photos retouchées en HD.</li>*/
/*                     </ul>*/
/*                    <p class="text-center">200 euros.</p>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="hovereffect">*/
/*             <img class="img-responsive" src="{{ asset("images/price/handsome-1504988_1920.jpg")}}" alt="portrait d'un homme">*/
/*             <div class="overlay">*/
/*                <h2>Portrait masculin</h2>*/
/*                 <span class="info" >*/
/*                     <ul>*/
/*                        <li>En studio, chez vous ou à l'endroit de votre choix ;</li>*/
/*                        <li>2-3 tenues différentes ;</li>*/
/*                        <li>shooting 1h30 ;</li>*/
/*                        <li>2 fonds différents ;</li>*/
/*                        <li>prise de vue 100 photos numériques en HD ;</li>*/
/*                        <li>15 photos retouchées en HD.</li>*/
/*                     </ul>*/
/*                    <p class="text-center">130 euros.</p>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <br>*/
/*     */
/* <div class="row">*/
/*     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="hovereffect">*/
/*             <img class="img-responsive" src="{{ asset("images/price/baby-17374_1920.jpg")}}" alt="portrait parents avec un bébé">*/
/*             <div class="overlay">*/
/*                <h2>Famille 3-4 personnes</h2>*/
/*                 <span class="info" >*/
/*                     <ul>*/
/*                        <li>En studio, chez vous ou à l'endroit de votre choix ;</li>*/
/*                        <li>2-3 tenues différentes ;</li>*/
/*                        <li>shooting 2h ;</li>*/
/*                        <li>2 fonds différents ;</li>*/
/*                        <li>prise de vue 150 photos numériques en HD ;</li>*/
/*                        <li>20 photos retouchées en HD.</li>*/
/*                     </ul>*/
/*                    <p class="text-center">200 euros.</p>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="hovereffect">*/
/*             <img class="img-responsive" src="{{ asset("images/price/stockvault-family124687.jpg")}}" alt="parents avec 4enfants sur la plage">*/
/*             <div class="overlay">*/
/*                 <h2>Famille 5-6 personnes</h2>*/
/*                 <span class="info" >*/
/*                     <ul>*/
/*                        <li>En studio, chez vous ou à l'endroit de votre choix ;</li>*/
/*                        <li>2-3 tenues différentes ;</li>*/
/*                        <li>shooting 2h30 ;</li>*/
/*                        <li>2 fonds différents ;</li>*/
/*                        <li>prise de vue 150 photos numériques en HD ;</li>*/
/*                        <li>25 photos retouchées en HD.</li>*/
/*                     </ul>*/
/*                     <p class="text-center">260 euros.<br>*/
/*                     (Au-delà de 6 personnes, compter 25 euros par personne supplémentaire)</p>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="hovereffect">*/
/*             <img class="img-responsive" src="{{ asset("images/price/bride-454144_1280.jpg")}}" alt="mariés qui s'embrassent">*/
/*             <div class="overlay">*/
/*                <h2>Mariage reportage journée</h2>*/
/*                <span class="info" >*/
/*                    <ul>*/
/*                        <li>Photos des préparatifs ;</li>*/
/*                        <li>cérémonie civile, cérémonie religieuse ou laïque ;</li>*/
/*                        <li>photos de couple ;</li>*/
/*                        <li>photos de groupe ;</li>*/
/*                        <li>photos du cocktail et début du dîner ;</li>*/
/*                        <li>Galerie photo HD internet durant 3 mois.</li>*/
/*                     </ul>*/
/*                     <p class="text-center">1500 euros.<br>*/
/*                     Livre photo 250 euros supplémentaires</p>*/
/*                </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="hovereffect">*/
/*             <img class="img-responsive" src="{{ asset("images/price/ring-634531_1280.jpg")}}" alt="bouquet de la mariée avec une alliance">*/
/*             <div class="overlay">*/
/*                <h2>Mariage à la carte</h2>*/
/*                <span class="info text-center" >Si vous avez envie d'un photographe juste pour la cérémonie, juste pour les photos de couple ou pour un moment de la journée, contactez-moi pour un devis personnalisé.*/
/*                </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <br>*/
/* {% endblock %}*/
