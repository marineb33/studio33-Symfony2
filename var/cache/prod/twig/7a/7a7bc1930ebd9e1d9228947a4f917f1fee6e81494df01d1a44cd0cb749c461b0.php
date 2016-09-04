<?php

/* shared/menu.twig */
class __TwigTemplate_439e4b00883dc520ef1053a80f7ce3c1f272fcc58719d56a1a9df96b1b2fb201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
      
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand visible-xs\" href=\"#\">Menu</a>
    </div>
      
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
     <ul class=\"nav navbar-nav justified  \">
        <li class=\" menu\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("studio_site_homepage");
        echo "\">Accueil<span class=\"sr-only\">(current)</span></a></li>
        <li class=\"menu\" ><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("studio_site_profil");
        echo "\">Qui suis-je?</a></li>
        <li class=\"dropdown menu\">
          <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("studio_site_portraits");
        echo "\" class=\"dropdown-toggle\" data-hover=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Portraits<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("studio_site_kids");
        echo "\">Enfant</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("studio_site_adult");
        echo "\">Adulte</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("studio_site_family");
        echo "\">Famille</a></li>
          </ul>
        </li>
         <li class=\"dropdown menu\">
          <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("studio_site_wedding");
        echo "\" class=\"dropdown-toggle\" data-hover=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mariages<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("studio_site_day");
        echo "\">Au fil de la journée</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("studio_site_couple");
        echo "\">Couple</a></li>
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("studio_site_group");
        echo "\">Groupe</a></li>
          </ul>
        </li>
        <li class=\"menu\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("studio_site_price");
        echo "\">Tarifs</a></li>
        <li class=\"menu\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("studio_site_blog");
        echo "\">Blog</a></li>
        <li class=\"menu\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("studio_site_contact");
        echo "\">Contact</a></li>
    </ul>
        
        <p class=\"navbar-text navbar-right\">
            <a href=\"#\"><i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
            <a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
        </p>
        
    </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "shared/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  89 => 36,  85 => 35,  79 => 32,  75 => 31,  71 => 30,  66 => 28,  59 => 24,  55 => 23,  51 => 22,  46 => 20,  41 => 18,  37 => 17,  19 => 1,);
    }
}
/* */
/* <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*       */
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand visible-xs" href="#">Menu</a>*/
/*     </div>*/
/*       */
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*      <ul class="nav navbar-nav justified  ">*/
/*         <li class=" menu"><a href="{{ path('studio_site_homepage') }}">Accueil<span class="sr-only">(current)</span></a></li>*/
/*         <li class="menu" ><a href="{{ path('studio_site_profil') }}">Qui suis-je?</a></li>*/
/*         <li class="dropdown menu">*/
/*           <a href="{{ path('studio_site_portraits')}}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portraits<span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('studio_site_kids')}}">Enfant</a></li>*/
/*             <li><a href="{{ path('studio_site_adult')}}">Adulte</a></li>*/
/*             <li><a href="{{ path('studio_site_family')}}">Famille</a></li>*/
/*           </ul>*/
/*         </li>*/
/*          <li class="dropdown menu">*/
/*           <a href="{{ path('studio_site_wedding')}}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mariages<span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('studio_site_day')}}">Au fil de la journée</a></li>*/
/*             <li><a href="{{ path('studio_site_couple')}}">Couple</a></li>*/
/*             <li><a href="{{ path('studio_site_group')}}">Groupe</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="menu"><a href="{{ path('studio_site_price')}}">Tarifs</a></li>*/
/*         <li class="menu"><a href="{{ path('studio_site_blog')}}">Blog</a></li>*/
/*         <li class="menu"><a href="{{ path('studio_site_contact')}}">Contact</a></li>*/
/*     </ul>*/
/*         */
/*         <p class="navbar-text navbar-right">*/
/*             <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>*/
/*             <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>*/
/*             <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>*/
/*             <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>*/
/*         </p>*/
/*         */
/*     </div>*/
/*     </div>*/
/* </nav>*/
