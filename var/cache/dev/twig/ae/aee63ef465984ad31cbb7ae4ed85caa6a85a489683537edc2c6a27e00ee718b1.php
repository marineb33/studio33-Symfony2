<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_99c05937130b0a7e0bf9352274d49b451d6cc2281d770f9e449de6194ea56fdd extends Twig_Template
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
        $__internal_be97201de68db357d792ec68d8927ac53e310a274de990a1ec0ebc438a748e22 = $this->env->getExtension("native_profiler");
        $__internal_be97201de68db357d792ec68d8927ac53e310a274de990a1ec0ebc438a748e22->enter($__internal_be97201de68db357d792ec68d8927ac53e310a274de990a1ec0ebc438a748e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_be97201de68db357d792ec68d8927ac53e310a274de990a1ec0ebc438a748e22->leave($__internal_be97201de68db357d792ec68d8927ac53e310a274de990a1ec0ebc438a748e22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
