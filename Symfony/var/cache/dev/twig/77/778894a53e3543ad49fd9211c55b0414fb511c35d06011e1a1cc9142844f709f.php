<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_51b34d85091a6cd7c14fde336e1c13921008399dea59e0a309c006f2daae4a1c extends Twig_Template
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
        $__internal_7b63c1cd98728261a106db6cbdeaf6f5ac40bdedb387eb7d85066caa8c6f7aac = $this->env->getExtension("native_profiler");
        $__internal_7b63c1cd98728261a106db6cbdeaf6f5ac40bdedb387eb7d85066caa8c6f7aac->enter($__internal_7b63c1cd98728261a106db6cbdeaf6f5ac40bdedb387eb7d85066caa8c6f7aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_7b63c1cd98728261a106db6cbdeaf6f5ac40bdedb387eb7d85066caa8c6f7aac->leave($__internal_7b63c1cd98728261a106db6cbdeaf6f5ac40bdedb387eb7d85066caa8c6f7aac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
