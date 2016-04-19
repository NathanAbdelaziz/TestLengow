<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e223257ec8c92bae51a998e5b624ba88022706456f432eb1f4be7c5929679de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feb1f6ea4d8082e9d14b1fc6a987b0be0e570e967d120ae960033d27de0b9c76 = $this->env->getExtension("native_profiler");
        $__internal_feb1f6ea4d8082e9d14b1fc6a987b0be0e570e967d120ae960033d27de0b9c76->enter($__internal_feb1f6ea4d8082e9d14b1fc6a987b0be0e570e967d120ae960033d27de0b9c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_feb1f6ea4d8082e9d14b1fc6a987b0be0e570e967d120ae960033d27de0b9c76->leave($__internal_feb1f6ea4d8082e9d14b1fc6a987b0be0e570e967d120ae960033d27de0b9c76_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_90a3bec877cb2bad30199a164d2f15004594f4609306d9c4ab98dc2a08212c87 = $this->env->getExtension("native_profiler");
        $__internal_90a3bec877cb2bad30199a164d2f15004594f4609306d9c4ab98dc2a08212c87->enter($__internal_90a3bec877cb2bad30199a164d2f15004594f4609306d9c4ab98dc2a08212c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_90a3bec877cb2bad30199a164d2f15004594f4609306d9c4ab98dc2a08212c87->leave($__internal_90a3bec877cb2bad30199a164d2f15004594f4609306d9c4ab98dc2a08212c87_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
