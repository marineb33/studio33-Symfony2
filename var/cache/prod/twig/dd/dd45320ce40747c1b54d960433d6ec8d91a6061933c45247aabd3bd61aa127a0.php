<?php

/* layout.twig */
class __TwigTemplate_867433ce3ad3002265bd3a5edaeaef7be7b0207f5655577c7c064a518bbdcb87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <div class=\"container\">
            ";
        // line 15
        echo twig_include($this->env, $context, "shared/header.twig");
        echo "
        </div> 
        <div class=\"container container-large\">
            ";
        // line 18
        echo twig_include($this->env, $context, "shared/menu.twig");
        echo "
        </div>
        <div class=\"container\">
            ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "        </div>
        <div class=\"container container-large\">
            ";
        // line 26
        echo twig_include($this->env, $context, "shared/footer.twig");
        echo "
        </div>
        
        ";
        // line 29
        $this->displayBlock('javascript', $context, $blocks);
        // line 35
        echo "    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <title>Studio33</title>
        ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
            ";
    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        // line 30
        echo "            <script type= \"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-3.1.0.js"), "html", null, true);
        echo "\"></script>
            <script type= \"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type= \"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  111 => 31,  106 => 30,  103 => 29,  98 => 22,  95 => 21,  89 => 10,  85 => 9,  80 => 8,  77 => 7,  72 => 5,  69 => 4,  64 => 35,  62 => 29,  56 => 26,  52 => 24,  50 => 21,  44 => 18,  38 => 15,  33 => 12,  30 => 7,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% block head %}*/
/*             <title>Studio33</title>*/
/*         {% endblock %}*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             {{ include('shared/header.twig') }}*/
/*         </div> */
/*         <div class="container container-large">*/
/*             {{ include('shared/menu.twig') }}*/
/*         </div>*/
/*         <div class="container">*/
/*             {% block content %}*/
/* */
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="container container-large">*/
/*             {{ include('shared/footer.twig') }}*/
/*         </div>*/
/*         */
/*         {% block javascript %}*/
/*             <script type= "text/javascript" src="{{ asset('js/jquery-3.1.0.js') }}"></script>*/
/*             <script type= "text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>*/
/*             <script type= "text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
