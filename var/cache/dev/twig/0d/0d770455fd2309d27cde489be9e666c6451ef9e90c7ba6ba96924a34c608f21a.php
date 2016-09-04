<?php

/* StudioSiteBundle:Site:postView.html.twig */
class __TwigTemplate_ad50299db87045220de95cbde7a24b87d613b1263eaf3322bdfbb0363cbeee88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:postView.html.twig", 1);
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
        $__internal_6a996780d32296221d1825733e65785db71281375e0a87125c7de60a2227093f = $this->env->getExtension("native_profiler");
        $__internal_6a996780d32296221d1825733e65785db71281375e0a87125c7de60a2227093f->enter($__internal_6a996780d32296221d1825733e65785db71281375e0a87125c7de60a2227093f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudioSiteBundle:Site:postView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a996780d32296221d1825733e65785db71281375e0a87125c7de60a2227093f->leave($__internal_6a996780d32296221d1825733e65785db71281375e0a87125c7de60a2227093f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2551ebc02a7f1a24c9d34f6a205d789e20092fbe0727370fdef620d09a13f7e8 = $this->env->getExtension("native_profiler");
        $__internal_2551ebc02a7f1a24c9d34f6a205d789e20092fbe0727370fdef620d09a13f7e8->enter($__internal_2551ebc02a7f1a24c9d34f6a205d789e20092fbe0727370fdef620d09a13f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 5
        echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array())));
        echo "
<br>

<div class=\"row\">
    <div class=\"col-xs-6\">
        <h2>Commentaires</h2>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 12
            echo "            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
            echo "</div>
              <div class=\"panel-body\">
                  ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "message", array()), "html", null, true);
            echo "
              </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </div>
</div>


";
        // line 23
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("StudioSiteBundle:Site:commentForm", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))));
        echo "   

";
        
        $__internal_2551ebc02a7f1a24c9d34f6a205d789e20092fbe0727370fdef620d09a13f7e8->leave($__internal_2551ebc02a7f1a24c9d34f6a205d789e20092fbe0727370fdef620d09a13f7e8_prof);

    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:postView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  74 => 19,  64 => 15,  59 => 13,  56 => 12,  52 => 11,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig"%}*/
/* */
/* {% block content %}*/
/* */
/* {{ include(template_from_string(post.content)) }}*/
/* <br>*/
/* */
/* <div class="row">*/
/*     <div class="col-xs-6">*/
/*         <h2>Commentaires</h2>*/
/*         {% for comment in post.comments %}*/
/*             <div class="panel panel-default">*/
/*               <div class="panel-heading">{{ comment.name }}</div>*/
/*               <div class="panel-body">*/
/*                   {{ comment.message }}*/
/*               </div>*/
/*             </div>*/
/*         {% endfor%}*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {{ render(controller("StudioSiteBundle:Site:commentForm", {"id":post.id})) }}   */
/* */
/* {% endblock %}*/
