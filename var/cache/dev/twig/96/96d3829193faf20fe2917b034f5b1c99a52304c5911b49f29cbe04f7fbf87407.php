<?php

/* StudioSiteBundle:Site:les_paysages.html.twig */
class __TwigTemplate_4a51ae40e6243b10fa639beca4b0144a762d0b1ad12c09414816a05cc377bfe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:les_paysages.html.twig", 1);
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
        $__internal_bd48a9c317c8cc23204fde515ffec4cecdfc1f21d6240f4a0fa7f252aa28fc75 = $this->env->getExtension("native_profiler");
        $__internal_bd48a9c317c8cc23204fde515ffec4cecdfc1f21d6240f4a0fa7f252aa28fc75->enter($__internal_bd48a9c317c8cc23204fde515ffec4cecdfc1f21d6240f4a0fa7f252aa28fc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudioSiteBundle:Site:les_paysages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd48a9c317c8cc23204fde515ffec4cecdfc1f21d6240f4a0fa7f252aa28fc75->leave($__internal_bd48a9c317c8cc23204fde515ffec4cecdfc1f21d6240f4a0fa7f252aa28fc75_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_117ae0dc8c35dcfa1bdf4138458ca6f5aaf275773807fd242a1ed7f8b61709e6 = $this->env->getExtension("native_profiler");
        $__internal_117ae0dc8c35dcfa1bdf4138458ca6f5aaf275773807fd242a1ed7f8b61709e6->enter($__internal_117ae0dc8c35dcfa1bdf4138458ca6f5aaf275773807fd242a1ed7f8b61709e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
<h1 class=\"text-center\">Bases de la photographie de paysage</h1>
<br>
<p>La photographie de paysage se plie à certaines règles afin de garantir un résultat de bonne qualité. Choix de l'objectif, de l'angle, de l'exposition, du moment, de son matériel, il implique avant tout un minimum d'observation et d'analyse, tout en prenant en compte le sentiment du photographe. La photographie numérique implique également une petite partie de post-traitement, nous verrons également comment retoucher vos photographies de paysage avec Photoshop.<br>
   Le paysage est l'organisation d'éléments dans un espace donné : montagnes, eau, ciel, plage par exemple. Pour le photographe, observateur, il s'agit de réussir à retranscrire sa propre lecture, à travers sa création, en y agençant tous ces éléments.
</p>   

<div class=\"row\">
    <div class=\"col-xs-12 col-md-6\">
        <h2>Choisir son objectif:</h2>
        <p>Le grand angle et ultra grand angle sont les objectifs de prédilection du photographe de paysage. Ils permettent de montrer aisément un vaste espace. De plus, ils agrandissent la profondeur de champ, afin d'avoir une photographie nette de 1m jusqu'à l'infini.
        </p>
        <h2>Choisir son materiel:</h2>
        <p>Un trépied, pour les poses longues; une télécommande pour éviter de faire bouger l'appareil lors du déclenchement; un pare-soleil, pour protéger la lentille de l'objectif du soleil; un filtre polarisant circulaire qui atténue les reflets dans les hautes lumières. Il renforce également le bleu du ciel par exemple.
        </p>
        <h2>Choisir son cadre:</h2>
        <p>Bien cadrer sa photo, c'est concentrer tous les éléments qui nous intéressent dans une seule image : la lumière, l'espace, et le sujet de notre photo. Essayez de vous placer face au sujet, et non à 45°. Faire ressentir au spectateur ce que vous ressentez sur le moment n'est pas toujours simple, il faut placer son point de vue avec finesse. Ne centrez pas votre sujet : un pont par exemple, une plage, une montagne. Centrer, c'est montrer une certaine hésitation de votre vision personnelle, laissez plus de place au sol ou au ciel selon ce que vous voulez montrer. Il y a cependant des exceptions, par exemple lorsque vous voulez appuyer une perspective ou une symétrie.
        </p>
    </div>
    <div class=\"col-xs-12 col-md-6\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\">
                <span  class=\"thumbnail\"><img src=\"/images/paysages/dawn-190055_1280.jpg\" alt=\"vue des sommets soleil couchant\"/></span>
            </div>
            <div class=\"col-xs-12 col-md-6\"> 
                <span class=\"thumbnail\"><img src=\"/images/paysages/prairie-679016_1920.jpg\" alt=\"prairie\"/></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h2>Choisir ses horaires:</h2>
                    <p>Le matin et la fin de journée offrent une lumière plus douce. Les lumières rasantes permettent aussi de mieux faire ressortir le relief. Ils aplatissent moins les dimensions que si vous preniez votre photo en plein été en début d'après-midi lorsque le soleil est vertical.</p>
                    <h2>Choisir ses réglages:</h2>
                    <p>Objectifs macro, ou gros objectif exemple 70-300 (macro) le couplage de l’objectif à des bagues allonge ou l’utilisation de bonnette est vivement conseillée.</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
<a class=\"btn btn-default glyphicon glyphicon-arrow-left\" aria-hidden=\"true\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("studio_site_blog");
        echo "\" role=\"button\"> Retour</a>  

<br>

";
        
        $__internal_117ae0dc8c35dcfa1bdf4138458ca6f5aaf275773807fd242a1ed7f8b61709e6->leave($__internal_117ae0dc8c35dcfa1bdf4138458ca6f5aaf275773807fd242a1ed7f8b61709e6_prof);

    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:les_paysages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 43,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block content %}*/
/*     */
/* <h1 class="text-center">Bases de la photographie de paysage</h1>*/
/* <br>*/
/* <p>La photographie de paysage se plie à certaines règles afin de garantir un résultat de bonne qualité. Choix de l'objectif, de l'angle, de l'exposition, du moment, de son matériel, il implique avant tout un minimum d'observation et d'analyse, tout en prenant en compte le sentiment du photographe. La photographie numérique implique également une petite partie de post-traitement, nous verrons également comment retoucher vos photographies de paysage avec Photoshop.<br>*/
/*    Le paysage est l'organisation d'éléments dans un espace donné : montagnes, eau, ciel, plage par exemple. Pour le photographe, observateur, il s'agit de réussir à retranscrire sa propre lecture, à travers sa création, en y agençant tous ces éléments.*/
/* </p>   */
/* */
/* <div class="row">*/
/*     <div class="col-xs-12 col-md-6">*/
/*         <h2>Choisir son objectif:</h2>*/
/*         <p>Le grand angle et ultra grand angle sont les objectifs de prédilection du photographe de paysage. Ils permettent de montrer aisément un vaste espace. De plus, ils agrandissent la profondeur de champ, afin d'avoir une photographie nette de 1m jusqu'à l'infini.*/
/*         </p>*/
/*         <h2>Choisir son materiel:</h2>*/
/*         <p>Un trépied, pour les poses longues; une télécommande pour éviter de faire bouger l'appareil lors du déclenchement; un pare-soleil, pour protéger la lentille de l'objectif du soleil; un filtre polarisant circulaire qui atténue les reflets dans les hautes lumières. Il renforce également le bleu du ciel par exemple.*/
/*         </p>*/
/*         <h2>Choisir son cadre:</h2>*/
/*         <p>Bien cadrer sa photo, c'est concentrer tous les éléments qui nous intéressent dans une seule image : la lumière, l'espace, et le sujet de notre photo. Essayez de vous placer face au sujet, et non à 45°. Faire ressentir au spectateur ce que vous ressentez sur le moment n'est pas toujours simple, il faut placer son point de vue avec finesse. Ne centrez pas votre sujet : un pont par exemple, une plage, une montagne. Centrer, c'est montrer une certaine hésitation de votre vision personnelle, laissez plus de place au sol ou au ciel selon ce que vous voulez montrer. Il y a cependant des exceptions, par exemple lorsque vous voulez appuyer une perspective ou une symétrie.*/
/*         </p>*/
/*     </div>*/
/*     <div class="col-xs-12 col-md-6">*/
/*         <div class="row">*/
/*             <div class="col-xs-12 col-md-6">*/
/*                 <span  class="thumbnail"><img src="/images/paysages/dawn-190055_1280.jpg" alt="vue des sommets soleil couchant"/></span>*/
/*             </div>*/
/*             <div class="col-xs-12 col-md-6"> */
/*                 <span class="thumbnail"><img src="/images/paysages/prairie-679016_1920.jpg" alt="prairie"/></span>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     <h2>Choisir ses horaires:</h2>*/
/*                     <p>Le matin et la fin de journée offrent une lumière plus douce. Les lumières rasantes permettent aussi de mieux faire ressortir le relief. Ils aplatissent moins les dimensions que si vous preniez votre photo en plein été en début d'après-midi lorsque le soleil est vertical.</p>*/
/*                     <h2>Choisir ses réglages:</h2>*/
/*                     <p>Objectifs macro, ou gros objectif exemple 70-300 (macro) le couplage de l’objectif à des bagues allonge ou l’utilisation de bonnette est vivement conseillée.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/* </div>*/
/* <a class="btn btn-default glyphicon glyphicon-arrow-left" aria-hidden="true" href="{{ path("studio_site_blog") }}" role="button"> Retour</a>  */
/* */
/* <br>*/
/* */
/* {% endblock %} */
