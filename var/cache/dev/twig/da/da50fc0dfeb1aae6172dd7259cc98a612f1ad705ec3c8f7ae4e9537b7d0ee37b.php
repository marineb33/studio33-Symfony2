<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d9effc15ce02fba86b1d64c30db67f4b1e3f9486f4f05a07c7a2e0a3c10cb6ee extends Twig_Template
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
        $__internal_ca1a0f29d4f4de5d2b0624f36460e11bbf611a5a361ac110ff7b22b5b984bee6 = $this->env->getExtension("native_profiler");
        $__internal_ca1a0f29d4f4de5d2b0624f36460e11bbf611a5a361ac110ff7b22b5b984bee6->enter($__internal_ca1a0f29d4f4de5d2b0624f36460e11bbf611a5a361ac110ff7b22b5b984bee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ca1a0f29d4f4de5d2b0624f36460e11bbf611a5a361ac110ff7b22b5b984bee6->leave($__internal_ca1a0f29d4f4de5d2b0624f36460e11bbf611a5a361ac110ff7b22b5b984bee6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
