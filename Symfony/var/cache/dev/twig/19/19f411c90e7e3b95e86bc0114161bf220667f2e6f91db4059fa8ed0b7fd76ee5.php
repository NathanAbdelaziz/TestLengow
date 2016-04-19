<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f44f4e828b12dd93d6746e516bdc13ba4e18dd04e8c5178c8a72ab06564600d2 extends Twig_Template
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
        $__internal_5a1224793c301b44a49af9d5dd6a2685bbfe4aea91d6679ba4a16ede8e83545b = $this->env->getExtension("native_profiler");
        $__internal_5a1224793c301b44a49af9d5dd6a2685bbfe4aea91d6679ba4a16ede8e83545b->enter($__internal_5a1224793c301b44a49af9d5dd6a2685bbfe4aea91d6679ba4a16ede8e83545b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5a1224793c301b44a49af9d5dd6a2685bbfe4aea91d6679ba4a16ede8e83545b->leave($__internal_5a1224793c301b44a49af9d5dd6a2685bbfe4aea91d6679ba4a16ede8e83545b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
