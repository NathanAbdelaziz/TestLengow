<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a91d824ed8a747b57c531423bc02e78fcab971a9bdb8d22819d8fd591a5ccd06 extends Twig_Template
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
        $__internal_bb98d245e3a26fc53797d781523fa5b1743ea58c1747c080e7457b47f7452024 = $this->env->getExtension("native_profiler");
        $__internal_bb98d245e3a26fc53797d781523fa5b1743ea58c1747c080e7457b47f7452024->enter($__internal_bb98d245e3a26fc53797d781523fa5b1743ea58c1747c080e7457b47f7452024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bb98d245e3a26fc53797d781523fa5b1743ea58c1747c080e7457b47f7452024->leave($__internal_bb98d245e3a26fc53797d781523fa5b1743ea58c1747c080e7457b47f7452024_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
