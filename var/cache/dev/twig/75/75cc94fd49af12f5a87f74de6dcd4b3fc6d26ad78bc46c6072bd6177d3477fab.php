<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_822f2919a17980553449eaea0ecdb79c7c80cdece5f90af3b967f820b1a85983 extends Twig_Template
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
        $__internal_78f56d8ad6d92b36dc400c3c0424bf56a70acc7c02dd8834e492302e1454c7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f56d8ad6d92b36dc400c3c0424bf56a70acc7c02dd8834e492302e1454c7e3->enter($__internal_78f56d8ad6d92b36dc400c3c0424bf56a70acc7c02dd8834e492302e1454c7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_dc4901c689f959d3717926791b638831aaf72e0d456c91bc262c49135f711f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4901c689f959d3717926791b638831aaf72e0d456c91bc262c49135f711f13->enter($__internal_dc4901c689f959d3717926791b638831aaf72e0d456c91bc262c49135f711f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_78f56d8ad6d92b36dc400c3c0424bf56a70acc7c02dd8834e492302e1454c7e3->leave($__internal_78f56d8ad6d92b36dc400c3c0424bf56a70acc7c02dd8834e492302e1454c7e3_prof);

        
        $__internal_dc4901c689f959d3717926791b638831aaf72e0d456c91bc262c49135f711f13->leave($__internal_dc4901c689f959d3717926791b638831aaf72e0d456c91bc262c49135f711f13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
