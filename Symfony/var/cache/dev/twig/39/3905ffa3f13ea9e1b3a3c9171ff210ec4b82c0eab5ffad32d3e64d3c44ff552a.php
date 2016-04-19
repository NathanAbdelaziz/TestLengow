<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9fa5373ed3bc56925cb28645d07a0e51eb5de467c3110837c6127f16ef03ee35 extends Twig_Template
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
        $__internal_b0b9c3014271f6cda311988de018c85a39a615ac752167f9d38265ab934619af = $this->env->getExtension("native_profiler");
        $__internal_b0b9c3014271f6cda311988de018c85a39a615ac752167f9d38265ab934619af->enter($__internal_b0b9c3014271f6cda311988de018c85a39a615ac752167f9d38265ab934619af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b0b9c3014271f6cda311988de018c85a39a615ac752167f9d38265ab934619af->leave($__internal_b0b9c3014271f6cda311988de018c85a39a615ac752167f9d38265ab934619af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
