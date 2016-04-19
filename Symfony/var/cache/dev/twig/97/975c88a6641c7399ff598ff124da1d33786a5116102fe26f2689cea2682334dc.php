<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_fc1dace906d8130cb86b3b3fe40dd9a2d0dfbd29e7f29cdf14c841ab0ef53bd3 extends Twig_Template
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
        $__internal_bd042ff1439c096b2f9bc77d4effdadcdc1bdcc92b3ff75d6f21c1e3f1eae75d = $this->env->getExtension("native_profiler");
        $__internal_bd042ff1439c096b2f9bc77d4effdadcdc1bdcc92b3ff75d6f21c1e3f1eae75d->enter($__internal_bd042ff1439c096b2f9bc77d4effdadcdc1bdcc92b3ff75d6f21c1e3f1eae75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_bd042ff1439c096b2f9bc77d4effdadcdc1bdcc92b3ff75d6f21c1e3f1eae75d->leave($__internal_bd042ff1439c096b2f9bc77d4effdadcdc1bdcc92b3ff75d6f21c1e3f1eae75d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
