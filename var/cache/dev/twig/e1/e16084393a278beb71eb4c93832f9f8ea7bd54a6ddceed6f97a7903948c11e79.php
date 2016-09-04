<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e1d5d6bd6f2b4e9075250ffb5cb107e475086a4667ee11cf1d2af7ea4d8426cb extends Twig_Template
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
        $__internal_b01dcbfc703e0211a1632667de58b1288495641c903f570945ad34cb65a3e415 = $this->env->getExtension("native_profiler");
        $__internal_b01dcbfc703e0211a1632667de58b1288495641c903f570945ad34cb65a3e415->enter($__internal_b01dcbfc703e0211a1632667de58b1288495641c903f570945ad34cb65a3e415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b01dcbfc703e0211a1632667de58b1288495641c903f570945ad34cb65a3e415->leave($__internal_b01dcbfc703e0211a1632667de58b1288495641c903f570945ad34cb65a3e415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
