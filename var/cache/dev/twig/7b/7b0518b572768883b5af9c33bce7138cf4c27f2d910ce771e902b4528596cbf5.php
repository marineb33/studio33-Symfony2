<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a560a7e8bfa135ecce420a61ac74dfa0e638b536a9423585799d7a2b6885d7f8 extends Twig_Template
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
        $__internal_61ba843162ee8ad13d34a487663cdd7f643eba9316cf9f74815d53a936d4bc6b = $this->env->getExtension("native_profiler");
        $__internal_61ba843162ee8ad13d34a487663cdd7f643eba9316cf9f74815d53a936d4bc6b->enter($__internal_61ba843162ee8ad13d34a487663cdd7f643eba9316cf9f74815d53a936d4bc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_61ba843162ee8ad13d34a487663cdd7f643eba9316cf9f74815d53a936d4bc6b->leave($__internal_61ba843162ee8ad13d34a487663cdd7f643eba9316cf9f74815d53a936d4bc6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
