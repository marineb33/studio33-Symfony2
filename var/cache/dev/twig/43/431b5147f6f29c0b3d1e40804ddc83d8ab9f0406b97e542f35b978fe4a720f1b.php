<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_37a199d24dd85a36b83104a64e4e6b49ff45cfb79015c19d79cc23827f60b997 extends Twig_Template
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
        $__internal_88353f08505acceae7205ac2901effc77fd408dbc797bf15f5006124490830f0 = $this->env->getExtension("native_profiler");
        $__internal_88353f08505acceae7205ac2901effc77fd408dbc797bf15f5006124490830f0->enter($__internal_88353f08505acceae7205ac2901effc77fd408dbc797bf15f5006124490830f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_88353f08505acceae7205ac2901effc77fd408dbc797bf15f5006124490830f0->leave($__internal_88353f08505acceae7205ac2901effc77fd408dbc797bf15f5006124490830f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
