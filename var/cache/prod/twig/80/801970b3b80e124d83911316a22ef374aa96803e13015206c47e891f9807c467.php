<?php

/* shared/header.twig */
class __TwigTemplate_824be59120a17f1e9d7fdee9528657c1acb219c88d33be2543fdfcac896747c9 extends Twig_Template
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
        return array (  24 => 4,  19 => 1,);
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
