<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4b0ea216a6551d17426a5c69cc37f3d62fee28be9f7dfd4a8970fcc5d376fe6f extends Twig_Template
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
        $__internal_74b45e22dc58c8520729b35d327749a26d1a1f3049aa6c6dbca28abe15d5ef24 = $this->env->getExtension("native_profiler");
        $__internal_74b45e22dc58c8520729b35d327749a26d1a1f3049aa6c6dbca28abe15d5ef24->enter($__internal_74b45e22dc58c8520729b35d327749a26d1a1f3049aa6c6dbca28abe15d5ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_74b45e22dc58c8520729b35d327749a26d1a1f3049aa6c6dbca28abe15d5ef24->leave($__internal_74b45e22dc58c8520729b35d327749a26d1a1f3049aa6c6dbca28abe15d5ef24_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
