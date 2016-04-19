<?php

/* @APYDataGrid/blocks_js.jquery.html.twig */
class __TwigTemplate_5dcb465bb466ad05d4d278c0fa558a9c7a45adf8045f9c5015ec385fc3e5683c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APYDataGridBundle::blocks.html.twig", "@APYDataGrid/blocks_js.jquery.html.twig", 1);
        $this->blocks = array(
            'grid_scripts_goto' => array($this, 'block_grid_scripts_goto'),
            'grid_scripts_submit_form' => array($this, 'block_grid_scripts_submit_form'),
            'grid_scripts_ajax' => array($this, 'block_grid_scripts_ajax'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe136c7748cf76d5388d9ec34dac40e55448098f0c714b6f6bca7cf0263933e4 = $this->env->getExtension("native_profiler");
        $__internal_fe136c7748cf76d5388d9ec34dac40e55448098f0c714b6f6bca7cf0263933e4->enter($__internal_fe136c7748cf76d5388d9ec34dac40e55448098f0c714b6f6bca7cf0263933e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@APYDataGrid/blocks_js.jquery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe136c7748cf76d5388d9ec34dac40e55448098f0c714b6f6bca7cf0263933e4->leave($__internal_fe136c7748cf76d5388d9ec34dac40e55448098f0c714b6f6bca7cf0263933e4_prof);

    }

    // line 3
    public function block_grid_scripts_goto($context, array $blocks = array())
    {
        $__internal_c6383a914358de4879b22415d84cf3b67df72cce7bc3d08a9c86dd7fb61bf63d = $this->env->getExtension("native_profiler");
        $__internal_c6383a914358de4879b22415d84cf3b67df72cce7bc3d08a9c86dd7fb61bf63d->enter($__internal_c6383a914358de4879b22415d84cf3b67df72cce7bc3d08a9c86dd7fb61bf63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_goto"));

        // line 4
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto(url, data, type)
{
    type = type || 'GET';
    data = data || [];

    \$.ajax({
        url: url,
        data: data,
        type: type
    }).done(function( msg ) {
        \$('#";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "').parent().replaceWith(msg);
    });

    return false
}
";
        
        $__internal_c6383a914358de4879b22415d84cf3b67df72cce7bc3d08a9c86dd7fb61bf63d->leave($__internal_c6383a914358de4879b22415d84cf3b67df72cce7bc3d08a9c86dd7fb61bf63d_prof);

    }

    // line 21
    public function block_grid_scripts_submit_form($context, array $blocks = array())
    {
        $__internal_8a2ac63235614de51831e2d6849615db5ffa460e0fc2f946da490df327e38e2c = $this->env->getExtension("native_profiler");
        $__internal_8a2ac63235614de51831e2d6849615db5ffa460e0fc2f946da490df327e38e2c->enter($__internal_8a2ac63235614de51831e2d6849615db5ffa460e0fc2f946da490df327e38e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_submit_form"));

        // line 22
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_submitForm(event, form)
{
    if (event.type != 'keypress' || event.which == 13) {
        var data = '';
        \$('.grid-filter-operator select, .grid-filter-input-query-from, .grid-filter-input-query-to, .grid-filter-select-query-from, .grid-filter-select-query-to', form).each(function () {
            if (\$(this).is(':disabled') == false) {
                var name = \$(this).attr('name');
                var value = \$(this).val();
                if (value != null) {
                    if (\$(this).attr('multiple') == 'multiple') {
                        for(var i= 0; i < value.length; i++)
                        {
                            data += '&' + name + '=' + value[i];
                        }
                    } else {
                        data += '&' + name + '=' + value;
                    }
                } else {
                    data += '&' + name + '=';
                }
            }
        });

        ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl", array()), "html", null, true);
        echo "', data.substring(1), 'POST');

        return false;
    }
}
";
        
        $__internal_8a2ac63235614de51831e2d6849615db5ffa460e0fc2f946da490df327e38e2c->leave($__internal_8a2ac63235614de51831e2d6849615db5ffa460e0fc2f946da490df327e38e2c_prof);

    }

    // line 52
    public function block_grid_scripts_ajax($context, array $blocks = array())
    {
        $__internal_629a46b186be35a763c9c741fabab84160ee14ef50229da91770c145914ea2e4 = $this->env->getExtension("native_profiler");
        $__internal_629a46b186be35a763c9c741fabab84160ee14ef50229da91770c145914ea2e4->enter($__internal_629a46b186be35a763c9c741fabab84160ee14ef50229da91770c145914ea2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_ajax"));

        // line 53
        echo "\$(function () {
    // Order and pagerfanta links
    \$('.pagination li.disabled a', '#";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "').click(function (e) {
        return false;
    });

    // Order and pagerfanta links
    \$('a.order, nav a, a.searchOnClick, .pagination li:not(.disabled) a', '#";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "').click(function () {
        ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto(this.href);

        return false;
    });

    // Reset link
    \$('#";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo " a.grid-reset').click(function () {
        ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_reset();

        return false;
    });

    // Mass actions submit
    \$('#";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo " input.submit-massaction').click(function () {
        var selector = \$('#";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo " .grid_massactions select');

        ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl", array()), "html", null, true);
        echo "', selector.attr('name') + '=' + selector.val(), 'POST');

        return false;
    });

    // Grid_search submit (load only one time)
    \$('#";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_search').one('submit', function (event) {
        ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_submitForm(event, this);

        return false;
    });
});
";
        
        $__internal_629a46b186be35a763c9c741fabab84160ee14ef50229da91770c145914ea2e4->leave($__internal_629a46b186be35a763c9c741fabab84160ee14ef50229da91770c145914ea2e4_prof);

    }

    public function getTemplateName()
    {
        return "@APYDataGrid/blocks_js.jquery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 84,  181 => 83,  170 => 77,  165 => 75,  161 => 74,  152 => 68,  148 => 67,  139 => 61,  135 => 60,  127 => 55,  123 => 53,  117 => 52,  102 => 45,  75 => 22,  69 => 21,  56 => 14,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'APYDataGridBundle::blocks.html.twig' %}*/
/* */
/* {% block grid_scripts_goto %}*/
/* function {{ grid.hash }}_goto(url, data, type)*/
/* {*/
/*     type = type || 'GET';*/
/*     data = data || [];*/
/* */
/*     $.ajax({*/
/*         url: url,*/
/*         data: data,*/
/*         type: type*/
/*     }).done(function( msg ) {*/
/*         $('#{{ grid.hash }}').parent().replaceWith(msg);*/
/*     });*/
/* */
/*     return false*/
/* }*/
/* {% endblock grid_scripts_goto %}*/
/* */
/* {% block grid_scripts_submit_form %}*/
/* function {{ grid.hash }}_submitForm(event, form)*/
/* {*/
/*     if (event.type != 'keypress' || event.which == 13) {*/
/*         var data = '';*/
/*         $('.grid-filter-operator select, .grid-filter-input-query-from, .grid-filter-input-query-to, .grid-filter-select-query-from, .grid-filter-select-query-to', form).each(function () {*/
/*             if ($(this).is(':disabled') == false) {*/
/*                 var name = $(this).attr('name');*/
/*                 var value = $(this).val();*/
/*                 if (value != null) {*/
/*                     if ($(this).attr('multiple') == 'multiple') {*/
/*                         for(var i= 0; i < value.length; i++)*/
/*                         {*/
/*                             data += '&' + name + '=' + value[i];*/
/*                         }*/
/*                     } else {*/
/*                         data += '&' + name + '=' + value;*/
/*                     }*/
/*                 } else {*/
/*                     data += '&' + name + '=';*/
/*                 }*/
/*             }*/
/*         });*/
/* */
/*         {{ grid.hash }}_goto('{{ grid.routeUrl }}', data.substring(1), 'POST');*/
/* */
/*         return false;*/
/*     }*/
/* }*/
/* {% endblock grid_scripts_submit_form %}*/
/* */
/* {% block grid_scripts_ajax %}*/
/* $(function () {*/
/*     // Order and pagerfanta links*/
/*     $('.pagination li.disabled a', '#{{ grid.hash }}').click(function (e) {*/
/*         return false;*/
/*     });*/
/* */
/*     // Order and pagerfanta links*/
/*     $('a.order, nav a, a.searchOnClick, .pagination li:not(.disabled) a', '#{{ grid.hash }}').click(function () {*/
/*         {{ grid.hash }}_goto(this.href);*/
/* */
/*         return false;*/
/*     });*/
/* */
/*     // Reset link*/
/*     $('#{{ grid.hash }} a.grid-reset').click(function () {*/
/*         {{ grid.hash }}_reset();*/
/* */
/*         return false;*/
/*     });*/
/* */
/*     // Mass actions submit*/
/*     $('#{{ grid.hash }} input.submit-massaction').click(function () {*/
/*         var selector = $('#{{ grid.hash }} .grid_massactions select');*/
/* */
/*         {{ grid.hash }}_goto('{{ grid.routeUrl }}', selector.attr('name') + '=' + selector.val(), 'POST');*/
/* */
/*         return false;*/
/*     });*/
/* */
/*     // Grid_search submit (load only one time)*/
/*     $('#{{ grid.hash }}_search').one('submit', function (event) {*/
/*         {{ grid.hash }}_submitForm(event, this);*/
/* */
/*         return false;*/
/*     });*/
/* });*/
/* {% endblock grid_scripts_ajax %}*/
/* */
