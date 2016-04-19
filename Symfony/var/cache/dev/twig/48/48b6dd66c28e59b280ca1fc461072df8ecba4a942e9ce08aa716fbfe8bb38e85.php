<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4ce681b46380f9ce5d77d7c17545e41a3286fc194c9815fefe34bde368fa1aef extends Twig_Template
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
        $__internal_d658677b61d43fe9cd9eb0c6d310f366debf7478ec16d110f00b18987bf2ff70 = $this->env->getExtension("native_profiler");
        $__internal_d658677b61d43fe9cd9eb0c6d310f366debf7478ec16d110f00b18987bf2ff70->enter($__internal_d658677b61d43fe9cd9eb0c6d310f366debf7478ec16d110f00b18987bf2ff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d658677b61d43fe9cd9eb0c6d310f366debf7478ec16d110f00b18987bf2ff70->leave($__internal_d658677b61d43fe9cd9eb0c6d310f366debf7478ec16d110f00b18987bf2ff70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
