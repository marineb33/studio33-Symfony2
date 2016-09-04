<?php

/* shared/footer.twig */
class __TwigTemplate_265278e4e04890f68b1c238cdaf3b3d99cba337e003b0468fb767ac3d7d86355 extends Twig_Template
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
        echo "<footer>
    <div class=\"panel panel-default panel-footer\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-3\">
        By Marine Baillet
            </div>
            <div class=\"hidden-xs col-sm-9\">
            
        <ul class=\"list-inline pull-right\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("studio_site_homepage");
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("studio_site_legal");
        echo "\">Mentions légales</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("studio_site_cookies");
        echo "\">Cookies</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("studio_site_contact");
        echo "\">Contact</a></li>
        </ul>
            </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "shared/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <footer>*/
/*     <div class="panel panel-default panel-footer">*/
/*         <div class="row">*/
/*             <div class="col-xs-12 col-sm-3">*/
/*         By Marine Baillet*/
/*             </div>*/
/*             <div class="hidden-xs col-sm-9">*/
/*             */
/*         <ul class="list-inline pull-right">*/
/*             <li><a href="{{ path('studio_site_homepage')}}">Accueil</a></li>*/
/*             <li><a href="{{ path('studio_site_legal')}}">Mentions légales</a></li>*/
/*             <li><a href="{{ path('studio_site_cookies')}}">Cookies</a></li>*/
/*             <li><a href="{{ path('studio_site_contact')}}">Contact</a></li>*/
/*         </ul>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
