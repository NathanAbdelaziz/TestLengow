<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_40dd95f1d6e18f35ada9d167caad3b562c1b366988b324237ae179448349597a extends Twig_Template
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
        $__internal_e9fccedfc3e4c7241f54df4a200bc2700d891f2ba22d06ab883799c9bbadbace = $this->env->getExtension("native_profiler");
        $__internal_e9fccedfc3e4c7241f54df4a200bc2700d891f2ba22d06ab883799c9bbadbace->enter($__internal_e9fccedfc3e4c7241f54df4a200bc2700d891f2ba22d06ab883799c9bbadbace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e9fccedfc3e4c7241f54df4a200bc2700d891f2ba22d06ab883799c9bbadbace->leave($__internal_e9fccedfc3e4c7241f54df4a200bc2700d891f2ba22d06ab883799c9bbadbace_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
