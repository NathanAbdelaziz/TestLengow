<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ac3749b057cc1019cf2fdf372b999016b324cd11d9a097baf607c60bc4b2c93f extends Twig_Template
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
        $__internal_3ed62e59b3c7ad43894d15920dde9014dcf8b71a9ad6c4401d6d25820744b9d1 = $this->env->getExtension("native_profiler");
        $__internal_3ed62e59b3c7ad43894d15920dde9014dcf8b71a9ad6c4401d6d25820744b9d1->enter($__internal_3ed62e59b3c7ad43894d15920dde9014dcf8b71a9ad6c4401d6d25820744b9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3ed62e59b3c7ad43894d15920dde9014dcf8b71a9ad6c4401d6d25820744b9d1->leave($__internal_3ed62e59b3c7ad43894d15920dde9014dcf8b71a9ad6c4401d6d25820744b9d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
