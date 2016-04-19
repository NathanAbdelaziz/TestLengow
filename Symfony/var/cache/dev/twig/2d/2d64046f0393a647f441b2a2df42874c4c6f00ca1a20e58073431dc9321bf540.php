<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1fffd213e5a08f9feda61cbb51245dd8b9867c23a52a5b81b948b61b3a3a2bf0 extends Twig_Template
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
        $__internal_5fe1fc8593a8806f422a34622069db961ddf1c3002577206b54e62e690da609f = $this->env->getExtension("native_profiler");
        $__internal_5fe1fc8593a8806f422a34622069db961ddf1c3002577206b54e62e690da609f->enter($__internal_5fe1fc8593a8806f422a34622069db961ddf1c3002577206b54e62e690da609f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5fe1fc8593a8806f422a34622069db961ddf1c3002577206b54e62e690da609f->leave($__internal_5fe1fc8593a8806f422a34622069db961ddf1c3002577206b54e62e690da609f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
