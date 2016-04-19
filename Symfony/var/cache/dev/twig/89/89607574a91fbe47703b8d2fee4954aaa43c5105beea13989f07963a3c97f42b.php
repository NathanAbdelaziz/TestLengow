<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_77355952cee0a11b36ed8c1de4320f95bcce48d08ea421afeca3ec310e694a61 extends Twig_Template
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
        $__internal_83c1d4a4c8dc00b2b01dba5c456ed6b76a61cc803c429596e9e38d5c8f022c72 = $this->env->getExtension("native_profiler");
        $__internal_83c1d4a4c8dc00b2b01dba5c456ed6b76a61cc803c429596e9e38d5c8f022c72->enter($__internal_83c1d4a4c8dc00b2b01dba5c456ed6b76a61cc803c429596e9e38d5c8f022c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_83c1d4a4c8dc00b2b01dba5c456ed6b76a61cc803c429596e9e38d5c8f022c72->leave($__internal_83c1d4a4c8dc00b2b01dba5c456ed6b76a61cc803c429596e9e38d5c8f022c72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
