<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bc4aa508fa507f6e799d778c57026a449a85d83d46c32467104ce2b28c814a1c extends Twig_Template
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
        $__internal_b112e5754735038c27c942065b0f8b38fd5fee7fcf330cd5fc27368852c00876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b112e5754735038c27c942065b0f8b38fd5fee7fcf330cd5fc27368852c00876->enter($__internal_b112e5754735038c27c942065b0f8b38fd5fee7fcf330cd5fc27368852c00876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b5abc9f210c50f9863dbd73b557fceb15d41ea991e991acbf3c4304eadb5c15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5abc9f210c50f9863dbd73b557fceb15d41ea991e991acbf3c4304eadb5c15b->enter($__internal_b5abc9f210c50f9863dbd73b557fceb15d41ea991e991acbf3c4304eadb5c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b112e5754735038c27c942065b0f8b38fd5fee7fcf330cd5fc27368852c00876->leave($__internal_b112e5754735038c27c942065b0f8b38fd5fee7fcf330cd5fc27368852c00876_prof);

        
        $__internal_b5abc9f210c50f9863dbd73b557fceb15d41ea991e991acbf3c4304eadb5c15b->leave($__internal_b5abc9f210c50f9863dbd73b557fceb15d41ea991e991acbf3c4304eadb5c15b_prof);

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
