<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5a3213e450ac706792af3099e93cd428694d2036e5ec21d39669d5a0dc28b45d extends Twig_Template
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
        $__internal_77137a69e079e05c9adcc3c41d8409f12075d6a730bc930a518f34e7297596dc = $this->env->getExtension("native_profiler");
        $__internal_77137a69e079e05c9adcc3c41d8409f12075d6a730bc930a518f34e7297596dc->enter($__internal_77137a69e079e05c9adcc3c41d8409f12075d6a730bc930a518f34e7297596dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_77137a69e079e05c9adcc3c41d8409f12075d6a730bc930a518f34e7297596dc->leave($__internal_77137a69e079e05c9adcc3c41d8409f12075d6a730bc930a518f34e7297596dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
