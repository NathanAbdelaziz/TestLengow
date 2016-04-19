<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cca8f64ecbb935fdbbbf51753164b41c41266d228fd9308ea0f2d096fc0c869b extends Twig_Template
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
        $__internal_dcd4a22b80469de6551c65315194e91f0ac1590a7118aecf9a7622a9406332f2 = $this->env->getExtension("native_profiler");
        $__internal_dcd4a22b80469de6551c65315194e91f0ac1590a7118aecf9a7622a9406332f2->enter($__internal_dcd4a22b80469de6551c65315194e91f0ac1590a7118aecf9a7622a9406332f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dcd4a22b80469de6551c65315194e91f0ac1590a7118aecf9a7622a9406332f2->leave($__internal_dcd4a22b80469de6551c65315194e91f0ac1590a7118aecf9a7622a9406332f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
