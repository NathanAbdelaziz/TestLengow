<?php

/* base.html.twig */
class __TwigTemplate_4814099c91e0c361d616942136ccae30c005b5519f787457ce560c8f2dd75116 extends Twig_Template
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
        $__internal_d63820f1f612353073e960132bf8bddd16ddb2c6dec08b4186472f2f96815958 = $this->env->getExtension("native_profiler");
        $__internal_d63820f1f612353073e960132bf8bddd16ddb2c6dec08b4186472f2f96815958->enter($__internal_d63820f1f612353073e960132bf8bddd16ddb2c6dec08b4186472f2f96815958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d63820f1f612353073e960132bf8bddd16ddb2c6dec08b4186472f2f96815958->leave($__internal_d63820f1f612353073e960132bf8bddd16ddb2c6dec08b4186472f2f96815958_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8ee172f16cda81c11691fec20bbf4a0eadda580c55ff20675b9929090a2b4b9 = $this->env->getExtension("native_profiler");
        $__internal_c8ee172f16cda81c11691fec20bbf4a0eadda580c55ff20675b9929090a2b4b9->enter($__internal_c8ee172f16cda81c11691fec20bbf4a0eadda580c55ff20675b9929090a2b4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8ee172f16cda81c11691fec20bbf4a0eadda580c55ff20675b9929090a2b4b9->leave($__internal_c8ee172f16cda81c11691fec20bbf4a0eadda580c55ff20675b9929090a2b4b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ef4a51a5857494ce45d31b5abfdb55666fd61eaefdc79b470bf6b933992feb1 = $this->env->getExtension("native_profiler");
        $__internal_8ef4a51a5857494ce45d31b5abfdb55666fd61eaefdc79b470bf6b933992feb1->enter($__internal_8ef4a51a5857494ce45d31b5abfdb55666fd61eaefdc79b470bf6b933992feb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8ef4a51a5857494ce45d31b5abfdb55666fd61eaefdc79b470bf6b933992feb1->leave($__internal_8ef4a51a5857494ce45d31b5abfdb55666fd61eaefdc79b470bf6b933992feb1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3b6d3e2491f3b93e0da18bfca1ab91ed9fac7fd2f8a4b5958ae5be1a9a781d8 = $this->env->getExtension("native_profiler");
        $__internal_c3b6d3e2491f3b93e0da18bfca1ab91ed9fac7fd2f8a4b5958ae5be1a9a781d8->enter($__internal_c3b6d3e2491f3b93e0da18bfca1ab91ed9fac7fd2f8a4b5958ae5be1a9a781d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3b6d3e2491f3b93e0da18bfca1ab91ed9fac7fd2f8a4b5958ae5be1a9a781d8->leave($__internal_c3b6d3e2491f3b93e0da18bfca1ab91ed9fac7fd2f8a4b5958ae5be1a9a781d8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_626de764442dc38717d8d4f122d7b866f052ab5084232531d80da19610f0e228 = $this->env->getExtension("native_profiler");
        $__internal_626de764442dc38717d8d4f122d7b866f052ab5084232531d80da19610f0e228->enter($__internal_626de764442dc38717d8d4f122d7b866f052ab5084232531d80da19610f0e228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_626de764442dc38717d8d4f122d7b866f052ab5084232531d80da19610f0e228->leave($__internal_626de764442dc38717d8d4f122d7b866f052ab5084232531d80da19610f0e228_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
