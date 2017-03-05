<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fd43c6564980443072a892d087ebb765d2dd8ea5efff9575c380daf465fd917e extends Twig_Template
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
        $__internal_9bcd4c34f82946460145abb8abf910738aa819310e3b6873d40a7eefdd07fe5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcd4c34f82946460145abb8abf910738aa819310e3b6873d40a7eefdd07fe5d->enter($__internal_9bcd4c34f82946460145abb8abf910738aa819310e3b6873d40a7eefdd07fe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ab3116d76721b879ec3cb1cb0b168cb3a851ee9705fc174362f4661f2432c039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3116d76721b879ec3cb1cb0b168cb3a851ee9705fc174362f4661f2432c039->enter($__internal_ab3116d76721b879ec3cb1cb0b168cb3a851ee9705fc174362f4661f2432c039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9bcd4c34f82946460145abb8abf910738aa819310e3b6873d40a7eefdd07fe5d->leave($__internal_9bcd4c34f82946460145abb8abf910738aa819310e3b6873d40a7eefdd07fe5d_prof);

        
        $__internal_ab3116d76721b879ec3cb1cb0b168cb3a851ee9705fc174362f4661f2432c039->leave($__internal_ab3116d76721b879ec3cb1cb0b168cb3a851ee9705fc174362f4661f2432c039_prof);

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
