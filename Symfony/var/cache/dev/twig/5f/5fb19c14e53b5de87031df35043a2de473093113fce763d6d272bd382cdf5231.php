<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_14d448e1a9993b377ad5daa539689ef4594fad5401227b240e41d1d91d4ee1af extends Twig_Template
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
        $__internal_c5f223244823f80bf9cc7b21fd67859716466ec66990b0abf9d7400ef174f605 = $this->env->getExtension("native_profiler");
        $__internal_c5f223244823f80bf9cc7b21fd67859716466ec66990b0abf9d7400ef174f605->enter($__internal_c5f223244823f80bf9cc7b21fd67859716466ec66990b0abf9d7400ef174f605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c5f223244823f80bf9cc7b21fd67859716466ec66990b0abf9d7400ef174f605->leave($__internal_c5f223244823f80bf9cc7b21fd67859716466ec66990b0abf9d7400ef174f605_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
