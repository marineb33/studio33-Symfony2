<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_267b3999d8d2959968b7e89b4a509f41ba5296dc0f01e50340bf5b29127d4a68 extends Twig_Template
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
        $__internal_1971f04d0c384de25e8f2368125375cdf47eb67b45bf663388301e79aacbc764 = $this->env->getExtension("native_profiler");
        $__internal_1971f04d0c384de25e8f2368125375cdf47eb67b45bf663388301e79aacbc764->enter($__internal_1971f04d0c384de25e8f2368125375cdf47eb67b45bf663388301e79aacbc764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1971f04d0c384de25e8f2368125375cdf47eb67b45bf663388301e79aacbc764->leave($__internal_1971f04d0c384de25e8f2368125375cdf47eb67b45bf663388301e79aacbc764_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
