<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d2d25413b7f418bf3bed70d2ebebd2f34dbe6d4dab4404a1e6aac473f7f0c95f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e5a5177fa0c6e37e7ffb3fdbaa4116c7ff8121dcd4d9e9b29436cc038c7603c = $this->env->getExtension("native_profiler");
        $__internal_5e5a5177fa0c6e37e7ffb3fdbaa4116c7ff8121dcd4d9e9b29436cc038c7603c->enter($__internal_5e5a5177fa0c6e37e7ffb3fdbaa4116c7ff8121dcd4d9e9b29436cc038c7603c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5a5177fa0c6e37e7ffb3fdbaa4116c7ff8121dcd4d9e9b29436cc038c7603c->leave($__internal_5e5a5177fa0c6e37e7ffb3fdbaa4116c7ff8121dcd4d9e9b29436cc038c7603c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_939b0a5f0f742990f8f6280ed58e0c8dbaec9e47e5ef4a570ea4fca19b67d880 = $this->env->getExtension("native_profiler");
        $__internal_939b0a5f0f742990f8f6280ed58e0c8dbaec9e47e5ef4a570ea4fca19b67d880->enter($__internal_939b0a5f0f742990f8f6280ed58e0c8dbaec9e47e5ef4a570ea4fca19b67d880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_939b0a5f0f742990f8f6280ed58e0c8dbaec9e47e5ef4a570ea4fca19b67d880->leave($__internal_939b0a5f0f742990f8f6280ed58e0c8dbaec9e47e5ef4a570ea4fca19b67d880_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef952e6a2a186354ef3be1e1546297a9e5fbc6d8f759e060129544ced9fa0fe5 = $this->env->getExtension("native_profiler");
        $__internal_ef952e6a2a186354ef3be1e1546297a9e5fbc6d8f759e060129544ced9fa0fe5->enter($__internal_ef952e6a2a186354ef3be1e1546297a9e5fbc6d8f759e060129544ced9fa0fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef952e6a2a186354ef3be1e1546297a9e5fbc6d8f759e060129544ced9fa0fe5->leave($__internal_ef952e6a2a186354ef3be1e1546297a9e5fbc6d8f759e060129544ced9fa0fe5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84ec33d908cacee6b78e0b4b2625b8d642d405acdbbef25a50599d8a8121f264 = $this->env->getExtension("native_profiler");
        $__internal_84ec33d908cacee6b78e0b4b2625b8d642d405acdbbef25a50599d8a8121f264->enter($__internal_84ec33d908cacee6b78e0b4b2625b8d642d405acdbbef25a50599d8a8121f264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_84ec33d908cacee6b78e0b4b2625b8d642d405acdbbef25a50599d8a8121f264->leave($__internal_84ec33d908cacee6b78e0b4b2625b8d642d405acdbbef25a50599d8a8121f264_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
