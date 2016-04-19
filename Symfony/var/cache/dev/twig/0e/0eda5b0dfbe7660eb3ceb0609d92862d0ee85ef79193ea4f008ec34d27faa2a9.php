<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6e0e23d36e91db911b0f8f854929bc8fdfcd801acac6a85e3ca9c3858fe63d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_824ffb30f04839edec3a504ba045a5240f03769509931085966445950a91806d = $this->env->getExtension("native_profiler");
        $__internal_824ffb30f04839edec3a504ba045a5240f03769509931085966445950a91806d->enter($__internal_824ffb30f04839edec3a504ba045a5240f03769509931085966445950a91806d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_824ffb30f04839edec3a504ba045a5240f03769509931085966445950a91806d->leave($__internal_824ffb30f04839edec3a504ba045a5240f03769509931085966445950a91806d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_effbfbc4f129e597ae225eaddefe8626fba833ec1e2efb0b32e976ab99ee531b = $this->env->getExtension("native_profiler");
        $__internal_effbfbc4f129e597ae225eaddefe8626fba833ec1e2efb0b32e976ab99ee531b->enter($__internal_effbfbc4f129e597ae225eaddefe8626fba833ec1e2efb0b32e976ab99ee531b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_effbfbc4f129e597ae225eaddefe8626fba833ec1e2efb0b32e976ab99ee531b->leave($__internal_effbfbc4f129e597ae225eaddefe8626fba833ec1e2efb0b32e976ab99ee531b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ffaf37c2084d8058f64182cb095c98b72c43b61625dd6373e818a1aa720c2d5 = $this->env->getExtension("native_profiler");
        $__internal_6ffaf37c2084d8058f64182cb095c98b72c43b61625dd6373e818a1aa720c2d5->enter($__internal_6ffaf37c2084d8058f64182cb095c98b72c43b61625dd6373e818a1aa720c2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ffaf37c2084d8058f64182cb095c98b72c43b61625dd6373e818a1aa720c2d5->leave($__internal_6ffaf37c2084d8058f64182cb095c98b72c43b61625dd6373e818a1aa720c2d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8cc86ab90854dfee0ee32eecac403b689979854564f44b2853395a64a9d7e28 = $this->env->getExtension("native_profiler");
        $__internal_f8cc86ab90854dfee0ee32eecac403b689979854564f44b2853395a64a9d7e28->enter($__internal_f8cc86ab90854dfee0ee32eecac403b689979854564f44b2853395a64a9d7e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f8cc86ab90854dfee0ee32eecac403b689979854564f44b2853395a64a9d7e28->leave($__internal_f8cc86ab90854dfee0ee32eecac403b689979854564f44b2853395a64a9d7e28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
