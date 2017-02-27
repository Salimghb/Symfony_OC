<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5aa29c1fe51ae25357839f6e8b20104a32a26b903c4c00d324997060cbad9ff6 extends Twig_Template
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
        $__internal_92ead8d6bf29d88bd80c6ecc839a9d82909fee1380590012d4117a006dcc5989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ead8d6bf29d88bd80c6ecc839a9d82909fee1380590012d4117a006dcc5989->enter($__internal_92ead8d6bf29d88bd80c6ecc839a9d82909fee1380590012d4117a006dcc5989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_e31e5100caf2c9ad4b4056a068d46b91ae4ba38d8760750759416cc98e269c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31e5100caf2c9ad4b4056a068d46b91ae4ba38d8760750759416cc98e269c21->enter($__internal_e31e5100caf2c9ad4b4056a068d46b91ae4ba38d8760750759416cc98e269c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_92ead8d6bf29d88bd80c6ecc839a9d82909fee1380590012d4117a006dcc5989->leave($__internal_92ead8d6bf29d88bd80c6ecc839a9d82909fee1380590012d4117a006dcc5989_prof);

        
        $__internal_e31e5100caf2c9ad4b4056a068d46b91ae4ba38d8760750759416cc98e269c21->leave($__internal_e31e5100caf2c9ad4b4056a068d46b91ae4ba38d8760750759416cc98e269c21_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
