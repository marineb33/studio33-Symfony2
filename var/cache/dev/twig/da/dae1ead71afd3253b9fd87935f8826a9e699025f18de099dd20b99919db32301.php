<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c9e7fc5f5763f7f4dd4271638b8682b89a7a0a0a782e1a2303550a00c1e9c45e extends Twig_Template
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
        $__internal_b0d27999dac846a93d9a65d5666be3dd353e25b91bcf82d30eb50ebb9665f882 = $this->env->getExtension("native_profiler");
        $__internal_b0d27999dac846a93d9a65d5666be3dd353e25b91bcf82d30eb50ebb9665f882->enter($__internal_b0d27999dac846a93d9a65d5666be3dd353e25b91bcf82d30eb50ebb9665f882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b0d27999dac846a93d9a65d5666be3dd353e25b91bcf82d30eb50ebb9665f882->leave($__internal_b0d27999dac846a93d9a65d5666be3dd353e25b91bcf82d30eb50ebb9665f882_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
