<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5488d342e42f21f328e0bae4b490a331128e7c74831b0236a0a5f8fbe33a0dd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_8df1e609e503d83b0d798615e56fff976e7d912ad2150819cf31035e77673088 = $this->env->getExtension("native_profiler");
        $__internal_8df1e609e503d83b0d798615e56fff976e7d912ad2150819cf31035e77673088->enter($__internal_8df1e609e503d83b0d798615e56fff976e7d912ad2150819cf31035e77673088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df1e609e503d83b0d798615e56fff976e7d912ad2150819cf31035e77673088->leave($__internal_8df1e609e503d83b0d798615e56fff976e7d912ad2150819cf31035e77673088_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56c6825e66cf2e8ca6bed76d7aab56777c46011a7e94a0a8183342e875afa030 = $this->env->getExtension("native_profiler");
        $__internal_56c6825e66cf2e8ca6bed76d7aab56777c46011a7e94a0a8183342e875afa030->enter($__internal_56c6825e66cf2e8ca6bed76d7aab56777c46011a7e94a0a8183342e875afa030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_56c6825e66cf2e8ca6bed76d7aab56777c46011a7e94a0a8183342e875afa030->leave($__internal_56c6825e66cf2e8ca6bed76d7aab56777c46011a7e94a0a8183342e875afa030_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c31a371432aaf18fd4c2d08f3862d09e641fc5bc3208618ca2c0b2f2124aeaa8 = $this->env->getExtension("native_profiler");
        $__internal_c31a371432aaf18fd4c2d08f3862d09e641fc5bc3208618ca2c0b2f2124aeaa8->enter($__internal_c31a371432aaf18fd4c2d08f3862d09e641fc5bc3208618ca2c0b2f2124aeaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c31a371432aaf18fd4c2d08f3862d09e641fc5bc3208618ca2c0b2f2124aeaa8->leave($__internal_c31a371432aaf18fd4c2d08f3862d09e641fc5bc3208618ca2c0b2f2124aeaa8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c03462bca2dcdcbe7f340f6625674ceff34c066b249696010659baeb00bb096 = $this->env->getExtension("native_profiler");
        $__internal_3c03462bca2dcdcbe7f340f6625674ceff34c066b249696010659baeb00bb096->enter($__internal_3c03462bca2dcdcbe7f340f6625674ceff34c066b249696010659baeb00bb096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c03462bca2dcdcbe7f340f6625674ceff34c066b249696010659baeb00bb096->leave($__internal_3c03462bca2dcdcbe7f340f6625674ceff34c066b249696010659baeb00bb096_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
