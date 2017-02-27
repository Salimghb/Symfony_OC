<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48d9a140dbdd2a82d0f0f3384bf26717bb6c632e5405846ff3c606e797f62e52 extends Twig_Template
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
        $__internal_562ca81bdbb86611a9ef5662c919cb3023f54844e61897f80b6d60fac32900d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562ca81bdbb86611a9ef5662c919cb3023f54844e61897f80b6d60fac32900d7->enter($__internal_562ca81bdbb86611a9ef5662c919cb3023f54844e61897f80b6d60fac32900d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0fd7ec6195c7a33b06c9dcffe1cd81daa0dd7809825da9a6018c00d4d25697c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd7ec6195c7a33b06c9dcffe1cd81daa0dd7809825da9a6018c00d4d25697c8->enter($__internal_0fd7ec6195c7a33b06c9dcffe1cd81daa0dd7809825da9a6018c00d4d25697c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_562ca81bdbb86611a9ef5662c919cb3023f54844e61897f80b6d60fac32900d7->leave($__internal_562ca81bdbb86611a9ef5662c919cb3023f54844e61897f80b6d60fac32900d7_prof);

        
        $__internal_0fd7ec6195c7a33b06c9dcffe1cd81daa0dd7809825da9a6018c00d4d25697c8->leave($__internal_0fd7ec6195c7a33b06c9dcffe1cd81daa0dd7809825da9a6018c00d4d25697c8_prof);

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
