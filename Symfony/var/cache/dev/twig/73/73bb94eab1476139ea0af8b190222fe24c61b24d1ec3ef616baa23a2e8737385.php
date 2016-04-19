<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_88f5cdd73e61942b25ddbbd9c75b85baaf2deb6f9b2d11130484e60a357df320 extends Twig_Template
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
        $__internal_cd68649f83e52c71e9992eafd0cf22c20076559f27789b148a137a569f5015c4 = $this->env->getExtension("native_profiler");
        $__internal_cd68649f83e52c71e9992eafd0cf22c20076559f27789b148a137a569f5015c4->enter($__internal_cd68649f83e52c71e9992eafd0cf22c20076559f27789b148a137a569f5015c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cd68649f83e52c71e9992eafd0cf22c20076559f27789b148a137a569f5015c4->leave($__internal_cd68649f83e52c71e9992eafd0cf22c20076559f27789b148a137a569f5015c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
