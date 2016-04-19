<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5dc9e0a53e2d349ff18545b747c8b9c499910751292340d0678bc022adebe72c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9515fc13bea88174eb5b02ef63143bb52cbfd97f2ab5ede2ecc6c97baea3e808 = $this->env->getExtension("native_profiler");
        $__internal_9515fc13bea88174eb5b02ef63143bb52cbfd97f2ab5ede2ecc6c97baea3e808->enter($__internal_9515fc13bea88174eb5b02ef63143bb52cbfd97f2ab5ede2ecc6c97baea3e808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9515fc13bea88174eb5b02ef63143bb52cbfd97f2ab5ede2ecc6c97baea3e808->leave($__internal_9515fc13bea88174eb5b02ef63143bb52cbfd97f2ab5ede2ecc6c97baea3e808_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2af7166b211e484199b51a58adb6a08f6de28587cfcdfa62039fd15263548189 = $this->env->getExtension("native_profiler");
        $__internal_2af7166b211e484199b51a58adb6a08f6de28587cfcdfa62039fd15263548189->enter($__internal_2af7166b211e484199b51a58adb6a08f6de28587cfcdfa62039fd15263548189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2af7166b211e484199b51a58adb6a08f6de28587cfcdfa62039fd15263548189->leave($__internal_2af7166b211e484199b51a58adb6a08f6de28587cfcdfa62039fd15263548189_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39dbcc4b9c47bbdca10898a3b273d4fec14c3305aec79806815741e3d47637d0 = $this->env->getExtension("native_profiler");
        $__internal_39dbcc4b9c47bbdca10898a3b273d4fec14c3305aec79806815741e3d47637d0->enter($__internal_39dbcc4b9c47bbdca10898a3b273d4fec14c3305aec79806815741e3d47637d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_39dbcc4b9c47bbdca10898a3b273d4fec14c3305aec79806815741e3d47637d0->leave($__internal_39dbcc4b9c47bbdca10898a3b273d4fec14c3305aec79806815741e3d47637d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
