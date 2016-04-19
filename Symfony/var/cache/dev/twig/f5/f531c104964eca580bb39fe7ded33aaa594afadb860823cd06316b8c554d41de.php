<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0c9fa2ed791ef7a0e19fae22d3cd687c126c4f877970951f6d09b032ef7446fd extends Twig_Template
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
        $__internal_bcadd2ba9412a634333f7619122001538fd3a4fd052361080739cae38121db9c = $this->env->getExtension("native_profiler");
        $__internal_bcadd2ba9412a634333f7619122001538fd3a4fd052361080739cae38121db9c->enter($__internal_bcadd2ba9412a634333f7619122001538fd3a4fd052361080739cae38121db9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bcadd2ba9412a634333f7619122001538fd3a4fd052361080739cae38121db9c->leave($__internal_bcadd2ba9412a634333f7619122001538fd3a4fd052361080739cae38121db9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
