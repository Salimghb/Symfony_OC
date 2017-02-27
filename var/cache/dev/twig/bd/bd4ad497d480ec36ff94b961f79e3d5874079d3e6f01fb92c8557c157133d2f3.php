<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bba644c250feb8fb328919e8985ef1a90e4a5e9714a9d826e71df8c21de31ab9 extends Twig_Template
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
        $__internal_2417bc147c95df2d64dd9a2ff68eac88bad679237c70a281eba34d8b4ee6c590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2417bc147c95df2d64dd9a2ff68eac88bad679237c70a281eba34d8b4ee6c590->enter($__internal_2417bc147c95df2d64dd9a2ff68eac88bad679237c70a281eba34d8b4ee6c590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_13b854d69b8b68933e57dadf8e951474da699bc8f63617f1475a4ffc57028d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b854d69b8b68933e57dadf8e951474da699bc8f63617f1475a4ffc57028d92->enter($__internal_13b854d69b8b68933e57dadf8e951474da699bc8f63617f1475a4ffc57028d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2417bc147c95df2d64dd9a2ff68eac88bad679237c70a281eba34d8b4ee6c590->leave($__internal_2417bc147c95df2d64dd9a2ff68eac88bad679237c70a281eba34d8b4ee6c590_prof);

        
        $__internal_13b854d69b8b68933e57dadf8e951474da699bc8f63617f1475a4ffc57028d92->leave($__internal_13b854d69b8b68933e57dadf8e951474da699bc8f63617f1475a4ffc57028d92_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
