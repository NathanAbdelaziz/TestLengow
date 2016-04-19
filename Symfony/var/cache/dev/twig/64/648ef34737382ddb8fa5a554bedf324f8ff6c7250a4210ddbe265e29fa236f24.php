<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ec77a5057f0e2b914c9aaf34bf00bfa43ed3c27e7b16a9880a4fdc1ec47a2d83 extends Twig_Template
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
        $__internal_df91738186c3cd17524f46006c7cfac519e4901f2808cb822883ccf5d4c9c07c = $this->env->getExtension("native_profiler");
        $__internal_df91738186c3cd17524f46006c7cfac519e4901f2808cb822883ccf5d4c9c07c->enter($__internal_df91738186c3cd17524f46006c7cfac519e4901f2808cb822883ccf5d4c9c07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_df91738186c3cd17524f46006c7cfac519e4901f2808cb822883ccf5d4c9c07c->leave($__internal_df91738186c3cd17524f46006c7cfac519e4901f2808cb822883ccf5d4c9c07c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
