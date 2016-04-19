<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_91868efb6b91de745bb42417b02b097ad2df1e3a5828ad93591c0f2c8142f092 extends Twig_Template
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
        $__internal_f3e6e52e3be588c4f10f5a425f320ecc58db8cb8e7d2eb8207200e78a60d34e3 = $this->env->getExtension("native_profiler");
        $__internal_f3e6e52e3be588c4f10f5a425f320ecc58db8cb8e7d2eb8207200e78a60d34e3->enter($__internal_f3e6e52e3be588c4f10f5a425f320ecc58db8cb8e7d2eb8207200e78a60d34e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f3e6e52e3be588c4f10f5a425f320ecc58db8cb8e7d2eb8207200e78a60d34e3->leave($__internal_f3e6e52e3be588c4f10f5a425f320ecc58db8cb8e7d2eb8207200e78a60d34e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
