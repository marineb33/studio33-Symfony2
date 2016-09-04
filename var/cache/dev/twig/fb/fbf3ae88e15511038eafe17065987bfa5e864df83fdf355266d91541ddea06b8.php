<?php

/* layout.twig */
class __TwigTemplate_0061f7262018f9b6ab3033d4ccfa57866966a20a3109d2445c732b0374d4b2cc extends Twig_Template
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
        $__internal_2e0674f4cce4793d9bfd9fb5c062ffa2c9798fb447e70ae2955ff25b95322d50 = $this->env->getExtension("native_profiler");
        $__internal_2e0674f4cce4793d9bfd9fb5c062ffa2c9798fb447e70ae2955ff25b95322d50->enter($__internal_2e0674f4cce4793d9bfd9fb5c062ffa2c9798fb447e70ae2955ff25b95322d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.twig"));

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
        
        $__internal_2e0674f4cce4793d9bfd9fb5c062ffa2c9798fb447e70ae2955ff25b95322d50->leave($__internal_2e0674f4cce4793d9bfd9fb5c062ffa2c9798fb447e70ae2955ff25b95322d50_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_32778043e47d294a2177faea82fa3af1785d427ee7a70c156a5aead655a10c38 = $this->env->getExtension("native_profiler");
        $__internal_32778043e47d294a2177faea82fa3af1785d427ee7a70c156a5aead655a10c38->enter($__internal_32778043e47d294a2177faea82fa3af1785d427ee7a70c156a5aead655a10c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <title>Studio33</title>
        ";
        
        $__internal_32778043e47d294a2177faea82fa3af1785d427ee7a70c156a5aead655a10c38->leave($__internal_32778043e47d294a2177faea82fa3af1785d427ee7a70c156a5aead655a10c38_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1af8d6ae477768f0b8b43ec5a3c67c7daa19b7bb31f13152a8fe5ead80909f71 = $this->env->getExtension("native_profiler");
        $__internal_1af8d6ae477768f0b8b43ec5a3c67c7daa19b7bb31f13152a8fe5ead80909f71->enter($__internal_1af8d6ae477768f0b8b43ec5a3c67c7daa19b7bb31f13152a8fe5ead80909f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1af8d6ae477768f0b8b43ec5a3c67c7daa19b7bb31f13152a8fe5ead80909f71->leave($__internal_1af8d6ae477768f0b8b43ec5a3c67c7daa19b7bb31f13152a8fe5ead80909f71_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_bbee51d9289e577cbc827e707e2962bf9f0c7aafa723fd27e633eae725a1e680 = $this->env->getExtension("native_profiler");
        $__internal_bbee51d9289e577cbc827e707e2962bf9f0c7aafa723fd27e633eae725a1e680->enter($__internal_bbee51d9289e577cbc827e707e2962bf9f0c7aafa723fd27e633eae725a1e680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "
            ";
        
        $__internal_bbee51d9289e577cbc827e707e2962bf9f0c7aafa723fd27e633eae725a1e680->leave($__internal_bbee51d9289e577cbc827e707e2962bf9f0c7aafa723fd27e633eae725a1e680_prof);

    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_949a48d50327e77bcc79515b43148a707c174896720a33b34251b21ad5af25e1 = $this->env->getExtension("native_profiler");
        $__internal_949a48d50327e77bcc79515b43148a707c174896720a33b34251b21ad5af25e1->enter($__internal_949a48d50327e77bcc79515b43148a707c174896720a33b34251b21ad5af25e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_949a48d50327e77bcc79515b43148a707c174896720a33b34251b21ad5af25e1->leave($__internal_949a48d50327e77bcc79515b43148a707c174896720a33b34251b21ad5af25e1_prof);

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
        return array (  142 => 32,  138 => 31,  133 => 30,  127 => 29,  119 => 22,  113 => 21,  104 => 10,  100 => 9,  95 => 8,  89 => 7,  81 => 5,  75 => 4,  67 => 35,  65 => 29,  59 => 26,  55 => 24,  53 => 21,  47 => 18,  41 => 15,  36 => 12,  33 => 7,  31 => 4,  26 => 1,);
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
