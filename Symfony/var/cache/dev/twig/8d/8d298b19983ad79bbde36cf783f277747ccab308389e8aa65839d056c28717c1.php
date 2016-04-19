<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_64641ff3e4978741e47a0777eea8cd9dbff25a439f5cd4414254b7fd6153c989 extends Twig_Template
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
        $__internal_0491987ad0c5e0c195a9949815bcdc1b3a7ea2b9243c51d6b661576722cc907a = $this->env->getExtension("native_profiler");
        $__internal_0491987ad0c5e0c195a9949815bcdc1b3a7ea2b9243c51d6b661576722cc907a->enter($__internal_0491987ad0c5e0c195a9949815bcdc1b3a7ea2b9243c51d6b661576722cc907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0491987ad0c5e0c195a9949815bcdc1b3a7ea2b9243c51d6b661576722cc907a->leave($__internal_0491987ad0c5e0c195a9949815bcdc1b3a7ea2b9243c51d6b661576722cc907a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
