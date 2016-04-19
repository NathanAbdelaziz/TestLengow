<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4c2f41bd4bb5cc4e444db324feb4c138354804918dfce96812fdc18167eb52c7 extends Twig_Template
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
        $__internal_efbfdb137aa94425f06bc8351c215f1ab2b4e949c867e5bd56a5f3e329ab67e0 = $this->env->getExtension("native_profiler");
        $__internal_efbfdb137aa94425f06bc8351c215f1ab2b4e949c867e5bd56a5f3e329ab67e0->enter($__internal_efbfdb137aa94425f06bc8351c215f1ab2b4e949c867e5bd56a5f3e329ab67e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_efbfdb137aa94425f06bc8351c215f1ab2b4e949c867e5bd56a5f3e329ab67e0->leave($__internal_efbfdb137aa94425f06bc8351c215f1ab2b4e949c867e5bd56a5f3e329ab67e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
