<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1bbb5c22279c88288c10ee1656739f1048b12490bead41898c56210b87f7992b extends Twig_Template
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
        $__internal_f044db483d27969b440784c2197f1d46b74fb04d654eab256ba5090a6b46c3ca = $this->env->getExtension("native_profiler");
        $__internal_f044db483d27969b440784c2197f1d46b74fb04d654eab256ba5090a6b46c3ca->enter($__internal_f044db483d27969b440784c2197f1d46b74fb04d654eab256ba5090a6b46c3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f044db483d27969b440784c2197f1d46b74fb04d654eab256ba5090a6b46c3ca->leave($__internal_f044db483d27969b440784c2197f1d46b74fb04d654eab256ba5090a6b46c3ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
