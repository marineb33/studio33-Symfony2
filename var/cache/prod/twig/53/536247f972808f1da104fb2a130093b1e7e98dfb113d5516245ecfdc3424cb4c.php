<?php

/* StudioSiteBundle:Site:postView.html.twig */
class __TwigTemplate_8522cb616f2428627739f74626f756705afa0b20ce09c2acdd3917667e0bbaea extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array())));
        echo "
<br>

<div class=\"row\">
    <div class=\"col-xs-6\">
        <h2>Commentaires</h2>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments", array()));
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("StudioSiteBundle:Site:commentForm", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))));
        echo "   

";
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
        return array (  71 => 23,  65 => 19,  55 => 15,  50 => 13,  47 => 12,  43 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
