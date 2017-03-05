<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_de1f5f72e120339d190fec1b11a3597a53c62af32e76a907f28ce77092c7d32d extends Twig_Template
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
        $__internal_ec9cfd7c6aa6ce2a55937b2ab1250bdae06266e1ac6552d2f0d84b4fd481003d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9cfd7c6aa6ce2a55937b2ab1250bdae06266e1ac6552d2f0d84b4fd481003d->enter($__internal_ec9cfd7c6aa6ce2a55937b2ab1250bdae06266e1ac6552d2f0d84b4fd481003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b602c7baa9c620ed0d78ccbc7b127262baf2f2c99cd236be48fd26888373244a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b602c7baa9c620ed0d78ccbc7b127262baf2f2c99cd236be48fd26888373244a->enter($__internal_b602c7baa9c620ed0d78ccbc7b127262baf2f2c99cd236be48fd26888373244a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ec9cfd7c6aa6ce2a55937b2ab1250bdae06266e1ac6552d2f0d84b4fd481003d->leave($__internal_ec9cfd7c6aa6ce2a55937b2ab1250bdae06266e1ac6552d2f0d84b4fd481003d_prof);

        
        $__internal_b602c7baa9c620ed0d78ccbc7b127262baf2f2c99cd236be48fd26888373244a->leave($__internal_b602c7baa9c620ed0d78ccbc7b127262baf2f2c99cd236be48fd26888373244a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
