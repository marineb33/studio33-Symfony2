<?php

/* StudioSiteBundle:Site:blog.html.twig */
class __TwigTemplate_6b3b09bcb1c5665fc17a8d6d081e00dd861d1afc68f3177e15911e03b19e39ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:blog.html.twig", 1);
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
<br>
<h1 class=\"text-center\">Astuces de photographe</h1>
<br>

<div class=\"row\">
    ";
        // line 11
        if (array_key_exists("posts", $context)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 13
                echo "            <div class=\"col-xs-12 col-md-6\">
                <img class=\"image_recadre center-block\" src=\"/images/blog/";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", array()), "html", null, true);
                echo "\"  alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "alt", array()), "html", null, true);
                echo "\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                    <h2 class=\"text-center\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</h2> 
                    <p>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
                echo "</p>
                    <a role=\"button\" aria-hidden=\"true\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("studio_site_post_view", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\" class=\"btn  btn-default\">Lire la suite</a>  
                    </div>
                </div>
            </div>
            
            ";
                // line 24
                $context["res"] = ($this->getAttribute($context["loop"], "index", array()) % 2);
                // line 25
                echo "            
            ";
                // line 26
                if ((((isset($context["res"]) ? $context["res"] : null) == "0") && ($this->getAttribute($context["loop"], "last", array()) != true))) {
                    echo " 
                <div class=\"col-xs-12\">
                    <br>
                    <hr>
                    <br>
                </div>
            ";
                }
                // line 32
                echo "   
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        }
        // line 35
        echo "</div>

<br>

      



";
    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  116 => 34,  101 => 32,  91 => 26,  88 => 25,  86 => 24,  78 => 19,  74 => 18,  70 => 17,  62 => 14,  59 => 13,  41 => 12,  39 => 11,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* <br>*/
/* <h1 class="text-center">Astuces de photographe</h1>*/
/* <br>*/
/* */
/* <div class="row">*/
/*     {% if posts is defined %}*/
/*         {% for post in posts %}*/
/*             <div class="col-xs-12 col-md-6">*/
/*                 <img class="image_recadre center-block" src="/images/blog/{{ post.image }}"  alt="{{ post.alt }}">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12">*/
/*                     <h2 class="text-center">{{ post.title }}</h2> */
/*                     <p>{{ post.description }}</p>*/
/*                     <a role="button" aria-hidden="true" href="{{ path("studio_site_post_view",{"id":post.id})}}" class="btn  btn-default">Lire la suite</a>  */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             {% set res = loop.index%2 %}*/
/*             */
/*             {% if res == "0" and loop.last != true %} */
/*                 <div class="col-xs-12">*/
/*                     <br>*/
/*                     <hr>*/
/*                     <br>*/
/*                 </div>*/
/*             {% endif %}   */
/*         {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
/* */
/* <br>*/
/* */
/*       */
/* */
/* */
/* */
/* {% endblock %}     */
