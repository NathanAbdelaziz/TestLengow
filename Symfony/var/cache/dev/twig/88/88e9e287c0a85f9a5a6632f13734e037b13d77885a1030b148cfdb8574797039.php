<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_89acca2845447ae49be3a4a208bde42b2919f97c75670bdbf1a560f1b1ba4592 extends Twig_Template
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
        $__internal_795e2fce0bf0264dcceb6ad9378b411d7666077d2891409ee9826b8568580b85 = $this->env->getExtension("native_profiler");
        $__internal_795e2fce0bf0264dcceb6ad9378b411d7666077d2891409ee9826b8568580b85->enter($__internal_795e2fce0bf0264dcceb6ad9378b411d7666077d2891409ee9826b8568580b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_795e2fce0bf0264dcceb6ad9378b411d7666077d2891409ee9826b8568580b85->leave($__internal_795e2fce0bf0264dcceb6ad9378b411d7666077d2891409ee9826b8568580b85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
