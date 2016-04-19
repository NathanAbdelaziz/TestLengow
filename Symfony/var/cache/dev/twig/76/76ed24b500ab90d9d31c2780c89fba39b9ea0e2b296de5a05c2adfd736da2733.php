<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e9e61587f1629deb219bfc2777d6ed0b90141719a84074e2a09fb4bc6adccb43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_1c2e42ff3eaa4de179460b23dc9a66edeaf7748bc4af5e2c2b935084e42b2a30 = $this->env->getExtension("native_profiler");
        $__internal_1c2e42ff3eaa4de179460b23dc9a66edeaf7748bc4af5e2c2b935084e42b2a30->enter($__internal_1c2e42ff3eaa4de179460b23dc9a66edeaf7748bc4af5e2c2b935084e42b2a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c2e42ff3eaa4de179460b23dc9a66edeaf7748bc4af5e2c2b935084e42b2a30->leave($__internal_1c2e42ff3eaa4de179460b23dc9a66edeaf7748bc4af5e2c2b935084e42b2a30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeb848fe13c80922cb34a8a386498c33995c1126dc0e71a5a76d24bc4cdd672c = $this->env->getExtension("native_profiler");
        $__internal_aeb848fe13c80922cb34a8a386498c33995c1126dc0e71a5a76d24bc4cdd672c->enter($__internal_aeb848fe13c80922cb34a8a386498c33995c1126dc0e71a5a76d24bc4cdd672c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aeb848fe13c80922cb34a8a386498c33995c1126dc0e71a5a76d24bc4cdd672c->leave($__internal_aeb848fe13c80922cb34a8a386498c33995c1126dc0e71a5a76d24bc4cdd672c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e409270abd2c450fd8d4e4064494d72973d85e3ac361585affa6c24e378761b = $this->env->getExtension("native_profiler");
        $__internal_9e409270abd2c450fd8d4e4064494d72973d85e3ac361585affa6c24e378761b->enter($__internal_9e409270abd2c450fd8d4e4064494d72973d85e3ac361585affa6c24e378761b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e409270abd2c450fd8d4e4064494d72973d85e3ac361585affa6c24e378761b->leave($__internal_9e409270abd2c450fd8d4e4064494d72973d85e3ac361585affa6c24e378761b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
