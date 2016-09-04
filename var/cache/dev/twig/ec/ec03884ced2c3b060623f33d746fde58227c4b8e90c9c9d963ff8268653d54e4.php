<?php

/* shared/footer.twig */
class __TwigTemplate_48e8b9bb9df276685824c8806385e4871aa8fc3e947772817f7651f90e05926e extends Twig_Template
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
        $__internal_9192ee5dd8ef0b060b73384e5a7f042aeb3acd3c2736bc1fdd76221598e5d063 = $this->env->getExtension("native_profiler");
        $__internal_9192ee5dd8ef0b060b73384e5a7f042aeb3acd3c2736bc1fdd76221598e5d063->enter($__internal_9192ee5dd8ef0b060b73384e5a7f042aeb3acd3c2736bc1fdd76221598e5d063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shared/footer.twig"));

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
        
        $__internal_9192ee5dd8ef0b060b73384e5a7f042aeb3acd3c2736bc1fdd76221598e5d063->leave($__internal_9192ee5dd8ef0b060b73384e5a7f042aeb3acd3c2736bc1fdd76221598e5d063_prof);

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
        return array (  45 => 13,  41 => 12,  37 => 11,  33 => 10,  22 => 1,);
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
