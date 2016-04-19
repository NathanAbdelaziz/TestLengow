<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b91d6f2dca70e6f76cd4b5007ad89d3ae504b56d42c1ed9ae920322c794a4fa0 extends Twig_Template
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
        $__internal_ef8cf8fa1d8a906a6c34d0098411591b764950fac81dba8d46327514d60c2dd5 = $this->env->getExtension("native_profiler");
        $__internal_ef8cf8fa1d8a906a6c34d0098411591b764950fac81dba8d46327514d60c2dd5->enter($__internal_ef8cf8fa1d8a906a6c34d0098411591b764950fac81dba8d46327514d60c2dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ef8cf8fa1d8a906a6c34d0098411591b764950fac81dba8d46327514d60c2dd5->leave($__internal_ef8cf8fa1d8a906a6c34d0098411591b764950fac81dba8d46327514d60c2dd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
