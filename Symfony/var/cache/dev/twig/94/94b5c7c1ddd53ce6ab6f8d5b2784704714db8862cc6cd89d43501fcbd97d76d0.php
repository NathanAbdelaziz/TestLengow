<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0f36a7f1c1cf301317823f1681c80f95a2bdc63b30213e14d2d4027ec7b7f66b extends Twig_Template
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
        $__internal_d434eda893a16274eb21f4b3586a45f18d95601897edce821fa6f03ea1017c91 = $this->env->getExtension("native_profiler");
        $__internal_d434eda893a16274eb21f4b3586a45f18d95601897edce821fa6f03ea1017c91->enter($__internal_d434eda893a16274eb21f4b3586a45f18d95601897edce821fa6f03ea1017c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d434eda893a16274eb21f4b3586a45f18d95601897edce821fa6f03ea1017c91->leave($__internal_d434eda893a16274eb21f4b3586a45f18d95601897edce821fa6f03ea1017c91_prof);

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
