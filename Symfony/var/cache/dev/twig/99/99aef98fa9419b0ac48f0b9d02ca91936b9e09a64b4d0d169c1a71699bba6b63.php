<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_905111c22c4aa5efabdaf48dfee3878b1f89244926cf57ea16194679a337a75f extends Twig_Template
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
        $__internal_31cb26ed152b252d260d036ed74c5fc76a348df79428872fe3c921b2b7f03ab2 = $this->env->getExtension("native_profiler");
        $__internal_31cb26ed152b252d260d036ed74c5fc76a348df79428872fe3c921b2b7f03ab2->enter($__internal_31cb26ed152b252d260d036ed74c5fc76a348df79428872fe3c921b2b7f03ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_31cb26ed152b252d260d036ed74c5fc76a348df79428872fe3c921b2b7f03ab2->leave($__internal_31cb26ed152b252d260d036ed74c5fc76a348df79428872fe3c921b2b7f03ab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
