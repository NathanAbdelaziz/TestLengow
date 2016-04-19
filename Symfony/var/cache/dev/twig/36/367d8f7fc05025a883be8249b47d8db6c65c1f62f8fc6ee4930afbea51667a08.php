<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7ef970954c7fcb7966d0aa39c99c76c05aa192ebde719c2cd1adc437da1996b3 extends Twig_Template
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
        $__internal_f780d4cc23872ff984b335afbd7aee08eacfa58612d1c4828393330aad09b5f4 = $this->env->getExtension("native_profiler");
        $__internal_f780d4cc23872ff984b335afbd7aee08eacfa58612d1c4828393330aad09b5f4->enter($__internal_f780d4cc23872ff984b335afbd7aee08eacfa58612d1c4828393330aad09b5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f780d4cc23872ff984b335afbd7aee08eacfa58612d1c4828393330aad09b5f4->leave($__internal_f780d4cc23872ff984b335afbd7aee08eacfa58612d1c4828393330aad09b5f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
