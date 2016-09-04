<?php

/* StudioSiteBundle:Site:index.html.twig */
class __TwigTemplate_a955e5218520975ae0595475a3315d47ee6af3c1d46d621285871aaeae50eae7 extends Twig_Template
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
        $__internal_529a69b899855e1175fef674bb965612d03b87e7946de5f61566dca5fa8e491f = $this->env->getExtension("native_profiler");
        $__internal_529a69b899855e1175fef674bb965612d03b87e7946de5f61566dca5fa8e491f->enter($__internal_529a69b899855e1175fef674bb965612d03b87e7946de5f61566dca5fa8e491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudioSiteBundle:Site:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529a69b899855e1175fef674bb965612d03b87e7946de5f61566dca5fa8e491f->leave($__internal_529a69b899855e1175fef674bb965612d03b87e7946de5f61566dca5fa8e491f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ff8383c5e81b54adec782096c0750f84847fd1b6f6fa35baa3a6366ff052a0a = $this->env->getExtension("native_profiler");
        $__internal_3ff8383c5e81b54adec782096c0750f84847fd1b6f6fa35baa3a6366ff052a0a->enter($__internal_3ff8383c5e81b54adec782096c0750f84847fd1b6f6fa35baa3a6366ff052a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3ff8383c5e81b54adec782096c0750f84847fd1b6f6fa35baa3a6366ff052a0a->leave($__internal_3ff8383c5e81b54adec782096c0750f84847fd1b6f6fa35baa3a6366ff052a0a_prof);

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
        return array (  97 => 35,  88 => 31,  79 => 27,  70 => 23,  61 => 19,  52 => 15,  40 => 5,  34 => 4,  11 => 1,);
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
