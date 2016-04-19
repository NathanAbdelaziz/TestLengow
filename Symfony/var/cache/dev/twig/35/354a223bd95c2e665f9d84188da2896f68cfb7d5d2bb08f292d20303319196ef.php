<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fe8c0b1348f7fe7620334bd8b2856433b6b13d90b56679af6b403055909c8105 extends Twig_Template
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
        $__internal_a7cae8d38fcdfbba0e9aab54b86b0d764bcd030036f2aa042b27c8348e7faa55 = $this->env->getExtension("native_profiler");
        $__internal_a7cae8d38fcdfbba0e9aab54b86b0d764bcd030036f2aa042b27c8348e7faa55->enter($__internal_a7cae8d38fcdfbba0e9aab54b86b0d764bcd030036f2aa042b27c8348e7faa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a7cae8d38fcdfbba0e9aab54b86b0d764bcd030036f2aa042b27c8348e7faa55->leave($__internal_a7cae8d38fcdfbba0e9aab54b86b0d764bcd030036f2aa042b27c8348e7faa55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
