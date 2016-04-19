<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b5147c094de89613dd4e5f06523a5233db3e9634686b408b262537a1136a6757 extends Twig_Template
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
        $__internal_e1ae119604ac043f8cad5ba52439f5a7c377fc1175e13c8699d9f235980be228 = $this->env->getExtension("native_profiler");
        $__internal_e1ae119604ac043f8cad5ba52439f5a7c377fc1175e13c8699d9f235980be228->enter($__internal_e1ae119604ac043f8cad5ba52439f5a7c377fc1175e13c8699d9f235980be228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e1ae119604ac043f8cad5ba52439f5a7c377fc1175e13c8699d9f235980be228->leave($__internal_e1ae119604ac043f8cad5ba52439f5a7c377fc1175e13c8699d9f235980be228_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
