<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07b9dd8bb00f04fbdf98042be15f69075581e401b4e98e42a2cf4d6eca16055c extends Twig_Template
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
        $__internal_2e7bc5db68477ace79e31b6e28da522657c1d146c848dbb2eabe308a42d75325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7bc5db68477ace79e31b6e28da522657c1d146c848dbb2eabe308a42d75325->enter($__internal_2e7bc5db68477ace79e31b6e28da522657c1d146c848dbb2eabe308a42d75325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c45a75c7846b21d6cb4619d975e102f2018c4afa9ce263f7ea5a9a6374da4c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45a75c7846b21d6cb4619d975e102f2018c4afa9ce263f7ea5a9a6374da4c37->enter($__internal_c45a75c7846b21d6cb4619d975e102f2018c4afa9ce263f7ea5a9a6374da4c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2e7bc5db68477ace79e31b6e28da522657c1d146c848dbb2eabe308a42d75325->leave($__internal_2e7bc5db68477ace79e31b6e28da522657c1d146c848dbb2eabe308a42d75325_prof);

        
        $__internal_c45a75c7846b21d6cb4619d975e102f2018c4afa9ce263f7ea5a9a6374da4c37->leave($__internal_c45a75c7846b21d6cb4619d975e102f2018c4afa9ce263f7ea5a9a6374da4c37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
