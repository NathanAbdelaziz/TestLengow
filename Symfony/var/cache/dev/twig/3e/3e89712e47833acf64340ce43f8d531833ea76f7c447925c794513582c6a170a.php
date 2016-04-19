<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1c14d49aafe3cba2537795f45744d5871842b8a2e029d9f90e50c8680d53f946 extends Twig_Template
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
        $__internal_29e545379e45e1104092f2e05cd9bf689a438eeceac559ae57db09cd9727ed99 = $this->env->getExtension("native_profiler");
        $__internal_29e545379e45e1104092f2e05cd9bf689a438eeceac559ae57db09cd9727ed99->enter($__internal_29e545379e45e1104092f2e05cd9bf689a438eeceac559ae57db09cd9727ed99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_29e545379e45e1104092f2e05cd9bf689a438eeceac559ae57db09cd9727ed99->leave($__internal_29e545379e45e1104092f2e05cd9bf689a438eeceac559ae57db09cd9727ed99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
