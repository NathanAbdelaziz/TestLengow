<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_97a308348ec16c1f927b5a38116a206b11cb2415a570269e38c54c167e5c4fed extends Twig_Template
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
        $__internal_9542b258616e796e21867a169efa7cdef1aedcaaf0667574df5d990ddd6d36df = $this->env->getExtension("native_profiler");
        $__internal_9542b258616e796e21867a169efa7cdef1aedcaaf0667574df5d990ddd6d36df->enter($__internal_9542b258616e796e21867a169efa7cdef1aedcaaf0667574df5d990ddd6d36df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9542b258616e796e21867a169efa7cdef1aedcaaf0667574df5d990ddd6d36df->leave($__internal_9542b258616e796e21867a169efa7cdef1aedcaaf0667574df5d990ddd6d36df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
