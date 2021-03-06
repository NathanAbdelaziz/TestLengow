<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f574b407e7a9374bc6fdb05962625c1c178b0cb4a42e942300ea7125e7b33d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_851c74688ffa69465f9db64469ddbd64380bcefdc1560d505ad8183d30acd0ee = $this->env->getExtension("native_profiler");
        $__internal_851c74688ffa69465f9db64469ddbd64380bcefdc1560d505ad8183d30acd0ee->enter($__internal_851c74688ffa69465f9db64469ddbd64380bcefdc1560d505ad8183d30acd0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_851c74688ffa69465f9db64469ddbd64380bcefdc1560d505ad8183d30acd0ee->leave($__internal_851c74688ffa69465f9db64469ddbd64380bcefdc1560d505ad8183d30acd0ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e1a09fd7a603d348925ad4d1bd4ec92a253d84c1f84f613c2e2852aa6069a9b = $this->env->getExtension("native_profiler");
        $__internal_7e1a09fd7a603d348925ad4d1bd4ec92a253d84c1f84f613c2e2852aa6069a9b->enter($__internal_7e1a09fd7a603d348925ad4d1bd4ec92a253d84c1f84f613c2e2852aa6069a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e1a09fd7a603d348925ad4d1bd4ec92a253d84c1f84f613c2e2852aa6069a9b->leave($__internal_7e1a09fd7a603d348925ad4d1bd4ec92a253d84c1f84f613c2e2852aa6069a9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6763fd6dce1b5bc21619b66ede75cda8ce9eb9344786cc383a5d045977f25fb3 = $this->env->getExtension("native_profiler");
        $__internal_6763fd6dce1b5bc21619b66ede75cda8ce9eb9344786cc383a5d045977f25fb3->enter($__internal_6763fd6dce1b5bc21619b66ede75cda8ce9eb9344786cc383a5d045977f25fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6763fd6dce1b5bc21619b66ede75cda8ce9eb9344786cc383a5d045977f25fb3->leave($__internal_6763fd6dce1b5bc21619b66ede75cda8ce9eb9344786cc383a5d045977f25fb3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc7a91b65e8816c19534e95bf399fccdfd872b0e5295bd46796b9ec3da19f541 = $this->env->getExtension("native_profiler");
        $__internal_bc7a91b65e8816c19534e95bf399fccdfd872b0e5295bd46796b9ec3da19f541->enter($__internal_bc7a91b65e8816c19534e95bf399fccdfd872b0e5295bd46796b9ec3da19f541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bc7a91b65e8816c19534e95bf399fccdfd872b0e5295bd46796b9ec3da19f541->leave($__internal_bc7a91b65e8816c19534e95bf399fccdfd872b0e5295bd46796b9ec3da19f541_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
