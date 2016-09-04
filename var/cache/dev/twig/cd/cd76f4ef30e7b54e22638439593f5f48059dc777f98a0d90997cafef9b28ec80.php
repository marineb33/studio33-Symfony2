<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_14d9e84d0dcbea2f51f09841f34efc3c862582782e4c4159c290c129843ba1b6 extends Twig_Template
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
        $__internal_e768c300f04d43d2bbabfd8d8c4374c6e0fa614ea1db333d1f2983de990f3847 = $this->env->getExtension("native_profiler");
        $__internal_e768c300f04d43d2bbabfd8d8c4374c6e0fa614ea1db333d1f2983de990f3847->enter($__internal_e768c300f04d43d2bbabfd8d8c4374c6e0fa614ea1db333d1f2983de990f3847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e768c300f04d43d2bbabfd8d8c4374c6e0fa614ea1db333d1f2983de990f3847->leave($__internal_e768c300f04d43d2bbabfd8d8c4374c6e0fa614ea1db333d1f2983de990f3847_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
