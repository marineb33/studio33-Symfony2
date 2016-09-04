<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8d6a86ac42d6e8c59ec50187aa5555faf343bb03011fb28f3df520b7fe563800 extends Twig_Template
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
        $__internal_7e0e65c6547e218b2054d296fa5c5bc4eabe75ae85cf9585ac7a01a5fd55e583 = $this->env->getExtension("native_profiler");
        $__internal_7e0e65c6547e218b2054d296fa5c5bc4eabe75ae85cf9585ac7a01a5fd55e583->enter($__internal_7e0e65c6547e218b2054d296fa5c5bc4eabe75ae85cf9585ac7a01a5fd55e583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7e0e65c6547e218b2054d296fa5c5bc4eabe75ae85cf9585ac7a01a5fd55e583->leave($__internal_7e0e65c6547e218b2054d296fa5c5bc4eabe75ae85cf9585ac7a01a5fd55e583_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
