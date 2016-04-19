<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_838130c4f9a06eb6a9c7b163e27ce8d199f8e8c123d8e343e3edba8f509a038c extends Twig_Template
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
        $__internal_fbf8ce17fe686aabfd1857459ead006bd3fdd979808b4594af4965c6e29ec71b = $this->env->getExtension("native_profiler");
        $__internal_fbf8ce17fe686aabfd1857459ead006bd3fdd979808b4594af4965c6e29ec71b->enter($__internal_fbf8ce17fe686aabfd1857459ead006bd3fdd979808b4594af4965c6e29ec71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fbf8ce17fe686aabfd1857459ead006bd3fdd979808b4594af4965c6e29ec71b->leave($__internal_fbf8ce17fe686aabfd1857459ead006bd3fdd979808b4594af4965c6e29ec71b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
