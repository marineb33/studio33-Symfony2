<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4a35ef6d0e511ec40d4e44b0cacb8f2ef6b724cb5b19a51c7d28b737641c363e extends Twig_Template
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
        $__internal_925d7e305f5bd252c15ead99db0b93699f9872da7f020da1cc7f8ab41eb31211 = $this->env->getExtension("native_profiler");
        $__internal_925d7e305f5bd252c15ead99db0b93699f9872da7f020da1cc7f8ab41eb31211->enter($__internal_925d7e305f5bd252c15ead99db0b93699f9872da7f020da1cc7f8ab41eb31211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_925d7e305f5bd252c15ead99db0b93699f9872da7f020da1cc7f8ab41eb31211->leave($__internal_925d7e305f5bd252c15ead99db0b93699f9872da7f020da1cc7f8ab41eb31211_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
