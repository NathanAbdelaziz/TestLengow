<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0d9ad0a45cf8a3f1a3bbd0dec1ae1c5496df02870038967dfe25b11e82ff1f7b extends Twig_Template
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
        $__internal_cc6ab58e7b32e975166707c197a3b197367d75cdbb38c24d4f2f54458fea08c9 = $this->env->getExtension("native_profiler");
        $__internal_cc6ab58e7b32e975166707c197a3b197367d75cdbb38c24d4f2f54458fea08c9->enter($__internal_cc6ab58e7b32e975166707c197a3b197367d75cdbb38c24d4f2f54458fea08c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cc6ab58e7b32e975166707c197a3b197367d75cdbb38c24d4f2f54458fea08c9->leave($__internal_cc6ab58e7b32e975166707c197a3b197367d75cdbb38c24d4f2f54458fea08c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
