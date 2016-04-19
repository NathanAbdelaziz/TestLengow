<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3e260d9d1d5b1bb4fa866e767f701928bcf2e8235aca7818f3216504c5fbab37 extends Twig_Template
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
        $__internal_cf1c635186d22f0ca2ce1c7ac888c859a2afae22d59311ff13ee7489ecf6cee7 = $this->env->getExtension("native_profiler");
        $__internal_cf1c635186d22f0ca2ce1c7ac888c859a2afae22d59311ff13ee7489ecf6cee7->enter($__internal_cf1c635186d22f0ca2ce1c7ac888c859a2afae22d59311ff13ee7489ecf6cee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_cf1c635186d22f0ca2ce1c7ac888c859a2afae22d59311ff13ee7489ecf6cee7->leave($__internal_cf1c635186d22f0ca2ce1c7ac888c859a2afae22d59311ff13ee7489ecf6cee7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
