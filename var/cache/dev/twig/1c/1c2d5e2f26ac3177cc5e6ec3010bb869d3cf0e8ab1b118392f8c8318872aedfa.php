<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9a6d5f7db34d8bfb78f904a4ffb0f245ac568bf24fbbbf9b5594f504735cc98f extends Twig_Template
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
        $__internal_ade5d42a97a4277a799eae14098a22961760f35314508422d13bb0c4765aff23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade5d42a97a4277a799eae14098a22961760f35314508422d13bb0c4765aff23->enter($__internal_ade5d42a97a4277a799eae14098a22961760f35314508422d13bb0c4765aff23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a546015d307dcdafaf1e949e210b724d5390b209625cea6e6426b974927fa13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a546015d307dcdafaf1e949e210b724d5390b209625cea6e6426b974927fa13e->enter($__internal_a546015d307dcdafaf1e949e210b724d5390b209625cea6e6426b974927fa13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ade5d42a97a4277a799eae14098a22961760f35314508422d13bb0c4765aff23->leave($__internal_ade5d42a97a4277a799eae14098a22961760f35314508422d13bb0c4765aff23_prof);

        
        $__internal_a546015d307dcdafaf1e949e210b724d5390b209625cea6e6426b974927fa13e->leave($__internal_a546015d307dcdafaf1e949e210b724d5390b209625cea6e6426b974927fa13e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
