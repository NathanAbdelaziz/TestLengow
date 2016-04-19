<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_954f649a11975419f6e68003f616115e537c8dda6f411b225e172f6dd171c718 extends Twig_Template
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
        $__internal_d4b4cc79217b5b83acf71818df11007f2ee0562a12cfd0903ad4339d1c315d61 = $this->env->getExtension("native_profiler");
        $__internal_d4b4cc79217b5b83acf71818df11007f2ee0562a12cfd0903ad4339d1c315d61->enter($__internal_d4b4cc79217b5b83acf71818df11007f2ee0562a12cfd0903ad4339d1c315d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d4b4cc79217b5b83acf71818df11007f2ee0562a12cfd0903ad4339d1c315d61->leave($__internal_d4b4cc79217b5b83acf71818df11007f2ee0562a12cfd0903ad4339d1c315d61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
