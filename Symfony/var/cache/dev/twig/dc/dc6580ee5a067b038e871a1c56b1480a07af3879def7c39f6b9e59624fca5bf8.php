<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_79d4f0c6e7cee7f00329d162e26edeac47540787f09fd1ae69b7741ad09a6d17 extends Twig_Template
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
        $__internal_252c67546a54a6259961f930a7b3b0e2da2abe06c0aebd6d35bd19bf545b5bef = $this->env->getExtension("native_profiler");
        $__internal_252c67546a54a6259961f930a7b3b0e2da2abe06c0aebd6d35bd19bf545b5bef->enter($__internal_252c67546a54a6259961f930a7b3b0e2da2abe06c0aebd6d35bd19bf545b5bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_252c67546a54a6259961f930a7b3b0e2da2abe06c0aebd6d35bd19bf545b5bef->leave($__internal_252c67546a54a6259961f930a7b3b0e2da2abe06c0aebd6d35bd19bf545b5bef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
