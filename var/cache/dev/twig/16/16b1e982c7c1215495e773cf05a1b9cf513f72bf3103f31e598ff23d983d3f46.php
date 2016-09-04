<?php

/* shared/header.twig */
class __TwigTemplate_6ddb1f18a609ab6941d73937b15d3b31654b1a0ad68901df064eb5988fefc26b extends Twig_Template
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
        $__internal_8d0e54eb9bc8ac5fa197afb294c2f096cca423921602a818a6482b7479647ee3 = $this->env->getExtension("native_profiler");
        $__internal_8d0e54eb9bc8ac5fa197afb294c2f096cca423921602a818a6482b7479647ee3->enter($__internal_8d0e54eb9bc8ac5fa197afb294c2f096cca423921602a818a6482b7479647ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shared/header.twig"));

        // line 1
        echo "<header>
       <div class=\"row vertical-box\">
           <div class=\"col-xs-12 col-sm-10 col-md-8 \">
               <img class=\"pull-right\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"mon logo\">
           </div>
           <div class=\"hidden-xs col-sm-2 col-md-4  \">
               <div class=\"pull-right\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i><strong> 06.45.48.45.30</strong></div>
           </div>
     </div>
</header>";
        
        $__internal_8d0e54eb9bc8ac5fa197afb294c2f096cca423921602a818a6482b7479647ee3->leave($__internal_8d0e54eb9bc8ac5fa197afb294c2f096cca423921602a818a6482b7479647ee3_prof);

    }

    public function getTemplateName()
    {
        return "shared/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <header>*/
/*        <div class="row vertical-box">*/
/*            <div class="col-xs-12 col-sm-10 col-md-8 ">*/
/*                <img class="pull-right" src="{{ asset('images/logo.png') }}" alt="mon logo">*/
/*            </div>*/
/*            <div class="hidden-xs col-sm-2 col-md-4  ">*/
/*                <div class="pull-right"><i class="fa fa-phone" aria-hidden="true"></i><strong> 06.45.48.45.30</strong></div>*/
/*            </div>*/
/*      </div>*/
/* </header>*/
