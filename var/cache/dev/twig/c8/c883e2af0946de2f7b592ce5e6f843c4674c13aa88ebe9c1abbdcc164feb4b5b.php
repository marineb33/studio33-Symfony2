<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_57637a67bca188110bfb44072746a24411d8ee3573b09ad5c002c7537c4bf1bc extends Twig_Template
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
        $__internal_614205d503a680f5d63c61d74099d9dfe71f7a9dcdb25b8ec1902fc21d84319f = $this->env->getExtension("native_profiler");
        $__internal_614205d503a680f5d63c61d74099d9dfe71f7a9dcdb25b8ec1902fc21d84319f->enter($__internal_614205d503a680f5d63c61d74099d9dfe71f7a9dcdb25b8ec1902fc21d84319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_614205d503a680f5d63c61d74099d9dfe71f7a9dcdb25b8ec1902fc21d84319f->leave($__internal_614205d503a680f5d63c61d74099d9dfe71f7a9dcdb25b8ec1902fc21d84319f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
