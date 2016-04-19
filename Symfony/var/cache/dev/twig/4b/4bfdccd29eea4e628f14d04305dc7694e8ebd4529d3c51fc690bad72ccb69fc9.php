<?php

/* ::base.html.twig */
class __TwigTemplate_8145a177af7fdbc3075c68e7a5f37bbf16be9628c38bad3fbae638a012b95390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c9888cdcf839ad653513b03bb965bfed15a9f1b746ad1969de6b44d06651c9 = $this->env->getExtension("native_profiler");
        $__internal_46c9888cdcf839ad653513b03bb965bfed15a9f1b746ad1969de6b44d06651c9->enter($__internal_46c9888cdcf839ad653513b03bb965bfed15a9f1b746ad1969de6b44d06651c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_46c9888cdcf839ad653513b03bb965bfed15a9f1b746ad1969de6b44d06651c9->leave($__internal_46c9888cdcf839ad653513b03bb965bfed15a9f1b746ad1969de6b44d06651c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c62bfb4d3021ab467fdd456c06c2aad976e862192dcc0735f16f6d06b647e419 = $this->env->getExtension("native_profiler");
        $__internal_c62bfb4d3021ab467fdd456c06c2aad976e862192dcc0735f16f6d06b647e419->enter($__internal_c62bfb4d3021ab467fdd456c06c2aad976e862192dcc0735f16f6d06b647e419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c62bfb4d3021ab467fdd456c06c2aad976e862192dcc0735f16f6d06b647e419->leave($__internal_c62bfb4d3021ab467fdd456c06c2aad976e862192dcc0735f16f6d06b647e419_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83e710718428827383ae972ecbe45657208efdac9ef1660dc911ecdcdf67a2da = $this->env->getExtension("native_profiler");
        $__internal_83e710718428827383ae972ecbe45657208efdac9ef1660dc911ecdcdf67a2da->enter($__internal_83e710718428827383ae972ecbe45657208efdac9ef1660dc911ecdcdf67a2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83e710718428827383ae972ecbe45657208efdac9ef1660dc911ecdcdf67a2da->leave($__internal_83e710718428827383ae972ecbe45657208efdac9ef1660dc911ecdcdf67a2da_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fa80e52e55f03450532fff007f3f97ed3141da7077155a241c1e539a17859eb = $this->env->getExtension("native_profiler");
        $__internal_6fa80e52e55f03450532fff007f3f97ed3141da7077155a241c1e539a17859eb->enter($__internal_6fa80e52e55f03450532fff007f3f97ed3141da7077155a241c1e539a17859eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6fa80e52e55f03450532fff007f3f97ed3141da7077155a241c1e539a17859eb->leave($__internal_6fa80e52e55f03450532fff007f3f97ed3141da7077155a241c1e539a17859eb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9f6bf1ed63dda8020bca7281230c04a2779eef3547f769d825a4fce34dd32b4 = $this->env->getExtension("native_profiler");
        $__internal_f9f6bf1ed63dda8020bca7281230c04a2779eef3547f769d825a4fce34dd32b4->enter($__internal_f9f6bf1ed63dda8020bca7281230c04a2779eef3547f769d825a4fce34dd32b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9f6bf1ed63dda8020bca7281230c04a2779eef3547f769d825a4fce34dd32b4->leave($__internal_f9f6bf1ed63dda8020bca7281230c04a2779eef3547f769d825a4fce34dd32b4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
