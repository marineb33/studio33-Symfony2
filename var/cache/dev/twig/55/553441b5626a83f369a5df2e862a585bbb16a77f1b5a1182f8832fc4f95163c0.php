<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e4a71a1b734cccb5a58be904f9ef36e3d40a9240c02f27e34738433db65d0c31 extends Twig_Template
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
        $__internal_053e8b3aa697eeffced1a278a5861efe3c8ee40efd99a5c6e23569e3968358a8 = $this->env->getExtension("native_profiler");
        $__internal_053e8b3aa697eeffced1a278a5861efe3c8ee40efd99a5c6e23569e3968358a8->enter($__internal_053e8b3aa697eeffced1a278a5861efe3c8ee40efd99a5c6e23569e3968358a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_053e8b3aa697eeffced1a278a5861efe3c8ee40efd99a5c6e23569e3968358a8->leave($__internal_053e8b3aa697eeffced1a278a5861efe3c8ee40efd99a5c6e23569e3968358a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
