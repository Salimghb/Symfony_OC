<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_75deec35f7d633e2129b60d241f12f3698b8c5e9d1a72cd4f2b0e40681d28a99 extends Twig_Template
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
        $__internal_25335576ee9f39d29f2b0ee02cca98be960b560b97d19963233aaf6f90fff7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25335576ee9f39d29f2b0ee02cca98be960b560b97d19963233aaf6f90fff7c6->enter($__internal_25335576ee9f39d29f2b0ee02cca98be960b560b97d19963233aaf6f90fff7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0cee08a7d3c294997943efef9ce819aa71a730413f5eb1a1478cd5cb80f8d97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cee08a7d3c294997943efef9ce819aa71a730413f5eb1a1478cd5cb80f8d97d->enter($__internal_0cee08a7d3c294997943efef9ce819aa71a730413f5eb1a1478cd5cb80f8d97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_25335576ee9f39d29f2b0ee02cca98be960b560b97d19963233aaf6f90fff7c6->leave($__internal_25335576ee9f39d29f2b0ee02cca98be960b560b97d19963233aaf6f90fff7c6_prof);

        
        $__internal_0cee08a7d3c294997943efef9ce819aa71a730413f5eb1a1478cd5cb80f8d97d->leave($__internal_0cee08a7d3c294997943efef9ce819aa71a730413f5eb1a1478cd5cb80f8d97d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
