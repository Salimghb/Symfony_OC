<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2258561f07ff140e32c1f4f73224d9e8986815460ce10492ae868cda41c8499c extends Twig_Template
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
        $__internal_5bb2f9e8d7257afa041bfe6a9b8173df3d79a11b762226b038e7a6d7f5af80d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb2f9e8d7257afa041bfe6a9b8173df3d79a11b762226b038e7a6d7f5af80d7->enter($__internal_5bb2f9e8d7257afa041bfe6a9b8173df3d79a11b762226b038e7a6d7f5af80d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d3a4d16b438144e951e50c589c90f29a9bb93c020fdbc6712c232738afc52239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a4d16b438144e951e50c589c90f29a9bb93c020fdbc6712c232738afc52239->enter($__internal_d3a4d16b438144e951e50c589c90f29a9bb93c020fdbc6712c232738afc52239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5bb2f9e8d7257afa041bfe6a9b8173df3d79a11b762226b038e7a6d7f5af80d7->leave($__internal_5bb2f9e8d7257afa041bfe6a9b8173df3d79a11b762226b038e7a6d7f5af80d7_prof);

        
        $__internal_d3a4d16b438144e951e50c589c90f29a9bb93c020fdbc6712c232738afc52239->leave($__internal_d3a4d16b438144e951e50c589c90f29a9bb93c020fdbc6712c232738afc52239_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
