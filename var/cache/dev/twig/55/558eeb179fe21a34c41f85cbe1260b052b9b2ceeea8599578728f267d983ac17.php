<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1c04448adcd4ef952ed684b20c194ab526e4d3dc03d29426851a92eeed62b46a extends Twig_Template
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
        $__internal_4cb9468903e58a288da2a193cf1d0555d3a11ba64c62213a2b8cfa2c49e57300 = $this->env->getExtension("native_profiler");
        $__internal_4cb9468903e58a288da2a193cf1d0555d3a11ba64c62213a2b8cfa2c49e57300->enter($__internal_4cb9468903e58a288da2a193cf1d0555d3a11ba64c62213a2b8cfa2c49e57300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4cb9468903e58a288da2a193cf1d0555d3a11ba64c62213a2b8cfa2c49e57300->leave($__internal_4cb9468903e58a288da2a193cf1d0555d3a11ba64c62213a2b8cfa2c49e57300_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
