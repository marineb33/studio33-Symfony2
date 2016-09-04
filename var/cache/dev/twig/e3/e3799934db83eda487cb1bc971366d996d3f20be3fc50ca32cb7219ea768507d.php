<?php

/* StudioSiteBundle:Site:profil.html.twig */
class __TwigTemplate_58501f6f853ec7aed99a8df5f540897402e369d609be142ca5d0535393804a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:profil.html.twig", 1);
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
        $__internal_f2cee90b7ddbe69a99fea36251424866505abe077af3a26ec0bd4b7eb041e390 = $this->env->getExtension("native_profiler");
        $__internal_f2cee90b7ddbe69a99fea36251424866505abe077af3a26ec0bd4b7eb041e390->enter($__internal_f2cee90b7ddbe69a99fea36251424866505abe077af3a26ec0bd4b7eb041e390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudioSiteBundle:Site:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2cee90b7ddbe69a99fea36251424866505abe077af3a26ec0bd4b7eb041e390->leave($__internal_f2cee90b7ddbe69a99fea36251424866505abe077af3a26ec0bd4b7eb041e390_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_9b225bd59e7d807ecbc737e1a2e03cabd494334839d0275c0405d44bdb6b309c = $this->env->getExtension("native_profiler");
        $__internal_9b225bd59e7d807ecbc737e1a2e03cabd494334839d0275c0405d44bdb6b309c->enter($__internal_9b225bd59e7d807ecbc737e1a2e03cabd494334839d0275c0405d44bdb6b309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<section>
<br>
<h1>Qui suis-je ?</h1>
<br>
<h2>Biographie</h2>
    <p>Photographe professionnelle depuis 2012, je suis installée à Bordeaux depuis mi 2013 après avoir vécu à Londres. Je suis bilingue français anglais  mais aussi initiée à la LSF (Langue des Signes Française). D'une bonne humeur, j'apporte mon joie de vivre et ma créativité à mes photos comme des oeuvres d'art, des histoires que je raconte.
    Autodidacte, j'ai débuté dans la photo de concert à Londres avec de nombreux groupes nationaux mais aussi internationaux , je me suis ensuite lancée dans les portraits puis pour tous particuliers. Mon 1er mariage en tant que photographe en 2012 a marqué le début de ma passion pour les photos de familles, enfants, couples, mariages et tous évènements.</p>

    <p>Mes spécialités</p>
    <ul>
        <li>Mariages</li>
        <li>Portraits en studio et extérieur.</li>
        <li>Bébés, enfants, familles, couples.</li>
        <li>Evènements et soirées.</li>
    </ul>
    
    <p>Je suis aussi à votre service pour photos studio, du traditionnel à l'artistique selon vos désirs.</p>

<h2>En bref...</h2>

    <p>Je répond à toutes vos demandes alors <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("studio_site_contact");
        echo "\">contactez-moi</a> et voyons ensemble! A très bientôt,<br>
    Et n'oubliez pas, souriez vous allez être photographiés :-)<p>

<br>
</section>
   
";
        
        $__internal_9b225bd59e7d807ecbc737e1a2e03cabd494334839d0275c0405d44bdb6b309c->leave($__internal_9b225bd59e7d807ecbc737e1a2e03cabd494334839d0275c0405d44bdb6b309c_prof);

    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* */
/* {% block content %}*/
/* <section>*/
/* <br>*/
/* <h1>Qui suis-je ?</h1>*/
/* <br>*/
/* <h2>Biographie</h2>*/
/*     <p>Photographe professionnelle depuis 2012, je suis installée à Bordeaux depuis mi 2013 après avoir vécu à Londres. Je suis bilingue français anglais  mais aussi initiée à la LSF (Langue des Signes Française). D'une bonne humeur, j'apporte mon joie de vivre et ma créativité à mes photos comme des oeuvres d'art, des histoires que je raconte.*/
/*     Autodidacte, j'ai débuté dans la photo de concert à Londres avec de nombreux groupes nationaux mais aussi internationaux , je me suis ensuite lancée dans les portraits puis pour tous particuliers. Mon 1er mariage en tant que photographe en 2012 a marqué le début de ma passion pour les photos de familles, enfants, couples, mariages et tous évènements.</p>*/
/* */
/*     <p>Mes spécialités</p>*/
/*     <ul>*/
/*         <li>Mariages</li>*/
/*         <li>Portraits en studio et extérieur.</li>*/
/*         <li>Bébés, enfants, familles, couples.</li>*/
/*         <li>Evènements et soirées.</li>*/
/*     </ul>*/
/*     */
/*     <p>Je suis aussi à votre service pour photos studio, du traditionnel à l'artistique selon vos désirs.</p>*/
/* */
/* <h2>En bref...</h2>*/
/* */
/*     <p>Je répond à toutes vos demandes alors <a href="{{ path('studio_site_contact')}}">contactez-moi</a> et voyons ensemble! A très bientôt,<br>*/
/*     Et n'oubliez pas, souriez vous allez être photographiés :-)<p>*/
/* */
/* <br>*/
/* </section>*/
/*    */
/* {% endblock %}*/
