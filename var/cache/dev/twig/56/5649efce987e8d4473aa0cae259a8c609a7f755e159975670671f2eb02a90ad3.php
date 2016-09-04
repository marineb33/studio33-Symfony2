<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3c32e80be23fa8710653ce8a7d1aff0859a529a5410022d0dc67d2d98b2d8023 extends Twig_Template
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
        $__internal_4398ee02415afc043e4a3633b411861d9dd709d5aea8751ab181a47adcc84985 = $this->env->getExtension("native_profiler");
        $__internal_4398ee02415afc043e4a3633b411861d9dd709d5aea8751ab181a47adcc84985->enter($__internal_4398ee02415afc043e4a3633b411861d9dd709d5aea8751ab181a47adcc84985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4398ee02415afc043e4a3633b411861d9dd709d5aea8751ab181a47adcc84985->leave($__internal_4398ee02415afc043e4a3633b411861d9dd709d5aea8751ab181a47adcc84985_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
