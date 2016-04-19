<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2c1b12a1516a33ab052028bf9c27def6bce4d4aae0c604465228fa877aa10ec3 extends Twig_Template
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
        $__internal_858da029fcb8e19fdca4c1537eb7ec0eca003cffb13ad810938653aa0708bcc4 = $this->env->getExtension("native_profiler");
        $__internal_858da029fcb8e19fdca4c1537eb7ec0eca003cffb13ad810938653aa0708bcc4->enter($__internal_858da029fcb8e19fdca4c1537eb7ec0eca003cffb13ad810938653aa0708bcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_858da029fcb8e19fdca4c1537eb7ec0eca003cffb13ad810938653aa0708bcc4->leave($__internal_858da029fcb8e19fdca4c1537eb7ec0eca003cffb13ad810938653aa0708bcc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
