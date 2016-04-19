<?php

/* @Test/Default/index.html.twig */
class __TwigTemplate_1d2bdd0274baecfbbde6bc9148571bd827a43651916e125cb74ff29a1de21ae0 extends Twig_Template
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
        $__internal_e3efcaa61e5d6e756648e428fc9a35f568a40bceb50d35940b6460451b71a280 = $this->env->getExtension("native_profiler");
        $__internal_e3efcaa61e5d6e756648e428fc9a35f568a40bceb50d35940b6460451b71a280->enter($__internal_e3efcaa61e5d6e756648e428fc9a35f568a40bceb50d35940b6460451b71a280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/index.html.twig"));

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
        
        $__internal_e3efcaa61e5d6e756648e428fc9a35f568a40bceb50d35940b6460451b71a280->leave($__internal_e3efcaa61e5d6e756648e428fc9a35f568a40bceb50d35940b6460451b71a280_prof);

    }

    public function getTemplateName()
    {
        return "@Test/Default/index.html.twig";
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
