<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6d796b502fe274cfd89b73a00d129cb4119bd4b84bee9c80c12dfc75b4d5b52c extends Twig_Template
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
        $__internal_caa28820b6ea19ca558019731f094333a39b4b73c09579ad857f8b0feb799c09 = $this->env->getExtension("native_profiler");
        $__internal_caa28820b6ea19ca558019731f094333a39b4b73c09579ad857f8b0feb799c09->enter($__internal_caa28820b6ea19ca558019731f094333a39b4b73c09579ad857f8b0feb799c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_caa28820b6ea19ca558019731f094333a39b4b73c09579ad857f8b0feb799c09->leave($__internal_caa28820b6ea19ca558019731f094333a39b4b73c09579ad857f8b0feb799c09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
