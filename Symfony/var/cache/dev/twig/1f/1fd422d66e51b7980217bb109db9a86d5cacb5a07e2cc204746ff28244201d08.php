<?php

/* TestBundle:Default:index.html.twig */
class __TwigTemplate_042def1735589c84bf03e3ea6c8feb8b85a8d7ceba11b61d3b8f909a2f8a9715 extends Twig_Template
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
        $__internal_3645361529275fef1ae1ceff872541c8bfb3bd655d1673c4f3ce90b7da0e5c86 = $this->env->getExtension("native_profiler");
        $__internal_3645361529275fef1ae1ceff872541c8bfb3bd655d1673c4f3ce90b7da0e5c86->enter($__internal_3645361529275fef1ae1ceff872541c8bfb3bd655d1673c4f3ce90b7da0e5c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Télécharger le fichier XML :</h1>
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("recup");
        echo "\" method=\"post\">
    <label for=\"logger\">Login :</label> 
    <input type=\"text\" id=\"logger\" name=\"logger\"  />
    <input type=\"submit\" value=\"Télécharger\" />
</form>";
        
        $__internal_3645361529275fef1ae1ceff872541c8bfb3bd655d1673c4f3ce90b7da0e5c86->leave($__internal_3645361529275fef1ae1ceff872541c8bfb3bd655d1673c4f3ce90b7da0e5c86_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <h1>Télécharger le fichier XML :</h1>*/
/* {{ url }}*/
/* <form action="{{ path('recup') }}" method="post">*/
/*     <label for="logger">Login :</label> */
/*     <input type="text" id="logger" name="logger"  />*/
/*     <input type="submit" value="Télécharger" />*/
/* </form>*/
