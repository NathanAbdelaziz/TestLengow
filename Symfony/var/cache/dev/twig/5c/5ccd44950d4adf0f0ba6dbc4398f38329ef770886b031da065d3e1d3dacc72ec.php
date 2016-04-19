<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2dda300a5441a2577a78a352cba795155b2d6e4735e137257c331b04b1636a6b extends Twig_Template
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
        $__internal_f18a06ad713a2faf57fe04b3d4b40b446469e8cac3f43f8e48c125642aa75552 = $this->env->getExtension("native_profiler");
        $__internal_f18a06ad713a2faf57fe04b3d4b40b446469e8cac3f43f8e48c125642aa75552->enter($__internal_f18a06ad713a2faf57fe04b3d4b40b446469e8cac3f43f8e48c125642aa75552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f18a06ad713a2faf57fe04b3d4b40b446469e8cac3f43f8e48c125642aa75552->leave($__internal_f18a06ad713a2faf57fe04b3d4b40b446469e8cac3f43f8e48c125642aa75552_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
