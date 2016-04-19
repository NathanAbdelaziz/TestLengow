<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_33a993be0c988dcc86a6ddaa3349e1031eb26d941ace6004f7f12f1c39643002 extends Twig_Template
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
        $__internal_46543d91769c89dec29d4586296dd16da9477e43da4241c6ccbb2563f8ec1dc4 = $this->env->getExtension("native_profiler");
        $__internal_46543d91769c89dec29d4586296dd16da9477e43da4241c6ccbb2563f8ec1dc4->enter($__internal_46543d91769c89dec29d4586296dd16da9477e43da4241c6ccbb2563f8ec1dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_46543d91769c89dec29d4586296dd16da9477e43da4241c6ccbb2563f8ec1dc4->leave($__internal_46543d91769c89dec29d4586296dd16da9477e43da4241c6ccbb2563f8ec1dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
