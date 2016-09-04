<?php

/* StudioSiteBundle:Site:index.html.twig */
class __TwigTemplate_f2953fab0080173631634b932c16475aa20bc7eb06f017053cc63a4205bc0e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:index.html.twig", 1);
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
<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
      
    <div class=\"item active\">
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("studio_site_family");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/caroussel/family-1350754_1920.jpg"), "html", null, true);
        echo "\" alt=\"famille à trois\"></a>
    </div>
       
    <div class=\"item\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("studio_site_couple");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/caroussel/wedding-322034_1280.jpg"), "html", null, true);
        echo "\"  alt=\"couple mariés\"></a>
    </div>
      
    <div class=\"item\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("studio_site_kids");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/caroussel/paternity-633445_1280.jpg"), "html", null, true);
        echo "\"  alt=\"bébé allongé\"></a>
    </div>
      
    <div class=\"item\">
        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("studio_site_group");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/caroussel/sports-1482019_1280.jpg"), "html", null, true);
        echo "\" alt=\"groupe mariage tir à la corde\"></a>
    </div>
     
    <div class=\"item\">
        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("studio_site_adult");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/caroussel/woman-1031533_1280.jpg"), "html", null, true);
        echo "\"  alt=\"femme\"></a>
    </div>
          
    <div class=\"item\">
        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("studio_site_day");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/caroussel/wedding-322034_1280.jpg"), "html", null, true);
        echo "\"  alt=\"alliance\"></a>
    </div>
     
  </div>
  
  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>

</section>
";
    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 35,  79 => 31,  70 => 27,  61 => 23,  52 => 19,  43 => 15,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* */
/* {% block content %}*/
/*     */
/* <section>*/
/* <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*   <!-- Indicators -->*/
/*   */
/* */
/*   <!-- Wrapper for slides -->*/
/*   <div class="carousel-inner" role="listbox">*/
/*       */
/*     <div class="item active">*/
/*         <a href="{{ path('studio_site_family')}}"><img src="{{ asset("images/caroussel/family-1350754_1920.jpg")}}" alt="famille à trois"></a>*/
/*     </div>*/
/*        */
/*     <div class="item">*/
/*         <a href="{{ path('studio_site_couple')}}"><img src="{{ asset("images/caroussel/wedding-322034_1280.jpg")}}"  alt="couple mariés"></a>*/
/*     </div>*/
/*       */
/*     <div class="item">*/
/*         <a href="{{ path('studio_site_kids')}}"><img src="{{ asset("images/caroussel/paternity-633445_1280.jpg")}}"  alt="bébé allongé"></a>*/
/*     </div>*/
/*       */
/*     <div class="item">*/
/*         <a href="{{ path('studio_site_group')}}"><img src="{{ asset("images/caroussel/sports-1482019_1280.jpg")}}" alt="groupe mariage tir à la corde"></a>*/
/*     </div>*/
/*      */
/*     <div class="item">*/
/*         <a href="{{ path('studio_site_adult')}}"> <img src="{{ asset("images/caroussel/woman-1031533_1280.jpg")}}"  alt="femme"></a>*/
/*     </div>*/
/*           */
/*     <div class="item">*/
/*         <a href="{{ path('studio_site_day')}}"><img src="{{ asset("images/caroussel/wedding-322034_1280.jpg")}}"  alt="alliance"></a>*/
/*     </div>*/
/*      */
/*   </div>*/
/*   */
/*   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*     <span class="sr-only">Previous</span>*/
/*   </a>*/
/*   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*     <span class="sr-only">Next</span>*/
/*   </a>*/
/* </div>*/
/* */
/* </section>*/
/* {% endblock %}*/
