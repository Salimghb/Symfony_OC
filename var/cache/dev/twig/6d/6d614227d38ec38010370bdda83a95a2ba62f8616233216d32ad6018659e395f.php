<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4931b092f408a251789e2546d162e4ea5ce94bf5b939888fd4ea9be4cd915e57 extends Twig_Template
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
        $__internal_74c90db62d335c68fa92e61ae5477dd69b7cd4240b21d3dcc815d790c12cd4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c90db62d335c68fa92e61ae5477dd69b7cd4240b21d3dcc815d790c12cd4ea->enter($__internal_74c90db62d335c68fa92e61ae5477dd69b7cd4240b21d3dcc815d790c12cd4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_6563c1988d24796ed5bf3f3ca0ebb988025e2b7217057ea21cb406d50ec798d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6563c1988d24796ed5bf3f3ca0ebb988025e2b7217057ea21cb406d50ec798d4->enter($__internal_6563c1988d24796ed5bf3f3ca0ebb988025e2b7217057ea21cb406d50ec798d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_74c90db62d335c68fa92e61ae5477dd69b7cd4240b21d3dcc815d790c12cd4ea->leave($__internal_74c90db62d335c68fa92e61ae5477dd69b7cd4240b21d3dcc815d790c12cd4ea_prof);

        
        $__internal_6563c1988d24796ed5bf3f3ca0ebb988025e2b7217057ea21cb406d50ec798d4->leave($__internal_6563c1988d24796ed5bf3f3ca0ebb988025e2b7217057ea21cb406d50ec798d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
