<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b5c53f3d1690eb89c083dc1c3d4e7aa17445681bd7652b810c518ee51b397085 extends Twig_Template
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
        $__internal_18bc4a138e1edbcee7f996ebc7cef7ba11444ecff106d5b34601ffccce4192a3 = $this->env->getExtension("native_profiler");
        $__internal_18bc4a138e1edbcee7f996ebc7cef7ba11444ecff106d5b34601ffccce4192a3->enter($__internal_18bc4a138e1edbcee7f996ebc7cef7ba11444ecff106d5b34601ffccce4192a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_18bc4a138e1edbcee7f996ebc7cef7ba11444ecff106d5b34601ffccce4192a3->leave($__internal_18bc4a138e1edbcee7f996ebc7cef7ba11444ecff106d5b34601ffccce4192a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
