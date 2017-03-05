<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_60e083c17cec66ad39289ca2141495650554dd49914cff5ece633d1b7ae23703 extends Twig_Template
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
        $__internal_a608b48dccc5993d334598020e9123d676f2f7d8a3f2399bd40eb82dcd4b5975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a608b48dccc5993d334598020e9123d676f2f7d8a3f2399bd40eb82dcd4b5975->enter($__internal_a608b48dccc5993d334598020e9123d676f2f7d8a3f2399bd40eb82dcd4b5975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b0bea6230fb1a7705259821b258763250f0ee514b0f78007064e7fefe24ab0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bea6230fb1a7705259821b258763250f0ee514b0f78007064e7fefe24ab0e9->enter($__internal_b0bea6230fb1a7705259821b258763250f0ee514b0f78007064e7fefe24ab0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a608b48dccc5993d334598020e9123d676f2f7d8a3f2399bd40eb82dcd4b5975->leave($__internal_a608b48dccc5993d334598020e9123d676f2f7d8a3f2399bd40eb82dcd4b5975_prof);

        
        $__internal_b0bea6230fb1a7705259821b258763250f0ee514b0f78007064e7fefe24ab0e9->leave($__internal_b0bea6230fb1a7705259821b258763250f0ee514b0f78007064e7fefe24ab0e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
