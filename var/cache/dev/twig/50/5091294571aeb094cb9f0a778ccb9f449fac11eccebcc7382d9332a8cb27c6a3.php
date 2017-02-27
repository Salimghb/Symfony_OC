<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_80d6a99a23793ca81696969ea4f35323e35ed20ee3e4b7d0d0c3359762f4ed7d extends Twig_Template
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
        $__internal_0c98273f06c47515d65c67175f792ded3a9a225fac8065628b431e64c2d4b9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c98273f06c47515d65c67175f792ded3a9a225fac8065628b431e64c2d4b9b1->enter($__internal_0c98273f06c47515d65c67175f792ded3a9a225fac8065628b431e64c2d4b9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_09a0ace24b32677884b9d2f4606c9bf6eb18fc5286722a65af1fff453a0bf3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a0ace24b32677884b9d2f4606c9bf6eb18fc5286722a65af1fff453a0bf3cb->enter($__internal_09a0ace24b32677884b9d2f4606c9bf6eb18fc5286722a65af1fff453a0bf3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0c98273f06c47515d65c67175f792ded3a9a225fac8065628b431e64c2d4b9b1->leave($__internal_0c98273f06c47515d65c67175f792ded3a9a225fac8065628b431e64c2d4b9b1_prof);

        
        $__internal_09a0ace24b32677884b9d2f4606c9bf6eb18fc5286722a65af1fff453a0bf3cb->leave($__internal_09a0ace24b32677884b9d2f4606c9bf6eb18fc5286722a65af1fff453a0bf3cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
