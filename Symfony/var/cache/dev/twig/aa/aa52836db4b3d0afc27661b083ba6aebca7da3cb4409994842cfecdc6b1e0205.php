<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_bd59b91107686698c8f0e44ac4c9e24d7861982badacc517dd71e72d69ea4b88 extends Twig_Template
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
        $__internal_9c9223f5c2ea539289acec66f0a303247294cdb4c6778ded54890ab7b3ba7521 = $this->env->getExtension("native_profiler");
        $__internal_9c9223f5c2ea539289acec66f0a303247294cdb4c6778ded54890ab7b3ba7521->enter($__internal_9c9223f5c2ea539289acec66f0a303247294cdb4c6778ded54890ab7b3ba7521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9c9223f5c2ea539289acec66f0a303247294cdb4c6778ded54890ab7b3ba7521->leave($__internal_9c9223f5c2ea539289acec66f0a303247294cdb4c6778ded54890ab7b3ba7521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
