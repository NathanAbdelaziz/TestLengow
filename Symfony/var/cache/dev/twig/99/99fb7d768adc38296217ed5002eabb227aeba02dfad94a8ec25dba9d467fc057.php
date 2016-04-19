<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_b95cb904cfa53183eab8b81a10887acacfe5504bc8998411f1c4820e4c1bc677 extends Twig_Template
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
        $__internal_8c96d989dd8945925b3328526742032b28a68c886ad4768eb8843970d1a79c8d = $this->env->getExtension("native_profiler");
        $__internal_8c96d989dd8945925b3328526742032b28a68c886ad4768eb8843970d1a79c8d->enter($__internal_8c96d989dd8945925b3328526742032b28a68c886ad4768eb8843970d1a79c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8c96d989dd8945925b3328526742032b28a68c886ad4768eb8843970d1a79c8d->leave($__internal_8c96d989dd8945925b3328526742032b28a68c886ad4768eb8843970d1a79c8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
