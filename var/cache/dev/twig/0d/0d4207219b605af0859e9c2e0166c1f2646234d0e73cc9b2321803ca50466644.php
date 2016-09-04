<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0b2588e4ec98be561646d89679fe8ad8875e8c324011a3799838e65687512cfc extends Twig_Template
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
        $__internal_74673e2198a0da0ee035027f672b4f8ac18423cb842463bc9257e770a0e461fc = $this->env->getExtension("native_profiler");
        $__internal_74673e2198a0da0ee035027f672b4f8ac18423cb842463bc9257e770a0e461fc->enter($__internal_74673e2198a0da0ee035027f672b4f8ac18423cb842463bc9257e770a0e461fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_74673e2198a0da0ee035027f672b4f8ac18423cb842463bc9257e770a0e461fc->leave($__internal_74673e2198a0da0ee035027f672b4f8ac18423cb842463bc9257e770a0e461fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
