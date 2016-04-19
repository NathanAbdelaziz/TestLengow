<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c2a192347e6933c9c0385807f7765e04e9e71c528bf2cb9cbca37de2acc3a6c1 extends Twig_Template
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
        $__internal_f0b427289186662ef480a5688f3078ed229d3e2bbf613b32c1802ffbfa4f5b9a = $this->env->getExtension("native_profiler");
        $__internal_f0b427289186662ef480a5688f3078ed229d3e2bbf613b32c1802ffbfa4f5b9a->enter($__internal_f0b427289186662ef480a5688f3078ed229d3e2bbf613b32c1802ffbfa4f5b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f0b427289186662ef480a5688f3078ed229d3e2bbf613b32c1802ffbfa4f5b9a->leave($__internal_f0b427289186662ef480a5688f3078ed229d3e2bbf613b32c1802ffbfa4f5b9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
