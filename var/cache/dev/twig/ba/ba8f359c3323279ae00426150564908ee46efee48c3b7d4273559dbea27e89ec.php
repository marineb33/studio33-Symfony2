<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_42dd0b90728ac4b41e8d245f49184c81c8eefa62906d4c2ce451e3e73a9cbf0f extends Twig_Template
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
        $__internal_b5d372249162d416b20484e0d222c5c894cff5e260472b36f0e3094a81db4846 = $this->env->getExtension("native_profiler");
        $__internal_b5d372249162d416b20484e0d222c5c894cff5e260472b36f0e3094a81db4846->enter($__internal_b5d372249162d416b20484e0d222c5c894cff5e260472b36f0e3094a81db4846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b5d372249162d416b20484e0d222c5c894cff5e260472b36f0e3094a81db4846->leave($__internal_b5d372249162d416b20484e0d222c5c894cff5e260472b36f0e3094a81db4846_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
