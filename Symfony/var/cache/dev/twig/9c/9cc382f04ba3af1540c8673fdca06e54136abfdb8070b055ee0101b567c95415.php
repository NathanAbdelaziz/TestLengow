<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_743baa18c6ce329772069df12f0887444d5c72b1ae7b1fb77410f370172fbd72 extends Twig_Template
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
        $__internal_5407f13023bd59bbc7c686629662d6996ae71faff24646dcd7dcd9d5f5833f5f = $this->env->getExtension("native_profiler");
        $__internal_5407f13023bd59bbc7c686629662d6996ae71faff24646dcd7dcd9d5f5833f5f->enter($__internal_5407f13023bd59bbc7c686629662d6996ae71faff24646dcd7dcd9d5f5833f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5407f13023bd59bbc7c686629662d6996ae71faff24646dcd7dcd9d5f5833f5f->leave($__internal_5407f13023bd59bbc7c686629662d6996ae71faff24646dcd7dcd9d5f5833f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
