<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_35dc98fabf9dc2cbdae6344fc34a76dcfa08bdf745fb494448ba4985e3006a67 extends Twig_Template
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
        $__internal_b9aefd778bb50e8693e550730d4432b0d66b242de302e9914b24318f17b5c7f2 = $this->env->getExtension("native_profiler");
        $__internal_b9aefd778bb50e8693e550730d4432b0d66b242de302e9914b24318f17b5c7f2->enter($__internal_b9aefd778bb50e8693e550730d4432b0d66b242de302e9914b24318f17b5c7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b9aefd778bb50e8693e550730d4432b0d66b242de302e9914b24318f17b5c7f2->leave($__internal_b9aefd778bb50e8693e550730d4432b0d66b242de302e9914b24318f17b5c7f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
