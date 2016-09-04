<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fb3d373ee1944416fcbac30cbce1d453912c0368ef8257fc64d89059ee4e652b extends Twig_Template
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
        $__internal_6d3bfbc4a0c505d713d84a55efa43c9b5899a26948fda78de3fcb7105e619d1f = $this->env->getExtension("native_profiler");
        $__internal_6d3bfbc4a0c505d713d84a55efa43c9b5899a26948fda78de3fcb7105e619d1f->enter($__internal_6d3bfbc4a0c505d713d84a55efa43c9b5899a26948fda78de3fcb7105e619d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6d3bfbc4a0c505d713d84a55efa43c9b5899a26948fda78de3fcb7105e619d1f->leave($__internal_6d3bfbc4a0c505d713d84a55efa43c9b5899a26948fda78de3fcb7105e619d1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
