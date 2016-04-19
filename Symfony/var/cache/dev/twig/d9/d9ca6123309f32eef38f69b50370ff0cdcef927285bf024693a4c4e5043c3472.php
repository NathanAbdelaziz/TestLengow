<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_61fd4ef3586b2eadcb8c8f87eb3ce33fab2eefff8d38f837dca6c432c13fe016 extends Twig_Template
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
        $__internal_7da3a3cffb184c18fb3f4d8ce8ced02b75598a999208cc6f59dbfd94ee1d8e98 = $this->env->getExtension("native_profiler");
        $__internal_7da3a3cffb184c18fb3f4d8ce8ced02b75598a999208cc6f59dbfd94ee1d8e98->enter($__internal_7da3a3cffb184c18fb3f4d8ce8ced02b75598a999208cc6f59dbfd94ee1d8e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7da3a3cffb184c18fb3f4d8ce8ced02b75598a999208cc6f59dbfd94ee1d8e98->leave($__internal_7da3a3cffb184c18fb3f4d8ce8ced02b75598a999208cc6f59dbfd94ee1d8e98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
