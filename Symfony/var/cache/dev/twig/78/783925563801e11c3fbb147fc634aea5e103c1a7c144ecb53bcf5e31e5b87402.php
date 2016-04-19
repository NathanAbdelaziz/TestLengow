<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e679361380eee97a7d147365081d427604e0447a0330969be02cb22fad20888c extends Twig_Template
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
        $__internal_1b8f45ab218d5a5d6aa2667807c74d0c47209832227aa41772f28d6c825ac2c4 = $this->env->getExtension("native_profiler");
        $__internal_1b8f45ab218d5a5d6aa2667807c74d0c47209832227aa41772f28d6c825ac2c4->enter($__internal_1b8f45ab218d5a5d6aa2667807c74d0c47209832227aa41772f28d6c825ac2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1b8f45ab218d5a5d6aa2667807c74d0c47209832227aa41772f28d6c825ac2c4->leave($__internal_1b8f45ab218d5a5d6aa2667807c74d0c47209832227aa41772f28d6c825ac2c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
