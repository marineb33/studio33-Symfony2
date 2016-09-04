<?php

/* StudioSiteBundle:Site:eviter_le_flou_du_bouger.html.twig */
class __TwigTemplate_bee318c65556b4c488cbfe75e090a12299bc840823e95765ac489747fcd5a0fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:eviter_le_flou_du_bouger.html.twig", 1);
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
        $__internal_fa1d8878a30be11900bcb608ee02df1585684ce071dcd3d0ba7d517cc5913578 = $this->env->getExtension("native_profiler");
        $__internal_fa1d8878a30be11900bcb608ee02df1585684ce071dcd3d0ba7d517cc5913578->enter($__internal_fa1d8878a30be11900bcb608ee02df1585684ce071dcd3d0ba7d517cc5913578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudioSiteBundle:Site:eviter_le_flou_du_bouger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1d8878a30be11900bcb608ee02df1585684ce071dcd3d0ba7d517cc5913578->leave($__internal_fa1d8878a30be11900bcb608ee02df1585684ce071dcd3d0ba7d517cc5913578_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6c89741a41c2519cb4ffe0130c7fd200a443e522fb580b80013e99fa6c4e265 = $this->env->getExtension("native_profiler");
        $__internal_f6c89741a41c2519cb4ffe0130c7fd200a443e522fb580b80013e99fa6c4e265->enter($__internal_f6c89741a41c2519cb4ffe0130c7fd200a443e522fb580b80013e99fa6c4e265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
<h1 class=\"text-center\">Eviter le flou du bouger</h1>   
<br>
<div class=\"row\">
  <div class=\"col-xs-12 col-md-6\">
    <h2 class=\"text-center\">Le flou de bougé du photographe</h2> 
    <p class=\"text-justify\">Dans ce cas, le bougé affecte toute la surface de l’image, car c’est l’appareil qui a bougé pendant le temps de la pose. Lors de vos prises de vue, vous devrez bien surveiller l’écran arrière de votre appareil, en zoomant au maximum. Il est parfois difficile à détecter mais si vous ne le faites pas dès la prise de vue, il n’y aura aucun moyen de sauver vos photos plus tard. Il faut donc prendre toutes les sécurités pour éviter cet écueil.<br>
        À la prise de vue, il est possible de supprimer le flou de bougé du photographe de diverses manières :
        <ul>
            <li>Choix d’une vitesse d’obturation plus élevée.</li>
            <li>Utilisation d’un appui solide pour votre matériel.</li>
            <li>Utilisation d’un flash afin de figer l’action pendant la durée très brève de l’éclair.</li>
        </ul>
        Notez également que le flou sera augmenté de manière proportionnelle à la focale de l’objectif que vous utilisez. Ainsi, si vous utilisez un téléobjectif qui grossit beaucoup, les vibrations seront d’autant plus perceptibles. On se rend très bien compte de ce phénomène lorsqu’on regarde à travers une paire de jumelles : on a l’impression de trembler beaucoup plus qu’en temps normal !
    </p>
  </div>
  <div class=\"col-xs-12 col-md-6\">
        <img class=\"image_recadre center-block\" src=\"/images/blog/photo-art-60248_1920.jpg\" alt=\"image floue\"/> 
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h2 class=\"text-center\">Le fou de bougé du sujet</h2>
                <p class=\"text-justify\">Si le fond de votre image est nette, mais que votre sujet présente encore un flou de bougé, vous êtes en présence d’un flou de bougé du sujet, dû à une vitesse d’obturation insuffisante. C’est le cas le plus fréquent en photo de sport. En effet, les sportifs produisent des mouvements brusques, qu’il faut gérer à l’aide d’une vitesse d’obturation adaptée à la vitesse de ces mouvements. Même si vous avez pris toutes les précautions en matière de stabilisation, il est impossible par exemple de gérer un sprinter en pleine course avec une vitesse de 1/60 s. Le trépied et l’objectif stabilisé ne vous seront d’aucune utilité ici. La seule méthode (en dehors de la photographie au ash que nous verrons plus loin) pour gérer son action consiste à augmenter la vitesse d’obturation, c’est-à-dire à réduire le temps de pose.
                </p>
            </div>
       </div>
  </div>
</div>   
    
<a class=\"btn btn-default glyphicon glyphicon-arrow-left\" aria-hidden=\"true\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("studio_site_blog");
        echo "\" role=\"button\"> Retour</a>  
<br>

";
        
        $__internal_f6c89741a41c2519cb4ffe0130c7fd200a443e522fb580b80013e99fa6c4e265->leave($__internal_f6c89741a41c2519cb4ffe0130c7fd200a443e522fb580b80013e99fa6c4e265_prof);

    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:eviter_le_flou_du_bouger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 32,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block content %}*/
/*     */
/* <h1 class="text-center">Eviter le flou du bouger</h1>   */
/* <br>*/
/* <div class="row">*/
/*   <div class="col-xs-12 col-md-6">*/
/*     <h2 class="text-center">Le flou de bougé du photographe</h2> */
/*     <p class="text-justify">Dans ce cas, le bougé affecte toute la surface de l’image, car c’est l’appareil qui a bougé pendant le temps de la pose. Lors de vos prises de vue, vous devrez bien surveiller l’écran arrière de votre appareil, en zoomant au maximum. Il est parfois difficile à détecter mais si vous ne le faites pas dès la prise de vue, il n’y aura aucun moyen de sauver vos photos plus tard. Il faut donc prendre toutes les sécurités pour éviter cet écueil.<br>*/
/*         À la prise de vue, il est possible de supprimer le flou de bougé du photographe de diverses manières :*/
/*         <ul>*/
/*             <li>Choix d’une vitesse d’obturation plus élevée.</li>*/
/*             <li>Utilisation d’un appui solide pour votre matériel.</li>*/
/*             <li>Utilisation d’un flash afin de figer l’action pendant la durée très brève de l’éclair.</li>*/
/*         </ul>*/
/*         Notez également que le flou sera augmenté de manière proportionnelle à la focale de l’objectif que vous utilisez. Ainsi, si vous utilisez un téléobjectif qui grossit beaucoup, les vibrations seront d’autant plus perceptibles. On se rend très bien compte de ce phénomène lorsqu’on regarde à travers une paire de jumelles : on a l’impression de trembler beaucoup plus qu’en temps normal !*/
/*     </p>*/
/*   </div>*/
/*   <div class="col-xs-12 col-md-6">*/
/*         <img class="image_recadre center-block" src="/images/blog/photo-art-60248_1920.jpg" alt="image floue"/> */
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <h2 class="text-center">Le fou de bougé du sujet</h2>*/
/*                 <p class="text-justify">Si le fond de votre image est nette, mais que votre sujet présente encore un flou de bougé, vous êtes en présence d’un flou de bougé du sujet, dû à une vitesse d’obturation insuffisante. C’est le cas le plus fréquent en photo de sport. En effet, les sportifs produisent des mouvements brusques, qu’il faut gérer à l’aide d’une vitesse d’obturation adaptée à la vitesse de ces mouvements. Même si vous avez pris toutes les précautions en matière de stabilisation, il est impossible par exemple de gérer un sprinter en pleine course avec une vitesse de 1/60 s. Le trépied et l’objectif stabilisé ne vous seront d’aucune utilité ici. La seule méthode (en dehors de la photographie au ash que nous verrons plus loin) pour gérer son action consiste à augmenter la vitesse d’obturation, c’est-à-dire à réduire le temps de pose.*/
/*                 </p>*/
/*             </div>*/
/*        </div>*/
/*   </div>*/
/* </div>   */
/*     */
/* <a class="btn btn-default glyphicon glyphicon-arrow-left" aria-hidden="true" href="{{ path("studio_site_blog") }}" role="button"> Retour</a>  */
/* <br>*/
/* */
/* {% endblock %}*/
