<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_bc9e59704d9f3a48403e38bda312289cfd79759bdc523dc1547a4607ccd59081 extends Twig_Template
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
        $__internal_7e3b2d45a1a28654afce6c8e38161b34db511c3706aeb195f31201c9b2ce78d6 = $this->env->getExtension("native_profiler");
        $__internal_7e3b2d45a1a28654afce6c8e38161b34db511c3706aeb195f31201c9b2ce78d6->enter($__internal_7e3b2d45a1a28654afce6c8e38161b34db511c3706aeb195f31201c9b2ce78d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7e3b2d45a1a28654afce6c8e38161b34db511c3706aeb195f31201c9b2ce78d6->leave($__internal_7e3b2d45a1a28654afce6c8e38161b34db511c3706aeb195f31201c9b2ce78d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
