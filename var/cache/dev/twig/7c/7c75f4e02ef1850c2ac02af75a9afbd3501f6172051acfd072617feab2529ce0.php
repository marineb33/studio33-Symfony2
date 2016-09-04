<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ef739ceb2a1186d3d60825c9cffa3355b7213f3d5b467628fba5f6822cfb3a84 extends Twig_Template
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
        $__internal_489e9860cbcc468cf19e8b14c82aa8c5494583c9f41edd01930b23d64b31d4d1 = $this->env->getExtension("native_profiler");
        $__internal_489e9860cbcc468cf19e8b14c82aa8c5494583c9f41edd01930b23d64b31d4d1->enter($__internal_489e9860cbcc468cf19e8b14c82aa8c5494583c9f41edd01930b23d64b31d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_489e9860cbcc468cf19e8b14c82aa8c5494583c9f41edd01930b23d64b31d4d1->leave($__internal_489e9860cbcc468cf19e8b14c82aa8c5494583c9f41edd01930b23d64b31d4d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
